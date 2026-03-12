// ─── FAQ accordion ──────────────────────────────────────────────────────────
document.querySelectorAll('.faq-trigger').forEach((trigger) => {
  trigger.addEventListener('click', () => {
    const item = trigger.closest('.faq-item');
    if (!item) return;

    const isOpen = item.classList.contains('open');

    // Close all open items
    document.querySelectorAll('.faq-item.open').forEach((openItem) => {
      openItem.classList.remove('open');
    });

    // Open clicked item if it was closed
    if (!isOpen) {
      item.classList.add('open');
    }
  });
});
