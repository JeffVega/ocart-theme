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
          @foreach ($headerMenuItems as $item)
            @if(!empty($item['children']))
              {{-- Parent item with dropdown --}}
              <div class="relative group" data-dropdown>
                <a href="{{ $item['url'] }}"
                   class="relative text-[13px] tracking-widest uppercase font-medium transition-colors pb-1 inline-flex items-center gap-1
                          {{ $item['isActive'] ? 'text-gold' : 'text-cream/70 hover:text-gold' }}"
                   @if($item['isActive']) aria-current="page" @endif
                   aria-haspopup="true"
                   aria-expanded="false">
                  {{ $item['label'] }}
                  <svg class="w-3 h-3 transition-transform duration-200 [@media(hover:hover)]:group-hover:rotate-180 shrink-0"
                       data-dropdown-chevron fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                  </svg>
                  {{-- Animated underline --}}
                  <span class="absolute bottom-0 left-0 h-px bg-gold transition-all duration-300
                               {{ $item['isActive'] ? 'w-full' : 'w-0 [@media(hover:hover)]:group-hover:w-full' }}"
                        style="right: 1rem;"></span>
                </a>

                {{-- Dropdown panel --}}
                <div class="absolute top-full left-1/2 -translate-x-1/2 pt-4 w-52
                            invisible opacity-0 translate-y-1
                            [@media(hover:hover)]:group-hover:visible [@media(hover:hover)]:group-hover:opacity-100 [@media(hover:hover)]:group-hover:translate-y-0
                            transition-all duration-200 ease-out z-50"
                     data-dropdown-panel
                     role="menu">
                  <div class="relative bg-navy-mid border border-gold/25 shadow-2xl shadow-navy/80 overflow-hidden">
                    {{-- Top accent line --}}
                    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-gold to-transparent"></div>
                    @foreach ($item['children'] as $child)
                      <a href="{{ $child['url'] }}"
                         class="block px-5 py-3 text-[11px] tracking-widest uppercase font-medium
                                border-b border-gold/10 last:border-0
                                transition-colors duration-150
                                {{ $child['isActive'] ? 'text-gold bg-gold/8' : 'text-cream/70 hover:text-gold hover:bg-gold/5' }}"
                         role="menuitem"
                         @if($child['isActive']) aria-current="page" @endif>
                        {{ $child['label'] }}
                      </a>
                    @endforeach
                  </div>
                </div>
              </div>
            @else
              {{-- Regular nav item --}}
              <a href="{{ $item['url'] }}"
                 class="relative text-[13px] tracking-widest uppercase font-medium transition-colors pb-1 group/link
                        {{ $item['isActive'] ? 'text-gold' : 'text-cream/70 hover:text-gold' }}"
                 @if($item['isActive']) aria-current="page" @endif>
                {{ $item['label'] }}
                {{-- Animated underline --}}
                <span class="absolute bottom-0 left-0 h-px bg-gold transition-all duration-300
                             {{ $item['isActive'] ? 'w-full' : 'w-0 group-hover/link:w-full' }}"></span>
              </a>
            @endif
          @endforeach
        </nav>

        {{-- Desktop CTA --}}
        <a href="{{ $phoneTel }}"
           class="hidden lg:flex items-center gap-2 bg-urgent hover:bg-urgent-dark text-white px-5 py-3 font-bold text-sm tracking-widest uppercase transition-all duration-200 animate-glow-pulse">
          <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
          </svg>
          {{ $phoneDisplay }}
        </a>

        {{-- Mobile: compact phone link + hamburger --}}
        <div class="lg:hidden flex items-center gap-3">
          <a href="{{ $phoneTel }}"
             class="flex items-center gap-1.5 text-urgent font-bold text-sm tracking-wide">
            <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Call Now
          </a>
          <button id="nav-toggle" aria-label="Toggle menu" aria-expanded="false"
                  class="text-cream p-2 -mr-2 focus:outline-none focus:text-gold">
            <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-nav" class="hidden lg:hidden bg-navy-mid border-t border-gold/20">
      <nav class="px-6 py-5 flex flex-col gap-1" aria-label="Mobile navigation">
        @foreach ($headerMenuItems as $item)
          @if(!empty($item['children']))
            {{-- Mobile: accordion with <details> — CSS only, no JS needed --}}
            <details class="group/sub" @if($item['isActive']) open @endif>
              <summary class="flex items-center justify-between py-3 text-sm tracking-widest uppercase font-medium
                             border-b border-gold/10 cursor-pointer list-none select-none transition-colors
                             {{ $item['isActive'] ? 'text-gold' : 'text-cream/80 hover:text-gold' }}">
                {{ $item['label'] }}
                <svg class="w-4 h-4 shrink-0 transition-transform duration-200 group-open/sub:rotate-180"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </summary>
              <div class="pl-4 mb-1">
                @foreach ($item['children'] as $child)
                  <a href="{{ $child['url'] }}"
                     class="flex items-center gap-2 py-2.5 text-[12px] tracking-widest uppercase font-medium
                            border-b border-gold/10 last:border-0 transition-colors
                            {{ $child['isActive'] ? 'text-gold' : 'text-cream/60 hover:text-gold' }}"
                     @if($child['isActive']) aria-current="page" @endif>
                    <span class="w-2 h-px bg-gold/40 shrink-0"></span>
                    {{ $child['label'] }}
                  </a>
                @endforeach
              </div>
            </details>
          @else
            <a href="{{ $item['url'] }}"
               class="py-3 text-sm tracking-widest uppercase font-medium border-b border-gold/10 transition-colors
                      {{ $item['isActive'] ? 'text-gold' : 'text-cream/80 hover:text-gold' }}"
               @if($item['isActive']) aria-current="page" @endif>
              {{ $item['label'] }}
            </a>
          @endif
        @endforeach
        <a href="{{ $phoneTel }}" class="mt-4 bg-urgent text-white text-center py-4 font-bold text-sm tracking-widest uppercase">
          Call {{ $phoneDisplay }}
        </a>
      </nav>
    </div>
  </div>
</header>
