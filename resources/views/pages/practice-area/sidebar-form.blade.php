{{-- Practice Area: Sidebar Lead Form --}}

{{-- Lead capture card --}}
<div class="bg-navy-mid border border-gold/20 relative overflow-hidden">

  {{-- Gold top accent --}}
  <div class="absolute top-0 inset-x-0 h-[2px] bg-gradient-to-r from-transparent via-gold to-transparent"></div>

  <div class="px-7 pt-8 pb-7">

    {{-- Header --}}
    <div class="mb-6">
      <div class="text-gold text-[10px] uppercase tracking-[0.25em] font-bold mb-2">Free Consultation</div>
      <h3 class="font-display font-bold text-cream text-2xl leading-tight">
        Get Help With<br/>
        <span class="text-gold italic">{{ $area['headline'] }} {{ $area['italic'] }}</span>
      </h3>
    </div>

    {{-- Form --}}
    <form id="practice-area-form" class="space-y-4" novalidate>
      @php(wp_nonce_field('oca_contact', '_wpnonce'))
      <input type="hidden" name="action" value="oca_contact">
      <input type="hidden" name="charge_type" value="{{ $area['category'] }}">

      <div>
        <label class="block text-cream/40 text-[10px] uppercase tracking-[0.2em] mb-1.5">Full Name</label>
        <input type="text" name="name" required
               placeholder="Your name"
               class="w-full bg-navy border border-gold/20 focus:border-gold/50 text-cream placeholder-cream/20 text-sm px-4 py-3 outline-none transition-colors">
      </div>

      <div>
        <label class="block text-cream/40 text-[10px] uppercase tracking-[0.2em] mb-1.5">Phone Number</label>
        <input type="tel" name="phone" required
               placeholder="(714) 000-0000"
               pattern="^\+?1?[\s.\-]?\(?\d{3}\)?[\s.\-]?\d{3}[\s.\-]?\d{4}$"
               class="w-full bg-navy border border-gold/20 focus:border-gold/50 text-cream placeholder-cream/20 text-sm px-4 py-3 outline-none transition-colors">
      </div>

      <div>
        <label class="block text-cream/40 text-[10px] uppercase tracking-[0.2em] mb-1.5">Brief Description <span class="normal-case tracking-normal opacity-60">(optional)</span></label>
        <textarea name="message" rows="3" placeholder="What happened? (optional)"
                  class="w-full bg-navy border border-gold/20 focus:border-gold/50 text-cream placeholder-cream/20 text-sm px-4 py-3 outline-none transition-colors resize-none"></textarea>
      </div>

      <div class="flex items-start gap-3">
        <input type="checkbox" name="terms" id="pa-terms" required
               class="mt-0.5 w-4 h-4 shrink-0 accent-gold cursor-pointer">
        <label for="pa-terms" class="text-cream/35 text-xs leading-relaxed cursor-pointer">
          I agree to be contacted by an attorney. This form is confidential and protected by attorney-client privilege.
        </label>
      </div>

      {{-- Error message --}}
      <div id="pa-form-error" class="hidden text-urgent text-xs px-3 py-2 bg-urgent/10 border border-urgent/20"></div>

      <button type="submit"
              class="w-full bg-urgent hover:bg-urgent-dark text-white font-bold text-sm uppercase tracking-widest py-4 transition-colors duration-200 flex items-center justify-center gap-3"
              id="pa-submit-btn">
        <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
        Get Free Case Review
      </button>
    </form>

    {{-- Success state --}}
    <div id="pa-form-success" class="hidden text-center py-4">
      <div class="text-gold text-3xl mb-3">✓</div>
      <p class="font-display font-bold text-cream text-lg mb-1">We'll be in touch shortly.</p>
      <p class="text-cream/45 text-sm">An attorney will review your case and reach out within the hour.</p>
    </div>

  </div>
</div>

{{-- Trust signals --}}
<div class="bg-navy-mid border border-gold/10 px-6 py-5">
  <div class="grid grid-cols-2 gap-3">
    @foreach ([
      ['icon' => '🔒', 'text' => 'Confidential'],
      ['icon' => '⚡', 'text' => '24/7 Available'],
      ['icon' => '✓',  'text' => 'No Upfront Fees'],
      ['icon' => '🗣',  'text' => 'Se Habla Español'],
    ] as $trust)
    <div class="flex items-center gap-2 text-cream/40 text-xs">
      <span class="text-base leading-none">{{ $trust['icon'] }}</span>
      <span>{{ $trust['text'] }}</span>
    </div>
    @endforeach
  </div>
</div>

{{-- Emergency call block --}}
<div class="bg-urgent/10 border border-urgent/30 px-6 py-5 text-center">
  <p class="text-cream/50 text-[10px] uppercase tracking-widest mb-2">Need immediate help?</p>
  <a href="{{ $phoneTel }}"
     class="font-display font-bold text-urgent hover:text-white text-xl transition-colors duration-200 block">
    {{ $phoneDisplay }}
  </a>
  <p class="text-cream/30 text-[10px] mt-1">Real attorneys answer — not voicemail</p>
</div>

<script>
(function () {
  const form    = document.getElementById('practice-area-form');
  const success = document.getElementById('pa-form-success');
  const error   = document.getElementById('pa-form-error');
  const btn     = document.getElementById('pa-submit-btn');
  if (!form) return;

  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    error.classList.add('hidden');
    btn.disabled = true;
    btn.textContent = 'Sending…';

    const data = new FormData(form);
    try {
      const res  = await fetch('<?php echo admin_url("admin-ajax.php"); ?>', { method: 'POST', body: data });
      const json = await res.json();
      if (json.success) {
        form.classList.add('hidden');
        success.classList.remove('hidden');
      } else {
        error.textContent = json.data || 'Something went wrong. Please call us directly.';
        error.classList.remove('hidden');
        btn.disabled = false;
        btn.innerHTML = 'Get Free Case Review';
      }
    } catch {
      error.textContent = 'Network error. Please call us directly.';
      error.classList.remove('hidden');
      btn.disabled = false;
      btn.innerHTML = 'Get Free Case Review';
    }
  });
})();
</script>
