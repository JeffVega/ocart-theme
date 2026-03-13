{{-- =========================================================
     HERO
     ========================================================= --}}
<section class="relative min-h-screen flex items-center overflow-hidden grain pt-20">
  {{-- Layered background --}}
  <div class="absolute inset-0 bg-navy"></div>
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_70%_20%,_#162852_0%,_transparent_70%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_50%_50%_at_10%_80%,_#0d1b3e_0%,_transparent_60%)]"></div>
  {{-- Gold vertical accent --}}
  <div class="absolute left-0 inset-y-0 w-[3px] bg-gradient-to-b from-transparent via-gold to-transparent opacity-50"></div>

  <div class="relative z-10 w-full max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

      {{-- Left: headline + CTAs --}}
      <div class="lg:col-span-7 order-2 lg:order-1">
        <div class="animate-fade-in delay-100 inline-flex items-center gap-2 bg-urgent/15 border border-urgent/35 text-urgent/90 text-[11px] uppercase tracking-[0.2em] font-bold px-4 py-2 mb-8">
          <span class="w-2 h-2 bg-urgent rounded-full animate-pulse"></span>
          Available 24 Hours · 7 Days a Week
        </div>

        {{-- Star rating trust line --}}
        <div class="animate-fade-up delay-150 flex items-center gap-2 mb-5">
          <span class="text-gold text-lg leading-none">★★★★★</span>
          <span class="text-cream/60 text-sm">Rated by <span class="text-cream font-medium">500+</span> Orange County clients</span>
        </div>

        <h1 class="font-display font-bold leading-none mb-2">
          <span class="animate-fade-up delay-200 block text-cream text-6xl sm:text-8xl lg:text-[104px]">ARRESTED</span>
          <span class="animate-fade-up delay-300 block text-gold italic text-4xl sm:text-6xl lg:text-7xl mt-2">in Orange County?</span>
        </h1>

        <div class="animate-fade-up delay-400 mt-8 mb-10 pl-5 border-l-2 border-gold/40">
          <p class="text-cream/70 text-xl leading-relaxed max-w-lg">
            Every minute without a lawyer works against you. Get connected with an experienced OC criminal defense attorney — <span class="text-cream font-medium">right now.</span>
          </p>
        </div>

        <div class="animate-fade-up delay-500 flex flex-col sm:flex-row gap-4">
          <a href="{{ $phoneTel }}"
             class="group flex items-center justify-center gap-3 bg-urgent hover:bg-urgent-dark text-white px-8 py-5 font-bold text-lg tracking-widest uppercase transition-all duration-200 hover:shadow-2xl hover:shadow-urgent/30 animate-glow-pulse">
            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Call {{ $phoneDisplay }}
          </a>
          <a href="{{ home_url('/contact') }}"
             class="flex items-center justify-center gap-3 border border-gold text-gold hover:bg-gold hover:text-navy px-8 py-5 font-bold text-lg tracking-widest uppercase transition-all duration-200">
            Free Consultation
          </a>
        </div>

        <div class="animate-fade-up delay-600 mt-6 flex flex-wrap gap-6 text-cream/40 text-xs uppercase tracking-widest">
          <span>✓ No Upfront Fees</span>
          <span>✓ Confidential</span>
          <span>✓ Se Habla Español</span>
          <span>✓ All OC Courts</span>
        </div>
      </div>

      {{-- Right: lead form card --}}
      <div class="animate-fade-up delay-400 lg:col-span-5 order-1 lg:order-2">
        <div class="relative bg-navy-mid border border-gold/30 p-8">
          <div class="absolute -top-px left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-gold to-transparent"></div>
          <div class="absolute -top-4 left-6">
            <span class="bg-gold text-navy text-[11px] font-bold uppercase tracking-[0.15em] px-3 py-1">Free Case Review</span>
          </div>

          <h3 class="font-display text-2xl text-cream font-bold mb-1 mt-3">Get Help Immediately</h3>
          <p class="text-cream/50 text-sm mb-6">Tell us what happened. We'll respond within minutes.</p>

          <form id="hero-lead-form" class="space-y-3" method="POST"
                action="{{ admin_url('admin-ajax.php') }}" novalidate>
            @php(wp_nonce_field('oca_contact', '_wpnonce'))
            <input type="hidden" name="action" value="oca_contact">

            <input type="text" name="name" placeholder="Your Full Name" required
                   autocomplete="name"
                   class="w-full bg-navy border border-gold/20 text-cream placeholder-cream/35 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
            <input type="tel" name="phone" placeholder="(000) 000-0000" required
                   autocomplete="tel"
                   pattern="^\+?1?[\s.\-]?\(?\d{3}\)?[\s.\-]?\d{3}[\s.\-]?\d{4}$"
                   title="Please enter a valid 10-digit US phone number"
                   class="w-full bg-navy border border-gold/20 text-cream placeholder-cream/35 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
            <select name="charge" required
                    class="w-full bg-navy border border-gold/20 text-cream/80 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
              <option value="" disabled selected>Type of Charge</option>
              <option>DUI / DWI</option>
              <option>Drug Possession / Sales</option>
              <option>Assault &amp; Battery</option>
              <option>Domestic Violence</option>
              <option>Theft / Robbery</option>
              <option>Juvenile Offense</option>
              <option>Other</option>
            </select>
            <label class="flex items-start gap-2.5 cursor-pointer">
              <input type="checkbox" name="agree_terms" required
                     class="mt-0.5 shrink-0 accent-gold w-3.5 h-3.5">
              <span class="text-cream/50 text-[11px] leading-relaxed">
                By submitting, I agree to be contacted and accept the
                <a href="{{ home_url('/terms-of-service') }}" class="text-gold underline hover:text-gold-light transition-colors" target="_blank">Terms of Service</a>
              </span>
            </label>

            {{-- Inline error message --}}
            <p id="hero-form-error" class="hidden text-urgent text-xs text-center pt-1"></p>

            <button type="submit" id="hero-form-btn"
                    class="w-full bg-urgent hover:bg-urgent-dark text-white font-bold py-4 text-sm uppercase tracking-[0.15em] transition-colors disabled:opacity-60 disabled:cursor-not-allowed">
              Get Free Consultation →
            </button>
          </form>

          {{-- Success state (hidden until form submits) --}}
          <div id="hero-form-success" class="hidden text-center py-6">
            <div class="w-14 h-14 mx-auto mb-4 border-2 border-gold flex items-center justify-center">
              <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <h4 class="font-display text-xl text-cream font-bold mb-2">We've Got Your Request</h4>
            <p class="text-cream/60 text-sm">Someone will be in touch with you shortly. Keep your phone nearby.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  {{-- Bottom diagonal --}}
  <div class="absolute bottom-0 left-0 right-0 h-20 bg-navy-mid"
       style="clip-path: polygon(0 100%, 100% 0, 100% 100%)"></div>
</section>
