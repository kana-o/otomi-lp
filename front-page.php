<?php get_header(); ?>

<main class="main">

  <?php /* FV (KV) */ ?>
  <section class="fv">
    <?php /* 背景: PC=トラック写真+青リボン / SP=トラック写真+下半分ブルーグラデーション */ ?>
    <div class="fv__bg" aria-hidden="true">
      <div class="fv__bg-blue"></div>
      <div class="fv__bg-photo fv__bg-photo--pc"></div>
      <div class="fv__bg-photo fv__bg-photo--sp"></div>
      <div class="fv__bg-gradient"></div>
    </div>

    <div class="fv__inner">
      <?php /* ヘッダー（FV内の固定ヘッダー扱い） */ ?>
      <header class="header">
        <div class="header__brand">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo" aria-label="大富運輸 採用サイト">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/logo.svg" alt="otomi" width="140" height="42" loading="eager">
          </a>
          <p class="header__tag">Recruit site</p>
        </div>
        <nav class="header__nav" aria-label="ヘッダーナビゲーション">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a href="#" class="header__nav-link">
                <span>会社サイト</span>
                <span class="header__nav-icon" aria-hidden="true">
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/arrow-circle-dark.svg" alt="" width="17" height="17">
                </span>
              </a>
            </li>
            <li class="header__nav-item">
              <a href="#" class="header__nav-link">
                <span>お問い合わせ</span>
                <span class="header__nav-icon" aria-hidden="true">
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/arrow-circle-dark.svg" alt="" width="17" height="17">
                </span>
              </a>
            </li>
          </ul>
        </nav>
      </header>

      <?php /* FVキャッチコピー＋CTA */ ?>
      <div class="fv__copy">
        <h1 class="fv__title">ただ運ぶだけじゃ、<br>終わらない。</h1>
        <p class="fv__lead">相手の"本当に求めていること"まで考える仕事</p>
        <div class="fv__cta">
          <a href="#" class="fv__cta-btn fv__cta-btn--white">
            <span>採用情報を見る</span>
            <span class="fv__cta-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/cta-arrow.svg" alt="" width="30" height="30">
            </span>
          </a>
          <a href="#" class="fv__cta-btn fv__cta-btn--blue">
            <span>エントリーする</span>
            <span class="fv__cta-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/cta-arrow-blue.svg" alt="" width="30" height="30">
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php /* 安全に / SP node-id: 574:76 */ ?>
  <section class="safety">
    <div class="safety__inner inner">
      <h2 class="safety__title">安全に、真面目に、でも楽しく。<br>そんな仲間を募集しています。</h2>
      <p class="safety__text">
        社会を支える仕事だからこそ、安全に、真面目に。<br>
        そして、一緒に働くなら楽しく。<br>
        そんな仲間を募集しています。
      </p>
      <figure class="safety__photo">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/safety-photo.png" alt="森を抜ける曲がりくねった一本道（俯瞰）" width="1280" height="380" loading="lazy">
      </figure>
    </div>
  </section>

  <?php /* 思い描く未来 / SP node-id: 574:122 */ ?>
  <section class="future">
    <div class="future__inner inner">
      <div class="future__head">
        <p class="future__eyebrow">Philosophy</p>
        <h2 class="future__title">私たちが<br>思い描く未来</h2>
      </div>
      <div class="future__lead">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/philosophy-lead.png" alt="" width="176" height="279" loading="lazy">
      </div>
      <ul class="future__list">
        <?php
        $future_cards = [
          ['no' => '01', 'title' => '丁寧に積み重ねること', 'img' => 'philosophy-01.png', 'text' => "大きな成果は、日々の小さな積み重ねから生まれる。\n安全、確認、思いやり。\n一つひとつを丁寧に続けることを大切にしてほしい。"],
          ['no' => '02', 'title' => '本質を考えること', 'img' => 'philosophy-02.png', 'text' => "私たちは物流を通じて、社会を支える仕事をしています。\n自分の仕事が、誰かや社会を支えていることを大切にしてほしい。"],
          ['no' => '03', 'title' => '楽しく働くには仲間に感謝すること。', 'img' => 'philosophy-03.png', 'text' => "仕事は、一人ではできない。\n仲間、お客様、支えてくれる人たち。\n当たり前ではない日々への感謝を、忘れないでいてほしい。"],
        ];
        foreach ($future_cards as $card) :
        ?>
        <li class="future__item">
          <figure class="future__item-img">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($card['img']); ?>" alt="" width="350" height="233" loading="lazy">
          </figure>
          <p class="future__item-no"><?php echo esc_html($card['no']); ?></p>
          <h3 class="future__item-title"><?php echo esc_html($card['title']); ?></h3>
          <p class="future__item-text"><?php echo nl2br(esc_html($card['text'])); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* 五か条 / SP node-id: 574:123 */ ?>
  <section class="five">
    <div class="five__inner inner">
      <div class="five__bg" aria-hidden="true">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/ribbon-vertical.svg" alt="" width="710" height="845">
      </div>
      <div class="five__head">
        <p class="five__eyebrow">Behavioral guidelines</p>
        <h2 class="five__title">行動指針5箇条</h2>
      </div>
      <ul class="five__list">
        <?php
        $five_items = [
          ['icon' => 'icon-guideline-1.svg', 'title' => '本質から考える', 'text' => '目の前の作業だけを見るのではなく、「なぜこの仕事が必要なのか」を考える。'],
          ['icon' => 'icon-guideline-2.svg', 'title' => "プロセスを\n誠実に積み重ねる", 'text' => '結果だけを追わない。安全・確認・準備・対話。日々の積み重ねが、信頼をつくる。'],
          ['icon' => 'icon-guideline-3.svg', 'title' => '感謝を言葉にする', 'text' => "物流は、一人では成り立たない。\n支えてくれる仲間、お客様、社会への感謝を忘れない。"],
          ['icon' => 'icon-guideline-4.svg', 'title' => '必要なことを伝える勇気を持つ', 'text' => '人の顔色ではなく、案件と安全に真摯に向き合う。'],
          ['icon' => 'icon-guideline-5.svg', 'title' => '社会を止めない意識を持つ', 'text' => '私たちの仕事は、社会インフラの一部である。目立たなくても、止まらない存在であり続ける。'],
        ];
        foreach ($five_items as $item) :
        ?>
        <li class="five__item">
          <span class="five__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($item['icon']); ?>" alt="" width="52" height="52">
          </span>
          <h3 class="five__item-title"><?php echo nl2br(esc_html($item['title'])); ?></h3>
          <p class="five__item-text"><?php echo esc_html($item['text']); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* メッセージ / SP node-id: 574:224 */ ?>
  <section class="message">
    <div class="message__inner inner">
      <div class="message__head">
        <p class="message__eyebrow">Message</p>
        <h2 class="message__title">社長メッセージ</h2>
      </div>
      <figure class="message__photo">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/message-photo.png" alt="代表取締役 尾﨑俊介" width="350" height="233" loading="lazy">
      </figure>
      <h3 class="message__lead">事に仕え、社会を静かに支える</h3>
      <p class="message__body">
        物流は、ただ物を運ぶ仕事ではありません。<br>
        工場や現場、そこで働く人々の日常を止めない、社会を支える仕事だと考えています。<br>
        だからこそ、結果だけではなく、日々の安全や確認、丁寧な仕事の積み重ねを大切にしています。<br>
        そして、どんな仕事も一人では成り立ちません。<br>
        仲間やお客様、支えてくださるすべての方への感謝を忘れず、誠実に向き合うことを大事にしています。<br>
        安全に、真面目に、でも楽しく。<br>
        そんな仲間と共に、これからも社会を支えていく一員として、一緒に仕事ができればと思います。
      </p>
      <p class="message__signature">大富運輸株式会社 代表取締役　尾﨑俊介</p>
    </div>
  </section>

  <?php /* 声（ドライバーインタビュー）/ SP node-id: 574:225 — スライダー */ ?>
  <section class="voice">
    <div class="voice__inner inner">
      <div class="voice__bg" aria-hidden="true">
        <img class="voice__bg-ribbon voice__bg-ribbon--1" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/voice-ribbon-1.svg" alt="">
        <img class="voice__bg-ribbon voice__bg-ribbon--2" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/voice-ribbon-2.svg" alt="">
      </div>
      <div class="voice__head">
        <p class="voice__eyebrow">Voice</p>
        <h2 class="voice__title">働く人の声</h2>
      </div>
      <div class="voice__slider js-voice-slider">
        <ul class="voice__list">
          <?php
          $voices = [
            ['photo' => 'voice-photo.png', 'lead' => 'ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。', 'name' => '山田 太郎', 'role' => 'ドライバー｜入社3年目'],
            ['photo' => 'voice-photo.png', 'lead' => 'ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。', 'name' => '山田 太郎', 'role' => 'ドライバー｜入社3年目'],
            ['photo' => 'voice-photo.png', 'lead' => 'ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。', 'name' => '山田 太郎', 'role' => 'ドライバー｜入社3年目'],
          ];
          foreach ($voices as $i => $v) :
          ?>
          <li class="voice__item js-voice-item<?php echo $i === 0 ? ' is-active' : ''; ?>" data-index="<?php echo $i; ?>">
            <figure class="voice__item-photo">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($v['photo']); ?>" alt="" width="227" height="184" loading="lazy">
            </figure>
            <p class="voice__item-lead"><?php echo esc_html($v['lead']); ?></p>
            <p class="voice__item-name"><?php echo esc_html($v['name']); ?></p>
            <p class="voice__item-role"><?php echo esc_html($v['role']); ?></p>
          </li>
          <?php endforeach; ?>
        </ul>
        <div class="voice__controls">
          <button type="button" class="voice__nav voice__nav--prev js-voice-prev" aria-label="前のインタビュー">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/voice-arrow-prev.svg" alt="" width="45" height="45">
          </button>
          <button type="button" class="voice__nav voice__nav--next js-voice-next" aria-label="次のインタビュー">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/voice-arrow-next.svg" alt="" width="45" height="45">
          </button>
        </div>
      </div>
    </div>
  </section>

  <?php /* カルチャー / SP node-id: 574:344 */ ?>
  <section class="culture">
    <div class="culture__inner inner">
      <div class="culture__head">
        <p class="culture__eyebrow">Culture</p>
        <h2 class="culture__title">私たちが大切にする3つの文化</h2>
      </div>
      <ul class="culture__list">
        <?php
        $cultures = [
          ['title' => '本質を考える文化', 'ribbon' => 'culture-ribbon-1.svg', 'text' => "ただ作業をこなすのではなく、「なぜこの仕事が必要なのか」を考える。\n\n目の前の業務の先にある、現場・社会・人の動きを理解しながら働く。"],
          ['title' => '丁寧に積み重ねる文化', 'ribbon' => 'culture-ribbon-2.svg', 'text' => "安全、確認、準備、報連相。\n一つひとつを丁寧に積み重ねる。\n派手さよりも、揺らがない仕事を大切にする。"],
          ['title' => '感謝を伝え合う文化', 'ribbon' => 'culture-ribbon-3.svg', 'text' => "物流は、一人では成り立たない。\n仲間、お客様、現場。\n支えてくれる存在への感謝を、言葉にする。"],
        ];
        foreach ($cultures as $c) :
        ?>
        <li class="culture__item">
          <img class="culture__item-ribbon" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($c['ribbon']); ?>" alt="" aria-hidden="true">
          <h3 class="culture__item-title"><?php echo esc_html($c['title']); ?></h3>
          <p class="culture__item-text"><?php echo nl2br(esc_html($c['text'])); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
      <figure class="culture__team">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/culture-team-photo.png" alt="大富運輸のチーム" width="350" height="234" loading="lazy">
      </figure>
    </div>
  </section>

  <?php /* 社員の一日 / SP node-id: 577:466 */ ?>
  <section class="daily">
    <div class="daily__inner inner">
      <div class="daily__head">
        <p class="daily__eyebrow">Day</p>
        <h2 class="daily__title">社員の一日</h2>
      </div>
      <div class="daily__tabs" role="tablist" aria-label="運行パターン">
        <button type="button" class="daily__tab is-active" role="tab" data-tab="1" aria-selected="true" aria-controls="daily-panel-1"><span class="daily__tab-label">運行①</span><span class="daily__tab-icon" aria-hidden="true"><img class="daily__tab-icon--b" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/daily-tab-arrow-b.svg" alt="" width="24" height="24"><img class="daily__tab-icon--w" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/daily-tab-arrow-w.svg" alt="" width="24" height="24"></span></button>
        <button type="button" class="daily__tab" role="tab" data-tab="2" aria-selected="false" aria-controls="daily-panel-2"><span class="daily__tab-label">運行②</span><span class="daily__tab-icon" aria-hidden="true"><img class="daily__tab-icon--b" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/daily-tab-arrow-b.svg" alt="" width="24" height="24"><img class="daily__tab-icon--w" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/daily-tab-arrow-w.svg" alt="" width="24" height="24"></span></button>
        <button type="button" class="daily__tab" role="tab" data-tab="3" aria-selected="false" aria-controls="daily-panel-3"><span class="daily__tab-label">運行③</span><span class="daily__tab-icon" aria-hidden="true"><img class="daily__tab-icon--b" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/daily-tab-arrow-b.svg" alt="" width="24" height="24"><img class="daily__tab-icon--w" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/daily-tab-arrow-w.svg" alt="" width="24" height="24"></span></button>
      </div>

      <?php
      $daily_panels = [
        1 => [
          ['time' => '3:15', 'title' => "出社\n（点呼、車両の日常点検）", 'text' => '朝の点呼で本日のルートを確認。車両の安全チェックを入念に行います。'],
          ['time' => '3:30', 'title' => '出庫', 'text' => '効率的なルートを自分で考え、配送スタート。'],
          ['time' => '7:00', 'title' => '積込地到着（休憩）', 'text' => '途中で休憩。'],
          ['time' => '8:00', 'title' => '積込開始', 'text' => '積込作業を開始します。'],
          ['time' => '9:00', 'title' => '積込完了（出発）', 'text' => '積込完了後、出発します。'],
          ['time' => '11:45', 'title' => '荷卸地到着（荷卸開始）', 'text' => '荷卸地到着後、荷卸を開始します。'],
          ['time' => '13:00', 'title' => '荷卸完了（出発）', 'text' => '荷卸完了後、出発します。'],
          ['time' => '14:00', 'title' => '休憩（30分）', 'text' => '途中で休憩。'],
          ['time' => '15:45', 'title' => '帰庫（車両の点検、点呼）', 'text' => '無事に1日の運行完了です。'],
          ['time' => '16:00', 'title' => '帰社', 'text' => '1日の業務終了です。'],
        ],
        2 => [
          ['time' => '6:00', 'title' => '出社・点呼', 'text' => 'アルコールチェックと健康確認。当日の配送計画を最終確認。'],
          ['time' => '6:30', 'title' => '車両点検・出発', 'text' => '車両の安全チェックを行い、効率的なルートで出発。'],
          ['time' => '9:00', 'title' => '積込・配送', 'text' => '積込地で荷物をピックアップし、配送先へ向かいます。'],
          ['time' => '12:00', 'title' => '休憩・昼食', 'text' => '安全な場所で休憩。次の運行に備えます。'],
          ['time' => '14:00', 'title' => '配送・荷卸', 'text' => '配送先で荷卸作業。お客様への丁寧な対応を心がけます。'],
          ['time' => '16:30', 'title' => '帰庫・点検', 'text' => '車両の日常点検を行い、報告事項をまとめます。'],
          ['time' => '17:30', 'title' => '退社', 'text' => '1日の業務終了です。'],
        ],
        3 => [
          ['time' => '8:00', 'title' => '出社・朝礼', 'text' => 'チームで情報共有。当日のタスクを確認します。'],
          ['time' => '8:30', 'title' => '配車計画', 'text' => '当日の配送計画を最適化。ドライバーへの指示出し。'],
          ['time' => '10:00', 'title' => '顧客対応', 'text' => 'お客様からの問い合わせに対応。受発注業務を進めます。'],
          ['time' => '12:00', 'title' => '昼休憩', 'text' => 'リフレッシュタイム。'],
          ['time' => '13:00', 'title' => 'データ入力・書類作成', 'text' => '配送実績のデータ入力、各種書類の作成。'],
          ['time' => '15:00', 'title' => 'ドライバー対応', 'text' => '帰庫したドライバーからの報告を受け、翌日の準備。'],
          ['time' => '17:30', 'title' => '退社', 'text' => '1日の業務終了です。'],
        ],
      ];
      foreach ($daily_panels as $tab_index => $items) :
      ?>
      <div class="daily__panel<?php echo $tab_index === 1 ? ' is-active' : ''; ?>" role="tabpanel" id="daily-panel-<?php echo $tab_index; ?>" aria-labelledby="daily-tab-<?php echo $tab_index; ?>"<?php if ($tab_index !== 1) echo ' hidden'; ?>>
        <ol class="daily__timeline">
          <?php foreach ($items as $item) : ?>
          <li class="daily__timeline-item">
            <span class="daily__timeline-dot" aria-hidden="true"></span>
            <p class="daily__timeline-time"><?php echo esc_html($item['time']); ?></p>
            <div class="daily__timeline-body">
              <h3 class="daily__timeline-title"><?php echo nl2br(esc_html($item['title'])); ?></h3>
              <p class="daily__timeline-text"><?php echo esc_html($item['text']); ?></p>
            </div>
          </li>
          <?php endforeach; ?>
        </ol>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <?php /* キャリアパス / SP node-id: 577:680 */ ?>
  <section class="career">
    <div class="career__inner inner">
      <div class="career__head">
        <p class="career__eyebrow">Evaluation</p>
        <h2 class="career__title">評価制度</h2>
      </div>
      <p class="career__badge">評価制度</p>
      <ul class="career__list">
        <?php
        $career_items = [
          ['title' => 'プロセス重視', 'text' => '結果だけでなく、そこに至るプロセスと思考を評価'],
          ['title' => '自律性の評価', 'text' => '自ら考え、行動した姿勢を高く評価'],
          ['title' => 'チーム貢献', 'text' => '個人の成果だけでなく、チームへの貢献を重視'],
          ['title' => '改善提案力', 'text' => '現状に疑問を持ち、改善を提案する力を評価'],
          ['title' => '成長意欲', 'text' => '学び続ける姿勢と、挑戦する勇気を評価'],
        ];
        foreach ($career_items as $i => $item) :
        ?>
        <li class="career__item">
          <span class="career__item-num" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/career-icon.svg" alt="" width="40" height="40">
          </span>
          <h3 class="career__item-title"><?php echo esc_html($item['title']); ?></h3>
          <p class="career__item-text"><?php echo esc_html($item['text']); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* 数字 / SP node-id: 589:416 */ ?>
  <section class="stats">
    <div class="stats__inner inner">
      <div class="stats__head">
        <p class="stats__eyebrow">Numbers</p>
        <h2 class="stats__title">数字で見る大富運輸</h2>
      </div>
      <ul class="stats__list">
        <?php
        $stats_items = [
          ['label' => '創業', 'value' => '50年以上', 'desc' => '長年の実績と信頼', 'icon' => 'icon-num-1.svg'],
          ['label' => '従業員数', 'value' => '22人', 'desc' => '少数精鋭のチーム', 'icon' => 'icon-num-2.svg'],
          ['label' => 'ドライバー平均勤続年数', 'value' => '17年', 'desc' => '働きやすさの証', 'icon' => 'icon-num-3.svg'],
          ['label' => '継続勤続年数', 'value' => '35年以上', 'desc' => '働きやすい環境', 'icon' => 'icon-num-4.svg'],
          ['label' => '年間休日', 'value' => '120日以上', 'desc' => '休みやすい環境', 'icon' => 'icon-num-5.svg'],
          ['label' => '平均有給取得率', 'value' => '50%以上', 'desc' => '働き方改革を実践', 'icon' => 'icon-house.svg'],
        ];
        foreach ($stats_items as $s) :
        ?>
        <li class="stats__item">
          <span class="stats__item-label"><?php echo esc_html($s['label']); ?></span>
          <span class="stats__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($s['icon']); ?>" alt="" width="66" height="66">
          </span>
          <p class="stats__item-value"><?php echo esc_html($s['value']); ?></p>
          <p class="stats__item-desc"><?php echo esc_html($s['desc']); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* 環境 / SP node-id: 577:733 */ ?>
  <section class="environment">
    <div class="environment__inner inner">
      <div class="environment__head">
        <p class="environment__eyebrow">Environment</p>
        <h2 class="environment__title">働く環境・働き方</h2>
      </div>
      <ul class="environment__list">
        <?php
        $env_items = [
          'きめ細かな車両整備',
          '健康管理の徹底（健康経営優良法人）',
          '迅速な事故・トラブル対応',
          'リモートワーク可能（事務職）',
          '定期的な安全講習・研修',
          '高い有給取得率（％）',
          '「土日祝休み固定枠」の新設',
          '全車ドラレコの完備',
          'デジタコデータを活用した「エコドライブ手当」「安全運転ボーナス」',
          '免許取得支援',
          'ビジネスチャット（LINE WORKS）を活用した情報共有',
        ];
        foreach ($env_items as $env) :
        ?>
        <li class="environment__item">
          <span class="environment__item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/env-check.svg" alt="" width="29" height="29">
          </span>
          <span class="environment__item-text"><?php echo esc_html($env); ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
      <div class="environment__photos">
        <figure class="environment__photo"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/env-photo-1.png" alt="" width="173" height="311" loading="lazy"></figure>
        <figure class="environment__photo"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/env-photo-2.png" alt="" width="173" height="311" loading="lazy"></figure>
      </div>
    </div>
  </section>

  <?php /* 福利厚生 / SP node-id: 589:415 */ ?>
  <section class="benefits">
    <div class="benefits__inner inner">
      <div class="benefits__head">
        <p class="benefits__eyebrow">Environment</p>
        <h2 class="benefits__title">福利厚生</h2>
      </div>
      <ul class="benefits__list">
        <?php
        $benefit_groups = [
          ['icon' => 'icon-benefit-1.svg', 'title' => '給与・手当', 'items' => ['昇給年1回', '賞与年2回', '各種手当（通勤・家族・資格など）', '残業代全額支給']],
          ['icon' => 'icon-benefit-2.svg', 'title' => '保険・年金', 'items' => ['社会保険完備', '厚生年金', '雇用保険', '労災保険']],
          ['icon' => 'icon-benefit-3.svg', 'title' => '休暇・休日', 'items' => ['基本は土日祝休み', '年間休日120日以上、GW休みあり', '休日は運行に応じて調整']],
          ['icon' => 'icon-benefit-4.svg', 'title' => '支援制度', 'items' => ['資格取得支援あり（大型自動車運転免許）', '研修制度', '自己啓発支援']],
          ['icon' => 'icon-benefit-5.svg', 'title' => 'その他', 'items' => ['転勤なし', '残業は人による。全体としては少ない', '車・自転車・バイク通勤可', '制服あり、スーツ着用なし', '健康経営優良法人を取得済み']],
          ['icon' => 'icon-benefit-5.svg', 'title' => '服装規定', 'items' => ['服装・髪型は自由（清潔感は必要）', 'トップス・ボトムス・靴は「黒・白・ベージュ・グレー・ネイビー・ブラウン」が基本', 'デニムも可（ただし清潔感が前提）', '髪色・髪型（髪色は自由、金髪・ピンク・青・緑などもOK、編み込みなども許容）']],
        ];
        foreach ($benefit_groups as $g) :
        ?>
        <li class="benefits__item">
          <div class="benefits__item-head">
            <span class="benefits__item-icon" aria-hidden="true">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($g['icon']); ?>" alt="" width="56" height="56">
            </span>
            <h3 class="benefits__item-title"><?php echo esc_html($g['title']); ?></h3>
          </div>
          <ul class="benefits__item-list">
            <?php foreach ($g['items'] as $sub) : ?>
            <li class="benefits__item-li">
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span><?php echo esc_html($sub); ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* 制度 / SP node-id: 577:1377 */ ?>
  <section class="system">
    <div class="system__inner inner">
      <div class="system__bg" aria-hidden="true">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/system-bg.svg" alt="">
      </div>
      <div class="system__head">
        <p class="system__eyebrow">Training</p>
        <h2 class="system__title">研修制度・社内制度</h2>
      </div>
      <ul class="system__steps">
        <?php
        $training_steps = [
          ['step' => 'Step 01', 'title' => '入社前研修', 'arrows' => 1, 'items' => ['会社理念の理解', '基礎知識の習得', '先輩社員との交流']],
          ['step' => 'Step 02', 'title' => 'OJT研修（3ヶ月）', 'arrows' => 2, 'items' => ['先輩とのペア業務', '実務を通じた学び', '定期的なフィードバック']],
          ['step' => 'Step 03', 'title' => 'スキルアップ研修', 'arrows' => 3, 'items' => ['専門知識の深化', '資格取得サポート', '外部研修への参加']],
          ['step' => 'Step 04', 'title' => '管理職研修', 'arrows' => 4, 'items' => ['リーダーシップ', 'マネジメント', '経営視点の習得']],
        ];
        foreach ($training_steps as $t) :
        ?>
        <li class="system__step">
          <p class="system__step-step">
            <span class="system__step-label"><?php echo esc_html($t['step']); ?></span>
            <span class="system__step-arrows" aria-hidden="true">
              <?php for ($i = 0; $i < $t['arrows']; $i++) : ?>
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/system-arrow.svg" alt="" width="23" height="16">
              <?php endfor; ?>
            </span>
          </p>
          <h3 class="system__step-title"><?php echo esc_html($t['title']); ?></h3>
          <ul class="system__step-items">
            <?php foreach ($t['items'] as $item) : ?>
            <li>
              <span class="benefits__item-check" aria-hidden="true">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/icon-check.svg" alt="" width="20" height="22">
              </span>
              <span><?php echo esc_html($item); ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php endforeach; ?>
      </ul>
      <p class="system__badge">継続的な学び</p>
      <ul class="system__cards">
        <?php
        $training_cards = [
          ['img' => 'system-photo-1.png', 'title' => '社内勉強会', 'text' => '月1回、テーマ別の勉強会を開催'],
          ['img' => 'system-photo-3.png', 'title' => '1on1ミーティング', 'text' => '上司との定期的な対話でキャリア支援'],
          ['img' => 'system-photo-2.png', 'title' => '改善提案制度', 'text' => '良い提案は表彰・報酬あり'],
          ['img' => 'system-photo-4.png', 'title' => '社内表彰制度', 'text' => '優れた成果や貢献を全社で称賛'],
        ];
        foreach ($training_cards as $c) :
        ?>
        <li class="system__card">
          <figure class="system__card-img"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($c['img']); ?>" alt="" width="169" height="104" loading="lazy"></figure>
          <h4 class="system__card-title"><?php echo esc_html($c['title']); ?></h4>
          <p class="system__card-text"><?php echo esc_html($c['text']); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* 仕事のやりがい / SP node-id: 578:1514 — スクロール出現アニメ */ ?>
  <section class="satisfaction">
    <div class="satisfaction__inner inner">
      <div class="satisfaction__head">
        <p class="satisfaction__eyebrow">Satisfaction</p>
        <h2 class="satisfaction__title">仕事のやりがい</h2>
      </div>
      <ul class="satisfaction__list js-satisfaction-cards">
        <?php
        $sat_cards = [
          ['no' => 'no. 01', 'title' => '社会を支える実感', 'text' => "自分の仕事が誰かの生活を支え、社会を動かしている実感を日々得られます。物流は社会のインフラ。\n\nあなたの働きが、多くの人々の暮らしを支えています。", 'img' => 'satisfaction-1.png', 'bg' => 'satisfaction__card--lvl-1'],
          ['no' => 'no. 02', 'title' => '自律的に働ける', 'text' => "指示待ちではなく、自分で考え、判断し、行動する。\n\nその自由と責任が、仕事の面白さを何倍にも広げてくれます。", 'img' => 'satisfaction-2.png', 'bg' => 'satisfaction__card--lvl-2'],
          ['no' => 'no. 03', 'title' => '成長を実感できる', 'text' => "挑戦と失敗を繰り返す中で、自分が確実に成長していることを実感できます。\n\n半年前の自分と、今の自分が明らかに違う。それが当社の醍醐味です。", 'img' => 'satisfaction-3.png', 'bg' => 'satisfaction__card--lvl-3'],
          ['no' => 'no. 04', 'title' => 'チームで達成する喜び', 'text' => "一人では解決できない課題も、チームなら乗り越えられる。\n\n仲間と共に成果を出す喜びは、何にも代えがたいものです。", 'img' => 'satisfaction-4.png', 'bg' => 'satisfaction__card--lvl-4'],
        ];
        foreach ($sat_cards as $card) :
        ?>
        <li class="satisfaction__card js-satisfaction-card <?php echo esc_attr($card['bg']); ?>">
          <span class="satisfaction__card-no"><?php echo esc_html($card['no']); ?></span>
          <h3 class="satisfaction__card-title"><?php echo esc_html($card['title']); ?></h3>
          <p class="satisfaction__card-text"><?php echo nl2br(esc_html($card['text'])); ?></p>
          <figure class="satisfaction__card-img">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($card['img']); ?>" alt="" width="310" height="118" loading="lazy">
          </figure>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* Frame 625556 / SP node-id: 578:1415 — やりがい no.01 と同じ単独カードの可能性。確認用に表示 */ ?>
  <section class="frame625556" hidden>
    <div class="inner">
      <article class="satisfaction__card satisfaction__card--lvl-0">
        <span class="satisfaction__card-no">no. 01</span>
        <h3 class="satisfaction__card-title">社会を支える実感</h3>
        <p class="satisfaction__card-text">自分の仕事が誰かの生活を支え、社会を動かしている実感を日々得られます。</p>
      </article>
    </div>
  </section>

  <?php /* 募集要項 / SP node-id: 578:1664 */ ?>
  <section class="recruitment" id="recruitment">
    <div class="recruitment__inner inner">
      <div class="recruitment__head">
        <p class="recruitment__eyebrow">Recruitment</p>
        <h2 class="recruitment__title">募集要項</h2>
      </div>
      <ul class="recruitment__cards">
        <?php
        $jobs = [
          [
            'photo' => 'recruit-photo-1.png',
            'badge' => 'ドライバー',
            'rows' => [
              ['label' => '仕事内容', 'value' => '一般貨物の配送業務（主に関東圏内）'],
              ['label' => '応募資格', 'value' => '中型免許以上（大型免許あれば尚可） 未経験者歓迎'],
              ['label' => '給与', 'value' => "月給 〇〇万円〜〇〇万円\n※経験・スキルによる"],
              ['label' => '勤務時間', 'value' => '6:00〜20:00の間でシフト制'],
              ['label' => '休日', 'value' => '週休2日制（シフト制） 年間休日〇〇日'],
            ],
          ],
          [
            'photo' => 'recruit-photo-2.png',
            'badge' => '管理スタッフ',
            'rows' => [
              ['label' => '仕事内容', 'value' => '配車計画、ルート最適化、ドライバー管理'],
              ['label' => '応募資格', 'value' => '物流業界経験者優遇 未経験でもOK'],
              ['label' => '給与', 'value' => "月給 〇〇万円〜〇〇万円\n※経験・スキルによる"],
              ['label' => '勤務時間', 'value' => '8:30〜17:30（休憩1時間）'],
              ['label' => '休日', 'value' => '土日祝（会社カレンダーによる） 年間休日〇〇日'],
            ],
          ],
          [
            'photo' => 'recruit-photo-3.png',
            'badge' => '事務スタッフ',
            'rows' => [
              ['label' => '仕事内容', 'value' => '受発注業務、顧客対応、データ入力、書類作成'],
              ['label' => '応募資格', 'value' => 'PC基本操作ができる方 未経験者歓迎'],
              ['label' => '給与', 'value' => "月給 〇〇万円〜〇〇万円\n※経験・スキルによる"],
              ['label' => '勤務時間', 'value' => '9:00〜18:00（休憩1時間）'],
              ['label' => '休日', 'value' => '土日祝（会社カレンダーによる） 年間休日〇〇日'],
            ],
          ],
        ];
        foreach ($jobs as $job) :
        ?>
        <li class="recruitment__card">
          <figure class="recruitment__card-photo"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($job['photo']); ?>" alt="" width="314" height="198" loading="lazy"></figure>
          <p class="recruitment__card-badge"><?php echo esc_html($job['badge']); ?></p>
          <dl class="recruitment__card-dl">
            <?php foreach ($job['rows'] as $row) : ?>
            <div class="recruitment__card-row">
              <dt><?php echo esc_html($row['label']); ?></dt>
              <dd><?php echo nl2br(esc_html($row['value'])); ?></dd>
            </div>
            <?php endforeach; ?>
          </dl>
        </li>
        <?php endforeach; ?>
      </ul>

      <p class="recruitment__badge">応募の流れ</p>
      <ul class="recruitment__flow">
        <?php
        $flow_steps = [
          ['step' => 'Step 01', 'title' => 'エントリー', 'icon' => 'icon-mail.svg', 'bg' => 'flow-bg-1'],
          ['step' => 'Step 02', 'title' => '書類選考',  'icon' => 'icon-paper.svg', 'bg' => 'flow-bg-2'],
          ['step' => 'Step 03', 'title' => '面接(1〜2回)', 'icon' => 'icon-people.svg', 'bg' => 'flow-bg-3'],
          ['step' => 'Step 04', 'title' => '内定', 'icon' => 'icon-handshake-1.svg', 'bg' => 'flow-bg-4'],
        ];
        foreach ($flow_steps as $f) :
        ?>
        <li class="recruitment__flow-item recruitment__flow-item--<?php echo esc_attr($f['bg']); ?>">
          <span class="recruitment__flow-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/<?php echo esc_attr($f['icon']); ?>" alt="" width="64" height="64">
          </span>
          <p class="recruitment__flow-step"><?php echo esc_html($f['step']); ?></p>
          <p class="recruitment__flow-title"><?php echo esc_html($f['title']); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* FAQ / SP node-id: 578:1843 */ ?>
  <section class="faq">
    <div class="faq__inner inner">
      <div class="faq__head">
        <p class="faq__eyebrow">FAQ</p>
        <h2 class="faq__title">よくある質問</h2>
        <p class="faq__note">その他、ご質問があればお気軽にご連絡ください。</p>
      </div>
      <ul class="faq__list">
        <?php
        $faqs = [
          ['q' => '未経験でも応募できますか？', 'a' => "はい。\n入社後は研修や先輩の同乗指導があり、安心してスタートできます。"],
          ['q' => '長距離運行はありますか？', 'a' => '基本は関東圏内の配送業務がメインです。'],
          ['q' => '休日はどのようになっていますか？', 'a' => '基本は土日祝休み、年間休日120日以上です。'],
          ['q' => '車両や安全設備はどうなっていますか？', 'a' => '全車ドラレコ完備、定期的な安全講習を実施しています。'],
          ['q' => '女性ドライバーも働けますか？', 'a' => 'はい、活躍中の女性ドライバーがいます。'],
          ['q' => '資格取得支援制度はありますか？', 'a' => '大型自動車運転免許など、資格取得を会社がサポートします。'],
          ['q' => '健康面のサポートはありますか？', 'a' => '健康経営優良法人として、定期健康診断や健康管理を徹底しています。'],
        ];
        foreach ($faqs as $i => $f) :
        ?>
        <li class="faq__item">
          <details<?php echo $i === 0 ? ' open' : ''; ?>>
            <summary class="faq__q">
              <span class="faq__mark" aria-hidden="true">Q.</span>
              <span class="faq__q-text"><?php echo esc_html($f['q']); ?></span>
              <span class="faq__arrow" aria-hidden="true"></span>
            </summary>
            <div class="faq__a">
              <span class="faq__mark" aria-hidden="true">A.</span>
              <p class="faq__a-text"><?php echo nl2br(esc_html($f['a'])); ?></p>
            </div>
          </details>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php /* エントリー（CTA+フォーム）/ SP node-id: 578:1926 */ ?>
  <section class="entry" id="entry">
    <div class="entry__inner inner">
      <div class="entry__head">
        <h2 class="entry__title"><span class="entry__title-jp">コトに、向き合える</span><span class="entry__title-en">"人"</span><span class="entry__title-jp">へ。</span></h2>
        <p class="entry__eyebrow-wrap">
          <span class="entry__eyebrow-line entry__eyebrow-line--l" aria-hidden="true"></span>
          <span class="entry__eyebrow">Entry</span>
          <span class="entry__eyebrow-line entry__eyebrow-line--r" aria-hidden="true"></span>
        </p>
        <p class="entry__lead">あなたの意志と行動が、物流を動かす。<br>まず話を聞くだけでも構いません。</p>
        <a href="#" class="entry__line-btn">
          <span class="entry__line-icon" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/line-icon.png" alt="" width="46" height="46">
          </span>
          <span>お友だち追加</span>
        </a>
      </div>

      <?php
      // Contact Form 7 を使う場合は下記コメントを実際のフォームID付きショートコードに置き換える:
      // echo do_shortcode('[contact-form-7 id="123" title="お問い合わせ"]');
      ?>
      <form class="entry__form" action="" method="post">
        <div class="entry__form-row">
          <label class="entry__form-label" for="entry-name">お名前 <span class="entry__form-required">※</span></label>
          <input class="entry__form-input" type="text" id="entry-name" name="your-name" placeholder="山田　太郎" required>
        </div>
        <div class="entry__form-row">
          <label class="entry__form-label" for="entry-kana">ふりがな</label>
          <input class="entry__form-input" type="text" id="entry-kana" name="your-kana" placeholder="やまだ　たろう">
        </div>
        <div class="entry__form-row">
          <label class="entry__form-label" for="entry-email">メールアドレス <span class="entry__form-required">※</span></label>
          <input class="entry__form-input" type="email" id="entry-email" name="your-email" placeholder="info@abc.com" required>
        </div>
        <div class="entry__form-row">
          <label class="entry__form-label" for="entry-tel">電話番号</label>
          <input class="entry__form-input" type="tel" id="entry-tel" name="your-tel" placeholder="000-0000-0000">
        </div>
        <div class="entry__form-row">
          <label class="entry__form-label" for="entry-job">希望職種</label>
          <div class="entry__form-select">
            <select class="entry__form-input" id="entry-job" name="your-job">
              <option value="">選択してください</option>
              <option value="driver">ドライバー</option>
              <option value="manager">管理スタッフ</option>
              <option value="office">事務スタッフ</option>
            </select>
          </div>
        </div>
        <div class="entry__form-row">
          <label class="entry__form-label" for="entry-message">メッセージ <span class="entry__form-required">※</span></label>
          <textarea class="entry__form-input entry__form-textarea" id="entry-message" name="your-message" rows="8" placeholder="志望動機や質問などがあればご記入ください" required></textarea>
        </div>
        <button type="submit" class="entry__form-submit">
          <span>エントリーする</span>
          <span class="entry__form-arrow" aria-hidden="true">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/cta-arrow-blue.svg" alt="" width="30" height="30">
          </span>
        </button>
      </form>
    </div>
  </section>


</main>

<?php /* フッター / SP node-id: 578:1927 */ ?>
<footer class="footer">
  <div class="footer__bg" aria-hidden="true">
    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/footer-ribbon.svg" alt="">
  </div>
  <div class="footer__inner inner">
    <div class="footer__top">
      <div class="footer__company">
        <p class="footer__company-name">大富運輸株式会社</p>
        <p class="footer__company-addr">埼玉県入間市大字寺竹1166番地1</p>
        <p class="footer__company-tel">04-2936-2882</p>
      </div>
      <a class="footer__social" href="#" aria-label="会社サイト">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/footer-social.svg" alt="" width="48" height="48">
      </a>
    </div>
    <a class="footer__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="otomi">
      <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/footer-logo.svg" alt="otomi">
    </a>
    <div class="footer__ctas">
      <a href="#" class="footer__cta footer__cta--white">
        <span>会社サイトを見る</span>
        <span class="footer__cta-arrow" aria-hidden="true">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/cta-arrow.svg" alt="" width="30" height="30">
        </span>
      </a>
      <a href="#entry" class="footer__cta footer__cta--blue">
        <span>エントリーする</span>
        <span class="footer__cta-arrow" aria-hidden="true">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/common/cta-arrow-blue.svg" alt="" width="30" height="30">
        </span>
      </a>
    </div>
    <p class="footer__copy">＠2026 大富運輸株式会社</p>
  </div>
</footer>

<?php get_footer(); ?>
