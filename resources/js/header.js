// ─── Mobile navigation toggle ───────────────────────────────────────────────
const navToggle = document.getElementById('nav-toggle');
const mobileNav = document.getElementById('mobile-nav');
const iconOpen  = document.getElementById('icon-open');
const iconClose = document.getElementById('icon-close');

if (navToggle && mobileNav) {
  navToggle.addEventListener('click', () => {
    const expanded = navToggle.getAttribute('aria-expanded') === 'true';
    navToggle.setAttribute('aria-expanded', String(!expanded));
    mobileNav.classList.toggle('hidden');
    iconOpen?.classList.toggle('hidden');
    iconClose?.classList.toggle('hidden');
  });
}

// ─── Sticky header style on scroll ──────────────────────────────────────────
const siteHeader = document.getElementById('site-header');
if (siteHeader) {
  window.addEventListener(
    'scroll',
    () => siteHeader.classList.toggle('is-scrolled', window.scrollY > 60),
    { passive: true }
  );
}
