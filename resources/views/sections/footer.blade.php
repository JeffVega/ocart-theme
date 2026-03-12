<footer class="bg-navy border-t border-gold/20">

  {{-- Main footer content --}}
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12">

      {{-- Brand column --}}
      <div class="lg:col-span-5">
        <a href="{{ home_url('/') }}" class="inline-flex items-center gap-3 mb-6 group">
          <div class="w-12 h-12 border-2 border-gold flex items-center justify-center transition-colors group-hover:bg-gold">
            <span class="text-gold group-hover:text-navy font-display font-bold text-xl transition-colors">OC</span>
          </div>
          <div>
            <div class="text-cream font-display text-2xl font-bold">OC Arrested</div>
            <div class="text-gold text-[10px] tracking-[0.2em] uppercase">Criminal Defense · Orange County</div>
          </div>
        </a>

        <p class="text-cream/55 text-sm leading-relaxed max-w-xs mb-8">
          Arrested in Orange County? We connect you with experienced criminal defense attorneys immediately — 24 hours a day, 7 days a week.
        </p>

        <a href="{{ $phoneTel }}" class="inline-flex items-center gap-3 text-gold hover:text-gold-light transition-colors group">
          <div class="w-10 h-10 border border-gold/40 flex items-center justify-center group-hover:border-gold transition-colors shrink-0">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
          </div>
          <span class="font-display text-2xl font-bold">{{ $phoneDisplay }}</span>
        </a>

        <div class="mt-4 flex items-center gap-2 text-cream/40 text-xs">
          <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
          Available right now · Se Habla Español
        </div>
      </div>

      {{-- Quick links --}}
      <div class="lg:col-span-3">
        <h4 class="text-gold font-display text-base font-bold tracking-[0.15em] uppercase mb-6">Quick Links</h4>
        <ul class="space-y-3">
          @foreach ($footerMenuItems as $item)
            <li>
              <a href="{{ $item['url'] }}"
                 class="text-sm tracking-wide flex items-center gap-2 group transition-colors
                        {{ $item['isActive'] ? 'text-gold' : 'text-cream/55 hover:text-gold' }}"
                 @if($item['isActive']) aria-current="page" @endif>
                <span class="h-px transition-all duration-200
                             {{ $item['isActive'] ? 'w-5 bg-gold' : 'w-3 bg-gold/30 group-hover:bg-gold group-hover:w-5' }}"></span>
                {{ $item['label'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>

      {{-- Practice areas --}}
      <div class="lg:col-span-4">
        <h4 class="text-gold font-display text-base font-bold tracking-[0.15em] uppercase mb-6">Practice Areas</h4>
        <ul class="grid grid-cols-2 gap-y-3 gap-x-4">
          @foreach ([
            ['DUI / DWI',          '/practice-areas#dui'],
            ['Drug Crimes',        '/practice-areas#drug-crimes'],
            ['Assault & Battery',  '/practice-areas#assault'],
            ['Domestic Violence',  '/practice-areas#domestic-violence'],
            ['Theft Crimes',       '/practice-areas#theft'],
            ['Robbery',            '/practice-areas#robbery'],
            ['Juvenile Defense',   '/practice-areas#juvenile'],
            ['Expungements',       '/practice-areas#expungement'],
          ] as [$label, $url])
          <li>
            <a href="{{ home_url($url) }}" class="text-cream/55 hover:text-gold transition-colors text-xs tracking-wide">
              {{ $label }}
            </a>
          </li>
          @endforeach
        </ul>

        <div class="mt-8 bg-navy-mid border border-gold/20 p-5">
          <div class="text-xs text-cream/40 uppercase tracking-widest mb-2">Serving Orange County, California</div>
          <p class="text-cream/60 text-xs leading-relaxed">
            Anaheim, CA · Irvine, CA · Santa Ana, CA · Fullerton, CA · Huntington Beach, CA · Newport Beach, CA · Orange, CA · Costa Mesa, CA · Garden Grove, CA
          </p>
        </div>
      </div>
    </div>
  </div>

  {{-- Bottom bar --}}
  <div class="border-t border-gold/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-cream/30 text-xs">
        © {{ date('Y') }} OC Arrested · Attorney Advertising · Results Not Guaranteed
      </p>
      <nav class="flex items-center gap-5">
        @foreach ([['Privacy Policy', '/privacy-policy'], ['Terms', '/terms'], ['Disclaimer', '/disclaimer']] as [$label, $url])
        <a href="{{ home_url($url) }}" class="text-cream/30 hover:text-gold transition-colors text-xs">{{ $label }}</a>
        @endforeach
      </nav>
    </div>
  </div>

</footer>
