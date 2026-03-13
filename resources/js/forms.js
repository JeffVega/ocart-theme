// ─── Phone number auto-formatter (applies to any tel input on the page) ───────
function attachPhoneMask(input) {
  if (!input) return;

  input.addEventListener('input', () => {
    const digits = input.value.replace(/\D/g, '').slice(0, 10);
    let formatted = digits;

    if (digits.length > 6) {
      formatted = `(${digits.slice(0, 3)}) ${digits.slice(3, 6)}-${digits.slice(6)}`;
    } else if (digits.length > 3) {
      formatted = `(${digits.slice(0, 3)}) ${digits.slice(3)}`;
    } else if (digits.length > 0) {
      formatted = `(${digits}`;
    }

    input.value = formatted;
  });

  // Strip formatting before FormData reads it
  input.closest('form')?.addEventListener('submit', () => {
    input.value = input.value.replace(/\D/g, '');
  }, { capture: true });
}

attachPhoneMask(document.querySelector('#hero-lead-form    [name="phone"]'));
attachPhoneMask(document.querySelector('#contact-lead-form [name="phone"]'));

// ─── Generic AJAX form handler ───────────────────────────────────────────────
function attachFormHandler({ formId, successId, errorId, btnId }) {
  const form    = document.getElementById(formId);
  const success = document.getElementById(successId);
  const errorEl = document.getElementById(errorId);
  const btn     = document.getElementById(btnId);
  if (!form) return;

  const originalLabel = btn?.textContent ?? 'Submit';

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    btn.disabled    = true;
    btn.textContent = 'Sending…';
    errorEl.classList.add('hidden');
    errorEl.textContent = '';

    try {
      const res  = await fetch(form.getAttribute('action'), {
        method: 'POST',
        body:   new FormData(form),
      });
      const data = await res.json();

      if (data.success) {
        form.classList.add('hidden');
        success.classList.remove('hidden');
      } else {
        const msg = data.data?.message || 'Something went wrong. Please try again.';
        errorEl.textContent = msg;
        errorEl.classList.remove('hidden');
        btn.disabled    = false;
        btn.textContent = originalLabel;
      }
    } catch {
      errorEl.textContent = 'Network error. Please check your connection and try again.';
      errorEl.classList.remove('hidden');
      btn.disabled    = false;
      btn.textContent = originalLabel;
    }
  });
}

// ─── Wire up forms ───────────────────────────────────────────────────────────
attachFormHandler({
  formId:    'hero-lead-form',
  successId: 'hero-form-success',
  errorId:   'hero-form-error',
  btnId:     'hero-form-btn',
});

attachFormHandler({
  formId:    'contact-lead-form',
  successId: 'contact-form-success',
  errorId:   'contact-form-error',
  btnId:     'contact-form-btn',
});
