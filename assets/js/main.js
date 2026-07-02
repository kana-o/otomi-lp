(function () {
  'use strict';

  /* ============================================================
   * 社員の1日 タブ切替
   * ============================================================ */
  const initDailyTabs = () => {
    const tabs = document.querySelectorAll('.daily__tab');
    const panels = document.querySelectorAll('.daily__panel');
    if (!tabs.length || !panels.length) return;

    // SPでは運行ボタンがタイムラインの下にあるため、切替時に一日の流れの先頭へ戻す
    const spMq = window.matchMedia('(max-width: 768px)');
    const scrollTarget = document.querySelector('.daily__head');

    tabs.forEach((tab) => {
      tab.addEventListener('click', () => {
        const target = tab.dataset.tab;

        tabs.forEach((t) => {
          const active = t.dataset.tab === target;
          t.classList.toggle('is-active', active);
          t.setAttribute('aria-selected', active ? 'true' : 'false');
        });

        panels.forEach((panel) => {
          const active = panel.id === `daily-panel-${target}`;
          panel.classList.toggle('is-active', active);
          if (active) {
            panel.removeAttribute('hidden');
          } else {
            panel.setAttribute('hidden', '');
          }
        });

        if (spMq.matches && scrollTarget) {
          scrollTarget.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  };

  /* ============================================================
   * 仕事のやりがい カードのスタッキング
   * ============================================================ */
  const initSatisfactionStack = () => {
    const stage = document.querySelector('.js-satisfaction-stage');
    if (!stage) return;
    const sticky = stage.querySelector('.satisfaction__sticky');
    const cards = Array.from(stage.querySelectorAll('.satisfaction__card'));
    const N = cards.length;
    if (!N || !sticky) return;

    const mq = window.matchMedia('(max-width: 768px)');
    const STEP = 0.6; // 積み上げ: カード1枚あたりのスクロール量（vh倍）※大きいほどゆっくり
    const STACK_END = 0.9; // 固定区間のうち、この割合で積み上げ完了（残りは保持→自然スクロールへ）
    const TOP = 50; // 固定位置（画面上端から下げる量px。CSSの top と一致）
    const OFFSET = 150; // カードのずらし幅(px)
    const easeOut = (t) => 1 - Math.pow(1 - t, 3);
    let ticking = false;

    const apply = () => {
      ticking = false;
      if (mq.matches) return; // SPは無効
      const vh = window.innerHeight;
      const pinRange = stage.offsetHeight - sticky.offsetHeight; // stickyが固定され続けるスクロール距離
      const stageTop = stage.getBoundingClientRect().top;
      let p = pinRange > 0 ? (TOP - stageTop) / pinRange : 0;
      p = Math.max(0, Math.min(1, p));

      // 1枚目は通常位置のまま（ヘッダーと一緒にスクロールインし、stickyで固定）。
      // 2枚目以降だけ「画面下(vh)」→「最終位置(0)」へ積み上げる。
      const M = N - 1; // アニメするカード数（2枚目以降）
      cards.forEach((card, i) => {
        if (i === 0) {
          card.style.transform = 'translate3d(0,0,0)';
          return;
        }
        const k = i - 1;
        const segStart = (k / M) * STACK_END;
        const segEnd = ((k + 1) / M) * STACK_END;
        let y;
        if (p <= segStart) {
          y = vh; // 画面下で待機
        } else if (p < segEnd) {
          y = vh * (1 - easeOut((p - segStart) / (segEnd - segStart))); // 下から最終位置へ
        } else {
          y = 0; // 最終位置
        }
        card.style.transform = 'translate3d(0,' + Math.round(y) + 'px,0)';
      });
    };

    const onScroll = () => {
      if (!ticking) {
        ticking = true;
        requestAnimationFrame(apply);
      }
    };

    const setup = () => {
      if (mq.matches) {
        stage.classList.remove('is-stack');
        stage.style.height = '';
        cards.forEach((c) => {
          c.style.transform = '';
          c.style.marginTop = '';
        });
      } else {
        stage.classList.add('is-stack');
        const vh = window.innerHeight;
        // カード高さは中間幅で不揃いになるため、各カードのずらし量は「前のカードの高さ」基準にする
        cards.forEach((c) => (c.style.marginTop = ''));
        const heights = cards.map((c) => c.offsetHeight);
        cards.forEach((c, i) => {
          c.style.marginTop = i === 0 ? '' : -(heights[i - 1] - OFFSET) + 'px';
        });
        // ステージ高さ = sticky内容高さ + 固定区間のスクロール量
        const pinScroll = (N * STEP * vh) / STACK_END;
        stage.style.height = sticky.offsetHeight + pinScroll + 'px';
        apply();
      }
    };

    setup();
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', setup);
    if (mq.addEventListener) mq.addEventListener('change', setup);
  };

  /* ============================================================
   * スクロール出現（スライドイン / フェードアップ）
   * .js-slidein・.js-fadeup が画面内に入ったら is-inview を付与（出現はCSS側で制御）
   * ============================================================ */
  const initSlidein = () => {
    const targets = document.querySelectorAll('.js-slidein, .js-fadeup');
    if (!targets.length) return;
    if (!('IntersectionObserver' in window)) {
      targets.forEach((t) => t.classList.add('is-inview'));
      return;
    }
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add('is-inview');
            io.unobserve(e.target); // 一度だけ
          }
        });
      },
      { rootMargin: '0px 0px -20% 0px', threshold: 0 }
    );
    targets.forEach((t) => io.observe(t));
  };

  /* ============================================================
   * FAQ アコーディオン
   * ============================================================ */
  const initFaq = () => {
    const list = document.querySelectorAll('.faq__item details');
    list.forEach((details) => {
      const summary = details.querySelector('summary');
      const content = details.querySelector('.faq__a');
      if (!summary || !content) return;

      if (details.open) details.classList.add('is-open');

      summary.addEventListener('click', (e) => {
        e.preventDefault();
        if (details.dataset.anim) return;
        details.dataset.anim = '1';

        const onEnd = (cb) => {
          const te = (ev) => {
            if (ev.propertyName !== 'height') return;
            content.removeEventListener('transitionend', te);
            content.style.height = '';
            delete details.dataset.anim;
            cb && cb();
          };
          content.addEventListener('transitionend', te);
        };

        if (details.open) {
          details.classList.remove('is-open');
          content.style.height = content.scrollHeight + 'px';
          content.getBoundingClientRect();
          content.style.height = '0px';
          onEnd(() => {
            details.open = false;
          });
        } else {

          details.open = true; // 中身を表示可能に
          details.classList.add('is-open');
          const target = content.scrollHeight;
          content.style.height = '0px';
          content.getBoundingClientRect();
          content.style.height = target + 'px';
          onEnd();
        }
      });
    });
  };

  /* ============================================================
   * SP用 下部固定CTA（FVを過ぎたらスライドイン）
   * ============================================================ */
  const initSpCta = () => {
    const bar = document.querySelector('.js-sp-cta');
    if (!bar) return;
    const fv = document.querySelector('.fv');
    const footer = document.querySelector('.footer');
    let ticking = false;
    const update = () => {
      ticking = false;
      const threshold = fv ? fv.offsetHeight : window.innerHeight;
      const passedFv = window.scrollY > threshold;
      // フッターに重なる直前で非表示
      const footerReached = footer
        ? footer.getBoundingClientRect().top <= window.innerHeight
        : false;
      bar.classList.toggle('is-visible', passedFv && !footerReached);
    };
    window.addEventListener(
      'scroll',
      () => {
        if (!ticking) {
          ticking = true;
          requestAnimationFrame(update);
        }
      },
      { passive: true }
    );
    update();
  };

  /* ============================================================
   * 働く人の声 スライダー
   * ============================================================ */
  const initVoiceSwiper = () => {
    const el = document.querySelector('.js-voice-swiper');
    if (!el || typeof Swiper === 'undefined') return;

    new Swiper(el, {
      loop: true,
      centeredSlides: true,
      slidesPerView: 1.35,
      spaceBetween: 10,
      speed: 1200,
      autoplay: {
        delay: 1700,
        disableOnInteraction: false,
      },
      breakpoints: {
        769: {
          speed: 2000,
          spaceBetween: 32
        },
      },
      navigation: {
        prevEl: '.js-voice-prev',
        nextEl: '.js-voice-next',
      },
    });
  };

  /* ============================================================
   * 初期化
   * ============================================================ */
  const init = () => {
    initDailyTabs();
    initSatisfactionStack();
    initSlidein();
    initSpCta();
    initFaq();
    initVoiceSwiper();
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
