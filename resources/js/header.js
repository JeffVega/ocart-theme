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

// ─── Desktop dropdown – touch/click toggle ───────────────────────────────────
function openDropdown(wrapper) {
  const panel   = wrapper.querySelector('[data-dropdown-panel]');
  const trigger = wrapper.querySelector('[aria-haspopup]');
  const chevron = wrapper.querySelector('[data-dropdown-chevron]');
  if (!panel) return;
  panel.classList.remove('invisible', 'opacity-0', 'translate-y-1');
  panel.classList.add('visible', 'opacity-100', 'translate-y-0');
  trigger?.setAttribute('aria-expanded', 'true');
  chevron?.classList.add('rotate-180');
  wrapper.dataset.open = 'true';
}

function closeDropdown(wrapper) {
  const panel   = wrapper.querySelector('[data-dropdown-panel]');
  const trigger = wrapper.querySelector('[aria-haspopup]');
  const chevron = wrapper.querySelector('[data-dropdown-chevron]');
  if (!panel) return;
  panel.classList.add('invisible', 'opacity-0', 'translate-y-1');
  panel.classList.remove('visible', 'opacity-100', 'translate-y-0');
  trigger?.setAttribute('aria-expanded', 'false');
  chevron?.classList.remove('rotate-180');
  wrapper.dataset.open = 'false';
}

const dropdowns = document.querySelectorAll('[data-dropdown]');

dropdowns.forEach(wrapper => {
  const trigger = wrapper.querySelector('[aria-haspopup]');
  if (!trigger) return;

  // Touch / non-hover devices: first tap opens, second tap navigates
  trigger.addEventListener('click', e => {
    if (!window.matchMedia('(hover: hover)').matches) {
      if (wrapper.dataset.open === 'true') return; // let link navigate
      e.preventDefault();
      // close any other open dropdowns
      dropdowns.forEach(d => { if (d !== wrapper) closeDropdown(d); });
      openDropdown(wrapper);
    }
  });
});

// Close on outside click / tap
document.addEventListener('click', e => {
  dropdowns.forEach(wrapper => {
    if (!wrapper.contains(e.target)) closeDropdown(wrapper);
  });
});

// Close on Escape
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') dropdowns.forEach(closeDropdown);
});

// ─── Sticky header style on scroll ──────────────────────────────────────────
const siteHeader = document.getElementById('site-header');
if (siteHeader) {
  window.addEventListener(
    'scroll',
    () => siteHeader.classList.toggle('is-scrolled', window.scrollY > 60),
    { passive: true }
  );
}
