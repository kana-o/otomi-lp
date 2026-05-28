(function () {
  'use strict';

  /* ============================================================
   * 社員の1日 タブ切替
   * ============================================================ */
  const initDailyTabs = () => {
    const tabs = document.querySelectorAll('.daily__tab');
    const panels = document.querySelectorAll('.daily__panel');
    if (!tabs.length || !panels.length) return;

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
      });
    });
  };

  /* ============================================================
   * 仕事のやりがい カードのスクロール出現
   * ============================================================ */
  const initSatisfactionScroll = () => {
    const cards = document.querySelectorAll('.js-satisfaction-card');
    if (!cards.length || !('IntersectionObserver' in window)) {
      // 非対応環境ではフォールバックですべて可視化
      cards.forEach((card) => card.classList.add('is-visible'));
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      {
        rootMargin: '0px 0px -10% 0px',
        threshold: 0.15,
      }
    );

    cards.forEach((card) => observer.observe(card));
  };

  /* ============================================================
   * 働く人の声 カルーセル
   * ============================================================ */
  const initVoiceSlider = () => {
    const slider = document.querySelector('.js-voice-slider');
    if (!slider) return;
    const list = slider.querySelector('.voice__list');
    const items = Array.from(slider.querySelectorAll('.voice__item'));
    const prev = slider.querySelector('.js-voice-prev');
    const next = slider.querySelector('.js-voice-next');
    if (!list || !items.length) return;

    let index = Math.floor(items.length / 2);

    const update = () => {
      items.forEach((it, i) => it.classList.toggle('is-active', i === index));
      const active = items[index];
      const offset =
        active.offsetLeft + active.offsetWidth / 2 - slider.clientWidth / 2;
      list.style.transform = `translateX(${-offset}px)`;
    };

    prev?.addEventListener('click', () => {
      index = (index - 1 + items.length) % items.length;
      update();
    });
    next?.addEventListener('click', () => {
      index = (index + 1) % items.length;
      update();
    });
    window.addEventListener('resize', update);

    update();
  };

  /* ============================================================
   * 初期化
   * ============================================================ */
  const init = () => {
    initDailyTabs();
    initSatisfactionScroll();
    initVoiceSlider();
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
