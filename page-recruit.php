<?php get_header(); ?>

<main id="top" class="main">

  <section class="fv">
    <div class="fv__bg" aria-hidden="true">
      <picture class="fv__bg-photo">
        <source media="(max-width: 768px)" type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/fv_sp.webp">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/fv_sp.jpg">
        <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/fv_pc.webp">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/fv_pc.png" alt="" fetchpriority="high" decoding="async">
      </picture>
      <div class="fv__bg-gradient"></div>
    </div>
    <header class="header">
      <div class="header__brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo" aria-label="大富運輸 採用サイト">
          <picture>
            <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/header_logo-sp.svg">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/header_logo-pc.svg" alt="" width="252" height="43" loading="eager">
          </picture>
        </a>
      </div>
      <nav class="header__nav" aria-label="ヘッダーナビゲーション">
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a href="https://otomiunyu.com/" class="header__nav-link"  target="_blank" rel="noopener noreferrer">
              <span>会社サイト</span>
              <span class="header__nav-icon" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/arrow-circle.svg" alt="" width="17" height="17">
              </span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="#entry" class="header__nav-link">
              <span>お問い合わせ</span>
              <span class="header__nav-icon" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/arrow-circle.svg" alt="" width="17" height="17">
              </span>
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="inner fv__inner">
      <div class="fv__copy">
        <h1 class="fv__title">ただ運ぶだけじゃ、<br>終わらない。</h1>
        <p class="fv__lead">相手の"本当に求めていること"まで考える仕事</p>
        <div class="fv__cta">
          <a href="#recruitment" class="fv__cta-btn fv__cta-btn--white">
            <span>採用情報を見る</span>
            <span class="fv__cta-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/cta-arrow.svg" alt="" width="30" height="30">
            </span>
          </a>
          <a href="#entry" class="fv__cta-btn fv__cta-btn--blue">
            <span>エントリーする</span>
            <span class="fv__cta-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/cta-arrow-blue.svg" alt="" width="30" height="30">
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 青リボン背景 -->
  <div class="ribbon__bg01"></div>

  <!-- 安全に、真面目に、でも楽しく。そんな仲間を募集しています。 -->
    <section class="safety inner">
      <h2 class="safety__title">安全に、真面目に、でも楽しく。<br>そんな仲間を募集しています。</h2>
      <p class="safety__text">
        社会を支える仕事だからこそ、安全に、真面目に。<br>そして、一緒に働くなら楽しく<br>そんな仲間を募集しています。</p>
      <figure class="safety__photo">
        <picture>
          <source media="(max-width: 768px)" type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/safety-photo-sp.webp">
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/safety-photo-sp.jpg">
          <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/safety-photo.webp">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/safety-photo.jpg" alt="森を抜ける曲がりくねった一本道（俯瞰）" width="1280" height="380" loading="lazy">
        </picture>
      </figure>
    </section>

  <!-- Philosophy / 私たちが思い描く未来 -->
  <section class="philosophy inner">
    <div class="philosophy__container js-slidein">
      <div class="philosophy__head">
        <p class="section-title--en">Philosophy</p>
        <h2 class="section-title">私たちが<br>思い描く未来</h2>
      </div>
      <div class="philosophy__img">
        <picture>
          <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-lead.webp">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-lead.png" alt="ヘルメット姿の大富運輸の社員" width="176" height="279" loading="lazy">
        </picture>
      </div>
      <ul class="philosophy__list">
        <li class="philosophy__item">
          <figure class="philosophy__item-img">
            <picture>
              <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-01.webp">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-01.jpg" alt="青空を背に走る白いタンクローリー" width="350" height="233" loading="lazy">
            </picture>
          </figure>
          <div class="philosophy__texts">
            <p class="philosophy__item-no">01</p>
            <h3 class="philosophy__item-title">丁寧に積み重ねること</h3>
            <p class="philosophy__item-text">大きな成果は、日々の小さな積み重ねから生まれる。<br>安全、確認、思いやり。<br>一つひとつを丁寧に続けることを大切にしてほしい。</p>
          </div>
        </li>
        <li class="philosophy__item">
          <figure class="philosophy__item-img">
            <picture>
              <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-02.webp">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-02.jpg" alt="フレコンバッグを積み込む作業員" width="350" height="233" loading="lazy">
            </picture>
          </figure>
          <div class="philosophy__texts">
            <p class="philosophy__item-no">02</p>
            <h3 class="philosophy__item-title">本質を考えること</h3>
            <p class="philosophy__item-text">私たちは物流を通じて、社会を支える仕事をしています。<br>自分の仕事が、誰かや社会を支えていることを大切にしてほしい。</p>
          </div>
        </li>
        <li class="philosophy__item">
          <figure class="philosophy__item-img">
            <picture>
              <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-03.webp">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-03.jpg" alt="屋外で打ち合わせをする2人の社員" width="350" height="233" loading="lazy">
            </picture>
          </figure>
          <div class="philosophy__texts">
            <p class="philosophy__item-no">03</p>
            <h3 class="philosophy__item-title">楽しく働くには仲間に感謝すること。</h3>
            <p class="philosophy__item-text">仕事は、一人ではできない。<br>仲間、お客様、支えてくれる人たち。<br>当たり前ではない日々への感謝を、忘れないでいてほしい。</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- Behavioral guidelines / 行動指針5箇条 -->
  <section class="section five">
    <div class="five__container inner">
      <div class="five__bg" aria-hidden="true">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/behavioral_bg-sp.svg">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/behavioral_bg-pc.svg" alt="" width="1280" height="920">
        </picture>
      </div>
      <div class="five__head">
        <p class="section-title--en">Behavioral guidelines</p>
        <h2 class="section-title">行動指針5箇条</h2>
      </div>
      <ul class="five__list">
        <li class="five__item">
          <span class="five__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-guideline-1.svg" alt="" width="52" height="52">
          </span>
          <h3 class="five__item-title">本質から考える</h3>
          <p class="five__item-text">目の前の作業だけを見るのではなく、「なぜこの仕事が必要なのか」を考える。</p>
        </li>
        <li class="five__item">
          <span class="five__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-guideline-2.svg" alt="" width="52" height="52">
          </span>
          <h3 class="five__item-title">プロセスを<br class="sp-show" >誠実に積み重ねる</h3>
          <p class="five__item-text">結果だけを追わない。安全・確認・準備・対話。日々の積み重ねが、信頼をつくる。</p>
        </li>
        <li class="five__item">
          <span class="five__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-guideline-3.svg" alt="" width="52" height="52">
          </span>
          <h3 class="five__item-title">感謝を言葉にする</h3>
          <p class="five__item-text">物流は、一人では成り立たない。<br>支えてくれる仲間、お客様、社会への感謝を忘れない。</p>
        </li>
        <li class="five__item">
          <span class="five__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-guideline-4.svg" alt="" width="52" height="52">
          </span>
          <h3 class="five__item-title">必要なことを伝える勇気を持つ</h3>
          <p class="five__item-text">人の顔色ではなく、案件と安全に真摯に向き合う。</p>
        </li>
        <li class="five__item">
          <span class="five__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-guideline-5.svg" alt="" width="52" height="52">
          </span>
          <h3 class="five__item-title">社会を止めない意識を持つ</h3>
          <p class="five__item-text">私たちの仕事は、社会インフラの一部である。目立たなくても、止まらない存在であり続ける。</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- Message / 社長メッセージ -->
  <section class="section message">
    <div class="message__container inner">
      <div class="message__head">
        <p class="section-title--en">Message</p>
        <h2 class="section-title">社長メッセージ</h2>
      </div>
      <figure class="message__photo">
        <picture>
          <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/message-photo.webp">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/message-photo.jpg" alt="代表取締役 尾﨑俊介" width="350" height="233" loading="lazy">
        </picture>
      </figure>
      <h3 class="message__lead">事に仕え、社会を静かに支える</h3>
      <p class="message__body">
        物流は、ただ物を運ぶ仕事ではありません。<br>&thinsp;工場や現場、そこで働く人々の日常を止めない、社会を支える仕事だと考えています。<br>だからこそ、結果だけではなく、日々の安全や確認、丁寧な仕事の積み重ねを大切にしています。<br>そして、どんな仕事も一人では成り立ちません。<br>&thinsp;仲間やお客様、支えてくださるすべての方への感謝を忘れず、誠実に向き合うことを大事にしています。<br>安全に、真面目に、でも楽しく。<br>&thinsp;そんな仲間と共に、これからも社会を支えていく一員として、一緒に仕事ができればと思います。
      </p>
      <p class="message__signature">大富運輸株式会社 代表取締役　尾﨑俊介</p>
    </div>
  </section>

  <!-- Voice / 働く人の声 -->
  <section class="section voice">
    <div class="inner">
      <div class="voice__container">
        <div class="voice__bg" aria-hidden="true">
          <picture>
            <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice_bg-sp.svg">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice_bg-pc.svg" alt="" width="1280" height="971">
          </picture>
        </div>
        <div class="voice__head">
          <p class="section-title--en">Voice</p>
          <h2 class="section-title">働く人の声</h2>
      </div>
      <div class="voice__slider">
        <div class="swiper js-voice-swiper">
          <!-- 無限ループにするため 各スライド×2に複製 -->
          <ul class="voice__list swiper-wrapper">
          <li class="voice__item swiper-slide">
            <figure class="voice__item-photo">
              <picture>
                <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.webp">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.jpg" alt="トラックの前に立つ男性ドライバー" width="227" height="184" loading="lazy">
              </picture>
              <p class="voice__item-photo-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            </figure>
            <p class="voice__item-lead">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="voice__item-texts">
              <p class="voice__item-text">山田 太郎</p>
              <p class="voice__item-text">ドライバー｜入社3年目</p>
            </div>
          </li>
          <li class="voice__item swiper-slide">
            <figure class="voice__item-photo">
              <picture>
                <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.webp">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.jpg" alt="トラックの前に立つ男性ドライバー" width="227" height="184" loading="lazy">
              </picture>
              <p class="voice__item-photo-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            </figure>
            <p class="voice__item-lead">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="voice__item-texts">
              <p class="voice__item-text">山田 太郎</p>
              <p class="voice__item-text">ドライバー｜入社3年目</p>
            </div>
          </li>
          <li class="voice__item swiper-slide">
            <figure class="voice__item-photo">
              <picture>
                <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.webp">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.jpg" alt="トラックの前に立つ男性ドライバー" width="227" height="184" loading="lazy">
              </picture>
              <p class="voice__item-photo-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            </figure>
            <p class="voice__item-lead">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="voice__item-texts">
              <p class="voice__item-text">山田 太郎</p>
              <p class="voice__item-text">ドライバー｜入社3年目</p>
            </div>
          </li>
          <li class="voice__item swiper-slide">
            <figure class="voice__item-photo">
              <picture>
                <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.webp">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.jpg" alt="トラックの前に立つ男性ドライバー" width="227" height="184" loading="lazy">
              </picture>
              <p class="voice__item-photo-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            </figure>
            <p class="voice__item-lead">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="voice__item-texts">
              <p class="voice__item-text">山田 太郎</p>
              <p class="voice__item-text">ドライバー｜入社3年目</p>
            </div>
          </li>
          <li class="voice__item swiper-slide">
            <figure class="voice__item-photo">
              <picture>
                <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.webp">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.jpg" alt="トラックの前に立つ男性ドライバー" width="227" height="184" loading="lazy">
              </picture>
              <p class="voice__item-photo-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            </figure>
            <p class="voice__item-lead">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="voice__item-texts">
              <p class="voice__item-text">山田 太郎</p>
              <p class="voice__item-text">ドライバー｜入社3年目</p>
            </div>
          </li>
          <li class="voice__item swiper-slide">
            <figure class="voice__item-photo">
              <picture>
                <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.webp">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-photo.jpg" alt="トラックの前に立つ男性ドライバー" width="227" height="184" loading="lazy">
              </picture>
              <p class="voice__item-photo-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            </figure>
            <p class="voice__item-lead">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="voice__item-texts">
              <p class="voice__item-text">山田 太郎</p>
              <p class="voice__item-text">ドライバー｜入社3年目</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="voice__controls">
        <button type="button" class="voice__nav voice__nav--prev js-voice-prev" aria-label="前のインタビュー">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-arrow-prev.svg" alt="" width="45" height="45">
        </button>
          <button type="button" class="voice__nav voice__nav--next js-voice-next" aria-label="次のインタビュー">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/voice-arrow-next.svg" alt="" width="45" height="45">
          </button>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!-- Culture / 私たちが大切にする3つの文化 -->
  <section class="section culture">
    <div class="culture__container inner">
      <div class="section-head-center culture__head">
        <p class="section-title--en">Culture</p>
        <h2 class="section-title">私たちが大切にする3つの文化</h2>
      </div>
      <ul class="culture__list">
        <li class="culture__item">
          <picture class="culture__item-ribbon">
            <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/culture_bg01-sp.svg">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/culture_bg01-pc.svg" alt="" aria-hidden="true">
          </picture>
          <div class="culture__texts">
            <h3 class="culture__item-title">本質を考える文化</h3>
            <p class="culture__item-text">ただ作業をこなすのではなく、「なぜこの仕事が必要なのか」を考える。<br><br class="sp-show">目の前の業務の先にある、現場・社会・人の動きを理解しながら働く。</p>
          </div>
        </li>
        <li class="culture__item">
          <picture class="culture__item-ribbon">
            <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/culture_bg02-sp.svg">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/culture_bg02-pc.svg" alt="" aria-hidden="true">
          </picture>
          <div class="culture__texts">
            <h3 class="culture__item-title">丁寧に積み重ねる文化</h3>
            <p class="culture__item-text">安全、確認、準備、報連相。<br>一つひとつを丁寧に積み重ねる。<br>派手さよりも、揺らがない仕事を大切にする。</p>
          </div>
        </li>
        <li class="culture__item">
          <picture class="culture__item-ribbon">
            <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/culture_bg03-sp.svg">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/culture_bg03-pc.svg" alt="" aria-hidden="true">
          </picture>
          <div class="culture__texts">
            <h3 class="culture__item-title">感謝を伝え合う文化</h3>
            <p class="culture__item-text">物流は、一人では成り立たない。<br>仲間、お客様、現場。<br>支えてくれる存在への感謝を、言葉にする。</p>
          </div>
        </li>
      </ul>
      <figure class="culture__team">
        <picture>
          <source media="(max-width: 768px)" type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-03.webp">
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/philosophy-03.jpg">
          <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/culture-team-photo.webp">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/culture-team-photo.png" alt="大富運輸のチーム" width="350" height="234" loading="lazy">
        </picture>
      </figure>
    </div>
  </section>

  <!-- Day / 社員の一日 -->
  <section class="section daily">
    <div class="daily__container inner">
      <div class="daily__head">
        <p class="section-title--en">Day</p>
        <h2 class="section-title">社員の一日</h2>
      </div>
      <div class="daily__tabs" role="tablist" aria-label="運行パターン">
        <button type="button" class="daily__tab is-active" role="tab" id="daily-tab-1" data-tab="1" aria-selected="true" aria-controls="daily-panel-1">
          <span class="daily__tab-label">運行①</span>
          <span class="daily__tab-icon" aria-hidden="true">
            <img class="daily__tab-icon--b" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/daily-tab-arrow-b.svg" alt="" width="24" height="24">
            <img class="daily__tab-icon--w" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/daily-tab-arrow-w.svg" alt="" width="24" height="24">
          </span>
        </button>
        <button type="button" class="daily__tab" role="tab" id="daily-tab-2" data-tab="2" aria-selected="false" aria-controls="daily-panel-2">
          <span class="daily__tab-label">運行②</span>
          <span class="daily__tab-icon" aria-hidden="true">
            <img class="daily__tab-icon--b" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/daily-tab-arrow-b.svg" alt="" width="24" height="24">
            <img class="daily__tab-icon--w" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/daily-tab-arrow-w.svg" alt="" width="24" height="24">
          </span>
        </button>
        <button type="button" class="daily__tab" role="tab" id="daily-tab-3" data-tab="3" aria-selected="false" aria-controls="daily-panel-3">
          <span class="daily__tab-label">運行③</span>
          <span class="daily__tab-icon" aria-hidden="true">
            <img class="daily__tab-icon--b" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/daily-tab-arrow-b.svg" alt="" width="24" height="24">
            <img class="daily__tab-icon--w" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/daily-tab-arrow-w.svg" alt="" width="24" height="24">
          </span>
        </button>
      </div>

      <div class="daily__panel is-active" role="tabpanel" id="daily-panel-1" aria-labelledby="daily-tab-1">
        <ol class="daily__timeline">
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">3:15</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">出社<br class="sp-only">（点呼、車両の日常点検）</h3>
              <p class="daily__timeline-text">朝の点呼で本日のルートを確認。車両の安全チェックを入念に行います。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">3:30</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">出庫</h3>
              <p class="daily__timeline-text --wrap">効率的なルートを自分で考え、配送スタート。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">7:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">積込地到着（休憩）</h3>
              <p class="daily__timeline-text">途中で休憩。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">8:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">積込開始</h3>
              <p class="daily__timeline-text">積込作業を開始します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">9:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">積込完了（出発）</h3>
              <p class="daily__timeline-text">積込完了後、出発します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">11:45</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">荷卸地到着（荷卸開始）</h3>
              <p class="daily__timeline-text">荷卸地到着後、荷卸を開始します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">13:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">荷卸完了（出発）</h3>
              <p class="daily__timeline-text">荷卸完了後、出発します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">14:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">休憩（30分）</h3>
              <p class="daily__timeline-text">途中で休憩。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">15:45</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">帰庫（車両の点検、点呼）</h3>
              <p class="daily__timeline-text">無事に1日の運行完了です。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">16:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">帰社</h3>
              <p class="daily__timeline-text">1日の業務終了です。</p>
            </div>
          </li>
        </ol>
      </div>
      <div class="daily__panel" role="tabpanel" id="daily-panel-2" aria-labelledby="daily-tab-2" hidden>
        <ol class="daily__timeline">
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">5:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">出社<br class="sp-only">（点呼、車両の日常点検）</h3>
              <p class="daily__timeline-text">朝の点呼で本日のルートを確認。車両の安全チェックを入念に行います。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">5:15</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">出庫</h3>
              <p class="daily__timeline-text">効率的なルートを自分で考え、配送スタート。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">6:30</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">積込地到着（休憩）</h3>
              <p class="daily__timeline-text">途中で休憩。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">7:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">積込開始</h3>
              <p class="daily__timeline-text">積込作業を開始します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">8:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">積込完了（出発）</h3>
              <p class="daily__timeline-text">積込完了後、出発します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">10:45</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">荷卸地到着（荷卸開始）</h3>
              <p class="daily__timeline-text">荷卸地到着後、荷卸を開始します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">12:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">荷卸完了（出発）</h3>
              <p class="daily__timeline-text">荷卸完了後、出発します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">12:30</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">休憩（30分）</h3>
              <p class="daily__timeline-text">途中で休憩。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">15:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">帰庫（車両の点検、点呼）</h3>
              <p class="daily__timeline-text">無事に1日の運行完了です。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">15:15</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">帰社</h3>
              <p class="daily__timeline-text">1日の業務終了です。</p>
            </div>
          </li>
        </ol>
      </div>
      <div class="daily__panel" role="tabpanel" id="daily-panel-3" aria-labelledby="daily-tab-3" hidden>
        <ol class="daily__timeline">
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">3:15</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">出社<br class="sp-only">（点呼、車両の日常点検）</h3>
              <p class="daily__timeline-text">朝の点呼で本日のルートを確認。車両の安全チェックを入念に行います。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">3:30</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">出庫</h3>
              <p class="daily__timeline-text">効率的なルートを自分で考え、配送スタート。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">6:30</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">荷降地到着（休憩）</h3>
              <p class="daily__timeline-text">途中で休憩。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">7:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">荷卸開始</h3>
              <p class="daily__timeline-text">荷卸作業を開始します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">8:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">荷卸完了</h3>
              <p class="daily__timeline-text">荷卸完了後、出発します。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">10:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">休憩（60分）</h3>
              <p class="daily__timeline-text">途中で休憩。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">13:00</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">帰庫（車両の点検、点呼）</h3>
              <p class="daily__timeline-text">無事に1日の運行完了です。</p>
            </div>
          </li>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time">13:15</p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title">帰社</h3>
              <p class="daily__timeline-text">1日の業務終了です。</p>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </section>

  <!-- 青リボン背景 -->
  <div class="ribbon__bg02"></div>

  <!-- Evaluation  / 評価制度 -->
  <section class="section career">
    <div class="inner">
      <div class="section-head-center career__head">
        <p class="section-title--en">Evaluation</p>
        <h2 class="section-title">評価制度</h2>
      </div>
      <ul class="career__list">
        <li class="career__item">
          <div class="career__item-num" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/career-icon.svg" alt="" width="40" height="40">
          </div>
          <div class="career__item-texts">
            <h3 class="career__item-title">プロセス重視</h3>
            <p class="career__item-text">結果だけでなく、そこに至るプロセスと思考を評価</p>
          </div>
        </li>
        <li class="career__item">
          <div class="career__item-num" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/career-icon.svg" alt="" width="40" height="40">
          </div>
          <div class="career__item-texts">
            <h3 class="career__item-title">自律性の評価</h3>
            <p class="career__item-text">自ら考え、行動した姿勢を高く評価</p>
          </div>
        </li>
        <li class="career__item">
          <div class="career__item-num" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/career-icon.svg" alt="" width="40" height="40">
          </div>
          <div class="career__item-texts">
            <h3 class="career__item-title">チーム貢献</h3>
            <p class="career__item-text">個人の成果だけでなく、チームへの貢献を重視</p>
          </div>
        </li>
        <li class="career__item">
          <div class="career__item-num" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/career-icon.svg" alt="" width="40" height="40">
          </div>
          <div class="career__item-texts">
            <h3 class="career__item-title">改善提案力</h3>
            <p class="career__item-text">現状に疑問を持ち、改善を提案する力を評価</p>
          </div>
        </li>
        <li class="career__item">
          <div class="career__item-num" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/career-icon.svg" alt="" width="40" height="40">
          </div>
          <div class="career__item-texts">
            <h3 class="career__item-title">成長意欲</h3>
            <p class="career__item-text">学び続ける姿勢と、挑戦する勇気を評価</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- 青リボン背景 -->
  <div class="ribbon__bg02 --sp"></div>

    <!-- Numbers / 数字で見る大富運輸 -->
  <section class="section stats">
    <div class="inner">
    <div class="stats__container">
      <div class="section-head-center stats__head">
        <p class="section-title--en">Numbers</p>
        <h2 class="section-title">数字で見る大富運輸</h2>
      </div>
      <ul class="stats__list">
        <li class="stats__item">
          <span class="stats__item-label">創業</span>
          <span class="stats__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-num-1.svg" alt="" width="66" height="66">
          </span>
          <p class="stats__item-value">50年以上</p>
          <p class="stats__item-desc">長年の実績と信頼</p>
        </li>
        <li class="stats__item">
          <span class="stats__item-label">従業員数</span>
          <span class="stats__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-num-2.svg" alt="" width="66" height="66">
          </span>
          <p class="stats__item-value">22人</p>
          <p class="stats__item-desc">少数精鋭のチーム</p>
        </li>
        <li class="stats__item">
          <span class="stats__item-label">ドライバー平均勤続年数</span>
          <span class="stats__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-num-3.svg" alt="" width="66" height="66">
          </span>
          <p class="stats__item-value">17年</p>
          <p class="stats__item-desc">働きやすさの証</p>
        </li>
        <li class="stats__item">
          <span class="stats__item-label">継続勤続年数</span>
          <span class="stats__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-num-4.svg" alt="" width="66" height="66">
          </span>
          <p class="stats__item-value">35年以上</p>
          <p class="stats__item-desc">働きやすい環境</p>
        </li>
        <li class="stats__item">
          <span class="stats__item-label">年間休日</span>
          <span class="stats__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-num-5.svg" alt="" width="66" height="66">
          </span>
          <p class="stats__item-value">120日以上</p>
          <p class="stats__item-desc">休みやすい環境</p>
        </li>
        <li class="stats__item">
          <span class="stats__item-label">平均有給取得率</span>
          <span class="stats__item-icon --small" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-house.svg" alt="" width="66" height="66">
          </span>
          <p class="stats__item-value">50%以上</p>
          <p class="stats__item-desc">働き方改革を実践</p>
        </li>
      </ul>
    </div>
    </div>
  </section>

  <!-- Environment / 働く環境・働き方 -->
  <section class="section environment">
    <div class="environment__container inner">
      <div class="environment__head">
        <p class="section-title--en">Environment</p>
        <h2 class="section-title">働く環境・働き方</h2>
      </div>
      <ul class="environment__list">
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">きめ細かな車両整備</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">健康管理の徹底（健康経営優良法人）</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">迅速な事故・トラブル対応</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">リモートワーク可能（事務職）</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">定期的な安全講習・研修</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">高い有給取得率（50%）</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">「土日祝休み固定枠」の新設</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">全車ドラレコの完備</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">デジタコデータを活用した「エコドライブ手当」「安全運転ボーナス」</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">免許取得支援</span>
        </li>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text">ビジネスチャット（LINE WORKS）を活用した情報共有</span>
        </li>
      </ul>
      <div class="environment__photos">
        <figure class="environment__photo"><picture><source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env01.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env01.jpg" alt="タンクローリーが並ぶ車庫を俯瞰した様子" width="173" height="311" loading="lazy"></picture></figure>
        <figure class="environment__photo"><picture><source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env02.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/env02.jpg" alt="ヘルメットを被った社員の横顔" width="173" height="311" loading="lazy"></picture></figure>
      </div>
    </div>
  </section>

    <!-- 青リボン背景 -->
    <div class="ribbon__bg03"></div>

    <!-- Environment / 福利厚生 -->
  <section class="section benefits">
    <div class="inner">
      <div class="section-head-center benefits__head">
        <p class="section-title--en">Benefits</p>
        <h2 class="section-title">福利厚生</h2>
      </div>
      <ul class="benefits__list">
        <li class="benefits__item">
          <div class="benefits__item-head">
            <span class="benefits__item-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-benefit-1.svg" alt="" width="56" height="56">
            </span>
            <h3 class="benefits__item-title">給与・手当</h3>
          </div>
          <ul class="benefits__item-list">
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>昇給年1回</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>賞与年2回</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>各種手当（通勤・家族・資格など）</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>残業代全額支給</span>
            </li>
          </ul>
        </li>
        <li class="benefits__item">
          <div class="benefits__item-head">
            <span class="benefits__item-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-benefit-2.svg" alt="" width="56" height="56">
            </span>
            <h3 class="benefits__item-title">保険・年金</h3>
          </div>
          <ul class="benefits__item-list">
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>社会保険完備</span>
            </li>
            <li class="benefits__item-li --01">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>厚生年金</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>雇用保険</span>
            </li>
            <li class="benefits__item-li --02">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>労災保険</span>
            </li>
          </ul>
        </li>
        <li class="benefits__item">
          <div class="benefits__item-head">
            <span class="benefits__item-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-benefit-3.svg" alt="" width="56" height="56">
            </span>
            <h3 class="benefits__item-title">休暇・休日</h3>
          </div>
          <ul class="benefits__item-list">
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>基本は土日祝休み</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>年間休日120日以上、GW休みあり</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>休日は運行に応じて調整</span>
            </li>
          </ul>
        </li>
        <li class="benefits__item">
          <div class="benefits__item-head">
            <span class="benefits__item-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-benefit-4.svg" alt="" width="56" height="56">
            </span>
            <h3 class="benefits__item-title">支援制度</h3>
          </div>
          <ul class="benefits__item-list">
            <li class="benefits__item-li --wrap">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>資格取得支援あり（大型自動車運転免許）</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>研修制度</span>
            </li>
            <li class="benefits__item-li --03">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>自己啓発支援</span>
            </li>
          </ul>
        </li>
        <li class="benefits__item">
          <div class="benefits__item-head">
            <span class="benefits__item-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-benefit-5.svg" alt="" width="56" height="56">
            </span>
            <h3 class="benefits__item-title">その他</h3>
          </div>
          <ul class="benefits__item-list">
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>転勤なし</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>残業は人による。全体としては少ない</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>車・自転車・バイク通勤可</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>制服あり、スーツ着用なし</span>
            </li>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>健康経営優良法人を取得済み</span>
            </li>
          </ul>
        </li>
        <li class="benefits__item">
          <div class="benefits__item-head">
            <span class="benefits__item-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-benefit-6.svg" alt="" width="56" height="56">
            </span>
            <h3 class="benefits__item-title">服装</h3>
          </div>
          <ul class="benefits__item-list">
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <div class="benefits__item-clothing">
                <span>服装・髪型は自由（清潔感は必要）</span>
                <p>トップス・ボトムス・靴は「黒・白・ベージュ・グレー・ネイビー・ブラウン」が基本</p>
                <p>デニムも可（ただし清潔感が前提）</p>
                <p>髪色・髪型（髪色は自由、金髪・ピンク・青・緑などもOK、編み込みなども許容）</p>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </section>

  <!-- Training / 研修制度・社内制度 -->
  <section class="section system">
    <div class="system__bg" aria-hidden="true">
      <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-bg.svg" alt="">
    </div>
    <div class="inner">
      <div class="system__head">
        <p class="section-title--en">Training</p>
        <h2 class="section-title">研修制度・社内制度</h2>
      </div>
      <ul class="system__steps">
        <li class="system__step">
          <p class="system__step-step">
            <span class="system__step-label">Step 01</span>
            <span class="system__step-arrows" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
            </span>
          </p>
          <h3 class="system__step-title">入社前研修</h3>
          <ul class="system__step-items">
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>会社理念の理解</span>
            </li>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>基礎知識の習得</span>
            </li>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>先輩社員との交流</span>
            </li>
          </ul>
        </li>
        <li class="system__step">
          <p class="system__step-step">
            <span class="system__step-label">Step 02</span>
            <span class="system__step-arrows" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
            </span>
          </p>
          <h3 class="system__step-title">OJT研修（3ヶ月）</h3>
          <ul class="system__step-items">
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>先輩とのペア業務</span>
            </li>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>実務を通じた学び</span>
            </li>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>定期的なフィードバック</span>
            </li>
          </ul>
        </li>
        <li class="system__step">
          <p class="system__step-step">
            <span class="system__step-label">Step 03</span>
            <span class="system__step-arrows" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
            </span>
          </p>
          <h3 class="system__step-title">スキルアップ研修</h3>
          <ul class="system__step-items">
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>専門知識の深化</span>
            </li>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>資格取得サポート</span>
            </li>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>外部研修への参加</span>
            </li>
          </ul>
        </li>
        <li class="system__step">
          <p class="system__step-step">
            <span class="system__step-label">Step 04</span>
            <span class="system__step-arrows" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-arrow.svg" alt="" width="23" height="16">
            </span>
          </p>
          <h3 class="system__step-title">管理職研修</h3>
          <ul class="system__step-items">
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>リーダーシップ</span>
            </li>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>マネジメント</span>
            </li>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span>経営視点の習得</span>
            </li>
          </ul>
        </li>
      </ul>
      <p class="section-badge system__badge">継続的な学び</p>
      <ul class="system__cards">
        <li class="system__card">
          <figure class="system__card-img"><picture><source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-photo-1.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-photo-1.jpg" alt="モニターを囲んで行う社内勉強会" width="169" height="104" loading="lazy"></picture></figure>
          <h4 class="system__card-title">社内勉強会</h4>
          <p class="system__card-text">月1回、テーマ別の勉強会を開催</p>
        </li>
        <li class="system__card">
          <figure class="system__card-img"><picture><source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-photo-2.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-photo-2.jpg" alt="1on1で対話する社員" width="169" height="104" loading="lazy"></picture></figure>
          <h4 class="system__card-title">1on1ミーティング</h4>
          <p class="system__card-text">上司との定期的な対話でキャリア支援</p>
        </li>
        <li class="system__card">
          <figure class="system__card-img"><picture><source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-photo-3.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-photo-3.jpg" alt="資料を前に改善提案を説明する社員" width="169" height="104" loading="lazy"></picture></figure>
          <h4 class="system__card-title">改善提案制度</h4>
          <p class="system__card-text">良い提案は表彰・報酬あり</p>
        </li>
        <li class="system__card">
          <figure class="system__card-img"><picture><source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-photo-4.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/system-photo-4.jpg" alt="表彰で拍手する社員たち" width="169" height="104" loading="lazy"></picture></figure>
          <h4 class="system__card-title">社内表彰制度</h4>
          <p class="system__card-text">優れた成果や貢献を全社で称賛</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- Satisfaction / 仕事のやりがい -->
  <section class="section satisfaction">
    <div class="inner">
      <div class="section-head-center satisfaction__head">
        <p class="section-title--en">Satisfaction</p>
        <h2 class="section-title">仕事のやりがい</h2>
      </div>
      <div class="satisfaction__stage js-satisfaction-stage">
        <div class="satisfaction__sticky">
      <ul class="satisfaction__list js-satisfaction-cards">
        <li class="satisfaction__card js-satisfaction-card satisfaction__card--lvl-1">
          <div class="satisfaction__card-body">
            <span class="satisfaction__card-no">no. 01</span>
            <h3 class="satisfaction__card-title">社会を支える実感</h3>
            <p class="satisfaction__card-text">自分の仕事が誰かの生活を支え、社会を動かしている実感を日々得られます。物流は社会のインフラ。<br><br>あなたの働きが、多くの人々の暮らしを支えています。</p>
          </div>
          <figure class="satisfaction__card-img">
            <picture>
              <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/satisfaction-1.webp">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/satisfaction-1.jpg" alt="トラックの前に立つドライバー" width="310" height="118" loading="lazy">
            </picture>
          </figure>
        </li>
        <li class="satisfaction__card js-satisfaction-card satisfaction__card--lvl-2">
          <div class="satisfaction__card-body">
            <span class="satisfaction__card-no">no. 02</span>
            <h3 class="satisfaction__card-title">自律的に働ける</h3>
            <p class="satisfaction__card-text">指示待ちではなく、自分で考え、判断し、行動する。<br><br>その自由と責任が、仕事の面白さを何倍にも広げてくれます。</p>
          </div>
          <figure class="satisfaction__card-img">
            <picture>
              <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/satisfaction-2.webp">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/satisfaction-2.jpg" alt="デスクで業務にあたる社員" width="310" height="118" loading="lazy">
            </picture>
          </figure>
        </li>
        <li class="satisfaction__card js-satisfaction-card satisfaction__card--lvl-3">
          <div class="satisfaction__card-body">
            <span class="satisfaction__card-no">no. 03</span>
            <h3 class="satisfaction__card-title">成長を実感できる</h3>
            <p class="satisfaction__card-text">挑戦と失敗を繰り返す中で、自分が確実に成長していることを実感できます。<br><br>半年前の自分と、今の自分が明らかに違う。それが当社の醍醐味です。</p>
          </div>
          <figure class="satisfaction__card-img">
            <picture>
              <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/satisfaction-3.webp">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/satisfaction-3.jpg" alt="フォークリフトで荷物を運ぶ社員" width="310" height="118" loading="lazy">
            </picture>
          </figure>
        </li>
        <li class="satisfaction__card js-satisfaction-card satisfaction__card--lvl-4">
          <div class="satisfaction__card-body">
            <span class="satisfaction__card-no">no. 04</span>
            <h3 class="satisfaction__card-title">チームで達成する喜び</h3>
            <p class="satisfaction__card-text">一人では解決できない課題も、チームなら乗り越えられる。<br><br>仲間と共に成果を出す喜びは、何にも代えがたいものです。</p>
          </div>
          <figure class="satisfaction__card-img">
            <picture>
              <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/satisfaction-4.webp">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/satisfaction-4.jpg" alt="トラックの前で笑顔を見せる2人の社員" width="310" height="118" loading="lazy">
            </picture>
          </figure>
        </li>
      </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 青リボン背景 -->
  <div class="ribbon__bg04"></div>

  <!-- Recruitment / 募集要項 -->
  <section class="section recruitment" id="recruitment">
    <div class="inner">
      <div class="section-head-center recruitment__head">
        <p class="section-title--en">Recruitment</p>
        <h2 class="section-title">募集要項</h2>
      </div>
      <?php
      $jobs_query = new WP_Query([
        'post_type'      => 'job',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'no_found_rows'  => false,
      ]);

      $job_rows = [
        '仕事内容' => 'job_content',
        '応募資格' => 'job_qualification',
        '給与'     => 'job_salary',
        '勤務時間' => 'job_hours',
        '休日'     => 'job_holiday',
      ];

      if ($jobs_query->have_posts()) :
      ?>
      <ul class="recruitment__cards">
        <?php while ($jobs_query->have_posts()) : $jobs_query->the_post(); ?>
        <li class="recruitment__card">
          <figure class="recruitment__card-photo">
            <?php
            $photo_id = function_exists('get_field') ? (int) get_field('job_photo') : 0;
            if ($photo_id) :
              echo wp_get_attachment_image($photo_id, 'medium_large', false, ['alt' => get_the_title(), 'loading' => 'lazy']);
            endif;
            ?>
          </figure>
          <p class="recruitment__card-badge"><?php the_title(); ?></p>
          <dl class="recruitment__card-dl">
            <?php foreach ($job_rows as $label => $field_name) :
              $value = function_exists('get_field') ? (string) get_field($field_name) : '';
              if ($value === '') {
                continue;
              }
            ?>
            <div class="recruitment__card-row">
              <dt><?php echo esc_html($label); ?></dt>
              <dd><?php echo nl2br(esc_html($value)); ?></dd>
            </div>
            <?php endforeach; ?>
          </dl>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php
        wp_reset_postdata();
      endif;
      ?>

      <p class="section-badge recruitment__badge">応募の流れ</p>
      <ul class="recruitment__flow">
        <li class="recruitment__flow-item recruitment__flow-item--flow-bg-1">
          <p class="recruitment__flow-step">Step 01</p>
          <p class="recruitment__flow-title">エントリー</p>
          <span class="recruitment__flow-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/recruit-mail.svg" alt="" width="64" height="64">
          </span>
        </li>
        <li class="recruitment__flow-item recruitment__flow-item--flow-bg-2">
          <p class="recruitment__flow-step">Step 02</p>
          <p class="recruitment__flow-title">書類選考</p>
          <span class="recruitment__flow-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/recruit-paper.svg" alt="" width="64" height="64">
          </span>
        </li>
        <li class="recruitment__flow-item recruitment__flow-item--flow-bg-3">
          <p class="recruitment__flow-step">Step 03</p>
          <p class="recruitment__flow-title">面接(1〜2回)</p>
          <span class="recruitment__flow-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/recruit-people.svg" alt="" width="64" height="64">
          </span>
        </li>
        <li class="recruitment__flow-item recruitment__flow-item--flow-bg-4">
          <p class="recruitment__flow-step">Step 04</p>
          <p class="recruitment__flow-title">内定</p>
          <span class="recruitment__flow-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/recruit-handshake.svg" alt="" width="64" height="64">
          </span>
        </li>
      </ul>
    </div>
  </section>

  <!-- 青リボン背景 -->
  <div class="ribbon__bg06"></div>

  <!-- FAQ / よくある質問 -->
  <section class="section faq">
    <div class="faq__container inner">
      <div class="faq__head">
        <p class="section-title--en">FAQ</p>
        <h2 class="section-title">よくある質問</h2>
        <p class="faq__note">その他、ご質問があればお気軽にご連絡ください。</p>
      </div>
      <ul class="faq__list">
        <li class="faq__item">
          <details>
            <summary class="faq__q">
              <span class="faq__mark" aria-hidden="true">Q.</span>
              <span class="faq__q-text">未経験でも応募できますか？</span>
              <span class="faq__arrow" aria-hidden="true"></span>
            </summary>
            <div class="faq__a">
              <span class="faq__mark" aria-hidden="true">A.</span>
              <p class="faq__a-text">はい。<br>入社後は研修や先輩の同乗指導があり、安心してスタートできます。</p>
            </div>
          </details>
        </li>
        <li class="faq__item">
          <details>
            <summary class="faq__q">
              <span class="faq__mark" aria-hidden="true">Q.</span>
              <span class="faq__q-text">長距離運行はありますか？</span>
              <span class="faq__arrow" aria-hidden="true"></span>
            </summary>
            <div class="faq__a">
              <span class="faq__mark" aria-hidden="true">A.</span>
              <p class="faq__a-text">基本は関東圏内の配送業務がメインです。</p>
            </div>
          </details>
        </li>
        <li class="faq__item">
          <details>
            <summary class="faq__q">
              <span class="faq__mark" aria-hidden="true">Q.</span>
              <span class="faq__q-text">休日はどのようになっていますか？</span>
              <span class="faq__arrow" aria-hidden="true"></span>
            </summary>
            <div class="faq__a">
              <span class="faq__mark" aria-hidden="true">A.</span>
              <p class="faq__a-text">基本は土日祝休み、年間休日120日以上です。</p>
            </div>
          </details>
        </li>
        <li class="faq__item">
          <details>
            <summary class="faq__q">
              <span class="faq__mark" aria-hidden="true">Q.</span>
              <span class="faq__q-text">車両や安全設備はどうなっていますか？</span>
              <span class="faq__arrow" aria-hidden="true"></span>
            </summary>
            <div class="faq__a">
              <span class="faq__mark" aria-hidden="true">A.</span>
              <p class="faq__a-text">全車ドラレコ完備、定期的な安全講習を実施しています。</p>
            </div>
          </details>
        </li>
        <li class="faq__item">
          <details>
            <summary class="faq__q">
              <span class="faq__mark" aria-hidden="true">Q.</span>
              <span class="faq__q-text">女性ドライバーも働けますか？</span>
              <span class="faq__arrow" aria-hidden="true"></span>
            </summary>
            <div class="faq__a">
              <span class="faq__mark" aria-hidden="true">A.</span>
              <p class="faq__a-text">はい、活躍中の女性ドライバーがいます。</p>
            </div>
          </details>
        </li>
        <li class="faq__item">
          <details>
            <summary class="faq__q">
              <span class="faq__mark" aria-hidden="true">Q.</span>
              <span class="faq__q-text">資格取得支援制度はありますか？</span>
              <span class="faq__arrow" aria-hidden="true"></span>
            </summary>
            <div class="faq__a">
              <span class="faq__mark" aria-hidden="true">A.</span>
              <p class="faq__a-text">大型自動車運転免許など、資格取得を会社がサポートします。</p>
            </div>
          </details>
        </li>
        <li class="faq__item">
          <details>
            <summary class="faq__q">
              <span class="faq__mark" aria-hidden="true">Q.</span>
              <span class="faq__q-text">健康面のサポートはありますか？</span>
              <span class="faq__arrow" aria-hidden="true"></span>
            </summary>
            <div class="faq__a">
              <span class="faq__mark" aria-hidden="true">A.</span>
              <p class="faq__a-text">健康経営優良法人として、定期健康診断や健康管理を徹底しています。</p>
            </div>
          </details>
        </li>
      </ul>
    </div>
  </section>

  <!-- 青リボン背景 -->
  <div class="ribbon__bg05"></div>

  <!-- Entry / コトに、向き合える“人”へ -->
  <section class="section entry" id="entry">
    <div class="entry__head">
        <h2 class="entry__title"><span class="entry__title-jp">コトに、向き合える</span><span class="entry__title-en">"人"</span><span class="entry__title-jp">へ。</span></h2>
        <p class="entry__eyebrow-wrap">
          <span class="entry__eyebrow-line entry__eyebrow-line--l" aria-hidden="true"></span>
          <span class="entry__eyebrow">Entry</span>
          <span class="entry__eyebrow-line entry__eyebrow-line--r" aria-hidden="true"></span>
        </p>
        <p class="entry__lead">あなたの意志と行動が、物流を動かす。<br class="sp-show">まず話を聞くだけでも構いません。</p>
        <a href="https://lin.ee/qbFCWvz" class="entry__line-btn" target="_blank" rel="noopener noreferrer">
          <span class="entry__line-icon" aria-hidden="true">
            <picture>
              <source type="image/webp" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/line-icon.webp">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/line-icon.png" alt="" width="46" height="46" loading="lazy">
            </picture>
          </span>
          <span>お友だち追加</span>
        </a>
    </div>
    <div class="entry__container inner">

      <?php
      $entry_forms = get_posts([
        'post_type'      => 'wpcf7_contact_form',
        'title'          => '採用エントリー',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'no_found_rows'  => true,
      ]);
      if (!empty($entry_forms)) :
        echo do_shortcode('[contact-form-7 id="' . (int) $entry_forms[0]->ID . '" title="採用エントリー" html_class="entry__form"]');
      else :
      ?>
      <p class="entry__form-note">エントリーフォームは現在準備中です。お手数ですが公式LINEまたはお電話よりお問い合わせください。</p>
      <?php endif; ?>
    </div>
  </section>


</main>

<!-- SP下部固定ボタン-->
<div class="sp-cta js-sp-cta" aria-hidden="true">
  <a href="#recruitment" class="sp-cta__btn sp-cta__btn--white">
    <span>採用情報を見る</span>
    <span class="sp-cta__icon" aria-hidden="true">
      <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/cta-arrow.svg" alt="" width="30" height="30">
    </span>
  </a>
  <a href="#entry" class="sp-cta__btn sp-cta__btn--blue">
    <span>エントリーする</span>
    <span class="sp-cta__icon" aria-hidden="true">
      <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/cta-arrow-blue.svg" alt="" width="30" height="30">
    </span>
  </a>
</div>

<!-- フッター -->
<footer class="footer">
  <div class="footer__bg" aria-hidden="true">
    <picture>
      <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/footer-ribbon-sp.svg">
      <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/footer-ribbon.svg" alt="">
    </picture>
  </div>
  <div class="footer__inner inner">
    <div class="footer__top">
      <div class="footer__company">
        <p class="footer__company-name">大富運輸株式会社</p>
        <p class="footer__company-addr">埼玉県入間市大字寺竹1166番地1</p>
        <a href="tel:0429362882" class="footer__company-tel">04-2936-2882</a>
        <a href="#" class="footer__icon" aria-label="Instagram">
            <span class="footer__icon-sns" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/icon-insta.svg" alt="" width="30" height="30">
            </span>
          </a>
      </div>
      <a class="footer__social" href="#top" aria-label="トップへ戻る">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/footer-social.svg" alt="" width="48" height="48">
      </a>
    </div>
    <a class="footer__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="otomi">
      <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/footer-logo.svg" alt="otomi">
    </a>
    <div class="footer__ctas">
      <a href="#recruitment" class="footer__cta footer__cta--white">
        <span>採用情報を見る</span>
        <span class="footer__cta-arrow" aria-hidden="true">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/arrow-circle.svg" alt="" width="30" height="30">
        </span>
      </a>
      <a href="#entry" class="footer__cta footer__cta--blue">
        <span>エントリーする</span>
        <span class="footer__cta-arrow" aria-hidden="true">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/lp/cta-arrow-blue.svg" alt="" width="30" height="30">
        </span>
      </a>
    </div>
    <p class="footer__copy">＠2026 大富運輸株式会社</p>
  </div>
</footer>

<?php get_footer(); ?>
