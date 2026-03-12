// ─── Scroll-reveal (IntersectionObserver) ────────────────────────────────────
// Elements use animate-fade-up / animate-fade-in with animation-fill-mode: both
// so they start transparent via the keyframe, not a separate .anim-hidden class.
// We pause the animation until the element enters the viewport.
const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = 'running';
        revealObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
);

// Pause all scroll-animated elements that are NOT already in the viewport
document.querySelectorAll('.scroll-reveal').forEach((el) => {
  el.style.animationPlayState = 'paused';
  revealObserver.observe(el);
});

// ─── Animated counters ────────────────────────────────────────────────────────
function animateCounter(el) {
  const target = parseInt(el.dataset.countTarget, 10);
  if (isNaN(target)) return;
  const duration = 1500; // ms
  const start = performance.now();

  function step(now) {
    const elapsed = now - start;
    const progress = Math.min(elapsed / duration, 1);
    // Ease-out cubic
    const eased = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.round(eased * target) + (el.dataset.countSuffix || '');
    if (progress < 1) requestAnimationFrame(step);
  }
  requestAnimationFrame(step);
}

const counterObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.5 }
);

document.querySelectorAll('[data-count-target]').forEach((el) => {
  counterObserver.observe(el);
});
