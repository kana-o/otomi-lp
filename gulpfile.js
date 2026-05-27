const gulp = require("gulp");
const sass = require("gulp-dart-sass");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const browserSync = require("browser-sync");
const autoprefixer = require("gulp-autoprefixer");
const gcmq = require("gulp-group-css-media-queries");
const sassGlob = require('gulp-sass-glob-use-forward');
const webp = require('gulp-webp');

// WordPress テーマモード: テーマルートに style.css / front-page.php / parts/ を置き、
// アセットは ./assets/ に出力する。BrowserSync は Local の URL をプロキシする。
const siteUrl = '260528-test-otomi.local';

const srcBase = './src';
const distBase = '.';

const srcPath = {
  scss: srcBase + '/scss/**/*.scss',
  js:   srcBase + '/js/**/*.js',
  img:  srcBase + '/img/**/*.*',
};

const distPath = {
  css: distBase + '/assets/css/',
  js:  distBase + '/assets/js/',
  img: distBase + '/assets/img/',
};

// SCSS
const cssSass = () => {
  return gulp
    .src(srcPath.scss, { sourcemaps: true })
    .pipe(plumber({ errorHandler: notify.onError('Error:<%= error.message %>') }))
    .pipe(sassGlob())
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(gcmq())
    .pipe(autoprefixer())
    .pipe(gulp.dest(distPath.css, { sourcemaps: './' }))
    .pipe(browserSync.stream())
    .pipe(notify({ onLast: true }));
};

const copyScss = () => {
  return gulp.src(srcPath.scss).pipe(gulp.dest(distBase + '/assets/scss/'));
};

// JSコピー
const jsCopy = () => {
  return gulp
    .src(srcPath.js)
    .pipe(gulp.dest(distPath.js))
    .pipe(browserSync.stream());
};

// 画像 → WebP変換
const imageWebp = () => {
  return gulp
    .src(srcBase + '/img/**/*.+(jpg|jpeg|png)')
    .pipe(webp())
    .pipe(gulp.dest(distPath.img));
};

// BrowserSync（WordPress プロキシモード）
const browserSyncFunc = () => {
  browserSync.init({
    proxy: siteUrl,
    open: true,
    ghostMode: false,
  });
};

const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

// ファイル監視
const watchFiles = () => {
  gulp.watch(srcPath.scss, gulp.series(cssSass, copyScss));
  gulp.watch(srcPath.js, gulp.series(jsCopy, browserSyncReload));
  gulp.watch(srcPath.img, gulp.series(imageWebp, browserSyncReload));
  // PHP の更新もリロード対象に
  gulp.watch(['./**/*.php', '!./node_modules/**'], gulp.series(browserSyncReload));
};

exports.default = gulp.series(
  gulp.parallel(cssSass, copyScss, jsCopy, imageWebp),
  gulp.parallel(watchFiles, browserSyncFunc),
);
