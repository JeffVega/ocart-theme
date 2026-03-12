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
          <a href="tel:+17145550000"
             class="group flex items-center justify-center gap-3 bg-urgent hover:bg-urgent-dark text-white px-8 py-5 font-bold text-lg tracking-widest uppercase transition-all duration-200 hover:shadow-2xl hover:shadow-urgent/30 animate-glow-pulse">
            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Call (714) 555-0000
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

          <form class="space-y-3" method="POST" action="{{ home_url('/contact') }}">
            @php(wp_nonce_field('oca_contact', '_wpnonce'))
            <input type="text" name="name" placeholder="Your Full Name"
                   class="w-full bg-navy border border-gold/20 text-cream placeholder-cream/35 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
            <input type="tel" name="phone" placeholder="Phone Number"
                   class="w-full bg-navy border border-gold/20 text-cream placeholder-cream/35 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
            <select name="charge"
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
            <button type="submit"
                    class="w-full bg-urgent hover:bg-urgent-dark text-white font-bold py-4 text-sm uppercase tracking-[0.15em] transition-colors">
              Get Free Consultation →
            </button>
          </form>

          <p class="mt-3 text-center text-cream/50 text-[11px]">We'll call you back immediately</p>
          <p class="mt-1 text-center text-cream/30 text-[11px]">100% Confidential · No Obligation · Attorney-Client Privilege</p>
        </div>
      </div>

    </div>
  </div>

  {{-- Bottom diagonal --}}
  <div class="absolute bottom-0 left-0 right-0 h-20 bg-navy-mid"
       style="clip-path: polygon(0 100%, 100% 0, 100% 100%)"></div>
</section>
