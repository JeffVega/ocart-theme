/**
 * Single blog post — reading progress, TOC, and key takeaways.
 *
 */
(function () {
  'use strict';

  // ── Reading Progress Bar ──────────────────────────────────────────────────
  const bar     = document.getElementById('reading-progress-bar');
  const fill    = document.getElementById('toc-progress-fill');
  const pctEl   = document.getElementById('toc-progress-pct');
  const article = document.getElementById('article-root');

  function updateProgress() {
    if (!article || !bar) return;
    const rect  = article.getBoundingClientRect();
    const total = article.offsetHeight - window.innerHeight;
    const done  = Math.max(0, -rect.top);
    const ratio = Math.min(1, total > 0 ? done / total : 0);
    bar.style.transform = `scaleX(${ratio})`;
    if (fill)  fill.style.transform = `scaleX(${ratio})`;
    if (pctEl) pctEl.textContent = Math.round(ratio * 100) + '%';
  }

  window.addEventListener('scroll', updateProgress, { passive: true });
  updateProgress();

  // ── Table of Contents + Key Takeaways ────────────────────────────────────
  document.addEventListener('DOMContentLoaded', function () {
    const content      = document.getElementById('post-content');
    const tocList      = document.getElementById('toc-list');
    const tocContainer = document.getElementById('toc-container');
    if (!content || !tocList || !tocContainer) return;

    const headings = content.querySelectorAll('h2, h3');
    if (headings.length < 2) return;

    tocContainer.classList.remove('hidden');

    headings.forEach(function (h, i) {
      if (!h.id) {
        h.id = 'section-' + i + '-' + h.textContent.trim().toLowerCase()
          .replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
      }

      const li   = document.createElement('li');
      const link = document.createElement('a');
      link.href           = '#' + h.id;
      link.textContent    = h.textContent;
      link.className      = 'toc-link ' + (h.tagName === 'H3' ? 'toc-h3' : 'toc-h2');
      link.dataset.target = h.id;

      link.addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById(h.id)?.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });

      li.appendChild(link);
      tocList.appendChild(li);
    });

    // Active section highlighting via IntersectionObserver
    const tocLinks = tocList.querySelectorAll('.toc-link');
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          tocLinks.forEach(function (l) { l.classList.remove('active'); });
          const active = tocList.querySelector('[data-target="' + entry.target.id + '"]');
          if (active) active.classList.add('active');
        }
      });
    }, { rootMargin: '-20% 0px -70% 0px' });

    headings.forEach(function (h) { observer.observe(h); });

    // ── Key Takeaways — H2s as "What You'll Learn" ───────────────────────
    const h2s        = Array.from(headings).filter(function (h) { return h.tagName === 'H2'; });
    const takeawaysEl = document.getElementById('key-takeaways');
    const listEl      = document.getElementById('takeaways-list');

    if (h2s.length >= 2 && takeawaysEl && listEl) {
      h2s.slice(0, 6).forEach(function (h) {
        const li = document.createElement('li');
        li.className = 'flex items-start gap-2';
        li.innerHTML =
          '<span class="w-1 h-1 rounded-full bg-gold/60 shrink-0 mt-[0.55em]"></span>' +
          '<span>' + h.textContent + '</span>';
        listEl.appendChild(li);
      });
      takeawaysEl.classList.remove('hidden');
    }
  });
}());
