<header id="site-header" class="fixed top-0 left-0 right-0 z-50">
  <div class="header-bg border-b border-gold/10 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">

        {{-- Logo --}}
        <a href="{{ home_url('/') }}" class="flex items-center gap-3 shrink-0 group">
          <div class="w-11 h-11 border-2 border-gold flex items-center justify-center transition-colors group-hover:bg-gold">
            <span class="text-gold group-hover:text-navy font-display font-bold text-lg transition-colors">OC</span>
          </div>
          <div class="leading-tight">
            <div class="text-cream font-display text-xl font-bold tracking-wide">OC Arrested</div>
            <div class="text-gold text-[10px] tracking-[0.2em] uppercase font-medium">Criminal Defense · OC</div>
          </div>
        </a>

        {{-- Desktop nav --}}
        <nav class="hidden lg:flex items-center gap-7" aria-label="Primary navigation">
          <a href="{{ home_url('/') }}" class="text-cream/70 hover:text-gold transition-colors text-[13px] tracking-widest uppercase font-medium">Home</a>
          <a href="{{ home_url('/about') }}" class="text-cream/70 hover:text-gold transition-colors text-[13px] tracking-widest uppercase font-medium">About</a>
          <a href="{{ home_url('/practice-areas') }}" class="text-cream/70 hover:text-gold transition-colors text-[13px] tracking-widest uppercase font-medium">Practice Areas</a>
          <a href="{{ home_url('/results') }}" class="text-cream/70 hover:text-gold transition-colors text-[13px] tracking-widest uppercase font-medium">Results</a>
          <a href="{{ home_url('/faq') }}" class="text-cream/70 hover:text-gold transition-colors text-[13px] tracking-widest uppercase font-medium">FAQ</a>
          <a href="{{ home_url('/contact') }}" class="text-cream/70 hover:text-gold transition-colors text-[13px] tracking-widest uppercase font-medium">Contact</a>
        </nav>

        {{-- CTA --}}
        <a href="tel:+17145550000"
           class="hidden lg:flex items-center gap-2 bg-urgent hover:bg-urgent-dark text-white px-5 py-3 font-bold text-sm tracking-widest uppercase transition-all duration-200 animate-glow-pulse">
          <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
          </svg>
          (714) 555-0000
        </a>

        {{-- Mobile toggle --}}
        <button id="nav-toggle" aria-label="Toggle menu" aria-expanded="false"
                class="lg:hidden text-cream p-2 -mr-2 focus:outline-none focus:text-gold">
          <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-nav" class="hidden lg:hidden bg-navy-mid border-t border-gold/20">
      <nav class="px-6 py-5 flex flex-col gap-1">
        <a href="{{ home_url('/') }}"               class="text-cream/80 hover:text-gold py-3 text-sm tracking-widest uppercase font-medium border-b border-gold/10 transition-colors">Home</a>
        <a href="{{ home_url('/about') }}"           class="text-cream/80 hover:text-gold py-3 text-sm tracking-widest uppercase font-medium border-b border-gold/10 transition-colors">About</a>
        <a href="{{ home_url('/practice-areas') }}"  class="text-cream/80 hover:text-gold py-3 text-sm tracking-widest uppercase font-medium border-b border-gold/10 transition-colors">Practice Areas</a>
        <a href="{{ home_url('/results') }}"         class="text-cream/80 hover:text-gold py-3 text-sm tracking-widest uppercase font-medium border-b border-gold/10 transition-colors">Results</a>
        <a href="{{ home_url('/faq') }}"             class="text-cream/80 hover:text-gold py-3 text-sm tracking-widest uppercase font-medium border-b border-gold/10 transition-colors">FAQ</a>
        <a href="{{ home_url('/contact') }}"         class="text-cream/80 hover:text-gold py-3 text-sm tracking-widest uppercase font-medium border-b border-gold/10 transition-colors">Contact</a>
        <a href="tel:+17145550000" class="mt-4 bg-urgent text-white text-center py-4 font-bold text-sm tracking-widest uppercase">
          Call (714) 555-0000
        </a>
      </nav>
    </div>
  </div>
</header>

