{{-- Contact section --}}
<section class="bg-navy-mid py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">

      {{-- Form --}}
      <div class="lg:col-span-7">
        <div class="relative bg-navy border border-gold/25 p-8 lg:p-10">
          <div class="absolute -top-px left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-gold to-transparent"></div>

          <h2 class="font-display text-3xl text-cream font-bold mb-2">Free Case Evaluation</h2>
          <p class="text-cream/50 text-sm mb-8">We review your situation and connect you with the right OC defense attorney.</p>

          @if(session('contact_success'))
          <div class="bg-green-900/30 border border-green-500/40 text-green-400 text-sm px-5 py-4 mb-6">
            ✓ Your message was received. We'll be in touch within minutes.
          </div>
          @endif

          <form method="POST" action="{{ home_url('/contact') }}" class="space-y-4">
            @php(wp_nonce_field('oca_contact', '_wpnonce'))

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-cream/50 text-[11px] uppercase tracking-[0.15em] mb-2">Full Name *</label>
                <input type="text" name="name" required
                       class="w-full bg-navy-mid border border-gold/20 text-cream placeholder-cream/30 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
              </div>
              <div>
                <label class="block text-cream/50 text-[11px] uppercase tracking-[0.15em] mb-2">Phone Number *</label>
                <input type="tel" name="phone" required
                       class="w-full bg-navy-mid border border-gold/20 text-cream placeholder-cream/30 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
              </div>
            </div>

            <div>
              <label class="block text-cream/50 text-[11px] uppercase tracking-[0.15em] mb-2">Email Address</label>
              <input type="email" name="email"
                     class="w-full bg-navy-mid border border-gold/20 text-cream placeholder-cream/30 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-cream/50 text-[11px] uppercase tracking-[0.15em] mb-2">Type of Charge *</label>
                <select name="charge" required
                        class="w-full bg-navy-mid border border-gold/20 text-cream/80 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
                  <option value="" disabled selected>Select charge type</option>
                  <option>DUI / DWI</option>
                  <option>Drug Possession / Sales</option>
                  <option>Assault &amp; Battery</option>
                  <option>Domestic Violence</option>
                  <option>Theft / Robbery</option>
                  <option>Juvenile Offense</option>
                  <option>Expungement</option>
                  <option>Other</option>
                </select>
              </div>
              <div>
                <label class="block text-cream/50 text-[11px] uppercase tracking-[0.15em] mb-2">City / Court</label>
                <input type="text" name="city" placeholder="e.g. Anaheim, Santa Ana"
                       class="w-full bg-navy-mid border border-gold/20 text-cream placeholder-cream/30 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
              </div>
            </div>

            <div>
              <label class="block text-cream/50 text-[11px] uppercase tracking-[0.15em] mb-2">Briefly describe what happened</label>
              <textarea name="message" rows="5"
                        class="w-full bg-navy-mid border border-gold/20 text-cream placeholder-cream/30 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors resize-none"
                        placeholder="Share as much or as little as you're comfortable with..."></textarea>
            </div>

            <div class="flex items-start gap-3">
              <input type="checkbox" name="consent" id="consent" required
                     class="mt-1 shrink-0 w-4 h-4 border border-gold/30 bg-navy-mid checked:bg-gold accent-gold">
              <label for="consent" class="text-cream/45 text-xs leading-relaxed">
                I understand that submitting this form does not create an attorney-client relationship and that the information I provide is confidential.
              </label>
            </div>

            <button type="submit"
                    class="w-full bg-gold hover:bg-gold-light text-navy font-bold py-4 text-sm uppercase tracking-[0.15em] transition-colors mt-2">
              Submit Free Case Evaluation →
            </button>
          </form>
        </div>
      </div>

      {{-- Contact info sidebar --}}
      <div class="lg:col-span-5 space-y-5">

        {{-- Call box --}}
        <div class="bg-urgent p-8 relative overflow-hidden">
          <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(154,21,21,0.5)_0%,_transparent_60%)]"></div>
          <div class="relative z-10">
            <div class="text-white/60 text-[11px] uppercase tracking-[0.2em] font-bold mb-2">Best Way to Reach Us</div>
            <a href="tel:+17145550000" class="block font-display text-4xl text-white font-bold hover:text-cream/90 transition-colors mb-4">
              (714) 555-0000
            </a>
            <div class="flex items-center gap-2 text-white/70 text-sm">
              <span class="w-2 h-2 bg-white/60 rounded-full animate-pulse"></span>
              Available right now · 24/7
            </div>
          </div>
        </div>

        {{-- Info items --}}
        @foreach ([
          [
            'label' => 'Hours',
            'icon'  => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
            'value' => '24 Hours / 7 Days a Week',
            'sub'   => 'Including holidays',
          ],
          [
            'label' => 'Serving',
            'icon'  => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
            'value' => 'All of Orange County',
            'sub'   => 'All OC courthouses',
          ],
          [
            'label' => 'Languages',
            'icon'  => 'M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129',
            'value' => 'English &amp; Spanish',
            'sub'   => 'Se Habla Español',
          ],
          [
            'label' => 'Response Time',
            'icon'  => 'M13 10V3L4 14h7v7l9-11h-7z',
            'value' => 'Under 30 Minutes',
            'sub'   => 'Attorney connection guarantee',
          ],
        ] as $item)
        <div class="bg-navy border border-gold/20 p-6 flex items-center gap-5">
          <div class="shrink-0 w-10 h-10 border border-gold/35 flex items-center justify-center">
            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/>
            </svg>
          </div>
          <div>
            <div class="text-cream/40 text-[10px] uppercase tracking-[0.15em] mb-0.5">{{ $item['label'] }}</div>
            <div class="text-cream font-bold text-sm">{!! $item['value'] !!}</div>
            <div class="text-cream/45 text-xs">{{ $item['sub'] }}</div>
          </div>
        </div>
        @endforeach

        {{-- Disclaimer --}}
        <div class="border border-gold/15 p-5">
          <p class="text-cream/35 text-[11px] leading-relaxed">
            <span class="text-cream/50 font-bold">Attorney Advertising.</span> OC Arrested is a legal referral service, not a law firm. Submitting a form does not create an attorney-client relationship. Results described on this site are not a guarantee of future outcomes.
          </p>
        </div>

      </div>

    </div>
  </div>
</section>
