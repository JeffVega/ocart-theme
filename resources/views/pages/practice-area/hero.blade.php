{{-- Practice Area Hero --}}
<section class="relative bg-navy overflow-hidden" style="padding-top: clamp(7rem, 12vw, 10rem); padding-bottom: 0;">

  {{-- Layered background atmosphere --}}
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_70%_-10%,_#162852_0%,_transparent_65%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_40%_50%_at_10%_80%,_rgba(201,168,76,0.06)_0%,_transparent_60%)]"></div>

  {{-- Vertical gold rule --}}
  <div class="absolute left-0 inset-y-0 w-[2px] bg-gradient-to-b from-transparent via-gold/50 to-transparent"></div>

  {{-- Faint diagonal grid lines --}}
  <div class="absolute inset-0 opacity-[0.025]"
       style="background-image: repeating-linear-gradient(45deg, #c9a84c 0px, #c9a84c 1px, transparent 1px, transparent 48px);"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-end pb-0">

      {{-- Left: Headline & copy --}}
      <div class="lg:col-span-7 pb-16 lg:pb-24">

        {{-- Eyebrow --}}
        <div class="flex items-center gap-3 mb-6 animate-fade-in" style="animation-delay:0.05s">
          <span class="inline-block bg-gold/15 border border-gold/30 text-gold text-[10px] uppercase tracking-[0.25em] font-bold px-3 py-1.5">
            {{ $area['badge'] }}
          </span>
          <span class="h-px flex-1 max-w-[60px] bg-gold/25"></span>
          <span class="text-cream/30 text-[10px] uppercase tracking-[0.2em]">Orange County, CA</span>
        </div>

        {{-- Main headline --}}
        <h1 class="font-display font-bold leading-none mb-6 animate-fade-in" style="animation-delay:0.1s; font-size: clamp(3.5rem, 8vw, 6.5rem);">
          <span class="text-cream block">{{ $area['headline'] }}</span>
          <span class="text-gold italic block">{{ $area['italic'] }}</span>
        </h1>

        {{-- Tagline --}}
        <p class="text-cream/60 text-lg leading-relaxed max-w-xl mb-10 animate-fade-in" style="animation-delay:0.18s">
          {{ $area['tagline'] }}
        </p>

        {{-- CTA row --}}
        <div class="flex flex-wrap gap-4 animate-fade-in" style="animation-delay:0.25s">
          <a href="{{ $phoneTel }}"
             class="inline-flex items-center gap-3 bg-urgent hover:bg-urgent-dark text-white font-bold text-sm uppercase tracking-widest px-8 py-4 transition-colors duration-200 animate-glow-pulse">
            <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Call Now — Free Consult
          </a>
          <a href="{{ home_url('/contact') }}"
             class="inline-flex items-center gap-2 border border-gold/40 hover:border-gold text-gold hover:text-gold-light text-sm uppercase tracking-widest font-bold px-8 py-4 transition-all duration-200">
            Free Case Review
          </a>
        </div>

        {{-- Trust micro-line --}}
        <div class="flex flex-wrap gap-x-6 gap-y-2 mt-8 animate-fade-in" style="animation-delay:0.32s">
          @foreach (['24/7 Availability', 'No Upfront Fees', 'Confidential', 'Se Habla Español'] as $trust)
          <span class="flex items-center gap-2 text-cream/40 text-xs uppercase tracking-wider">
            <span class="w-1 h-1 rounded-full bg-gold/50 shrink-0"></span>
            {{ $trust }}
          </span>
          @endforeach
        </div>

      </div>

      {{-- Right: Stats card --}}
      <div class="lg:col-span-5 pb-16 lg:pb-20 animate-fade-in" style="animation-delay:0.2s">
        <div class="bg-navy-mid border border-gold/20 relative overflow-hidden">
          {{-- Gold top accent --}}
          <div class="absolute top-0 inset-x-0 h-[2px] bg-gradient-to-r from-transparent via-gold to-transparent"></div>

          <div class="px-8 pt-8 pb-2">
            <div class="text-gold/50 text-[10px] uppercase tracking-[0.25em] font-bold mb-6">Key Facts — {{ $area['category'] }}</div>
          </div>

          <div class="divide-y divide-gold/10">
            @foreach ($area['stats'] as $stat)
            <div class="px-8 py-6 flex items-start gap-5">
              <div class="shrink-0 text-right min-w-[80px]">
                <div class="font-display font-bold text-gold leading-none" style="font-size: clamp(1.75rem, 3vw, 2.5rem);">{{ $stat['value'] }}</div>
                @if ($stat['unit'])
                <div class="text-gold/50 text-[10px] uppercase tracking-widest mt-1">{{ $stat['unit'] }}</div>
                @endif
              </div>
              <div class="w-px self-stretch bg-gold/20 shrink-0"></div>
              <p class="text-cream/55 text-sm leading-snug pt-1">{{ $stat['label'] }}</p>
            </div>
            @endforeach
          </div>

          <div class="px-8 py-5 border-t border-gold/10 bg-navy/30">
            <p class="text-cream/30 text-[10px] uppercase tracking-[0.15em]">
              Source: California Courts · California DMV · CA Penal Code
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  {{-- Diagonal bottom cut --}}
  <div class="relative h-16 overflow-hidden">
    <div class="absolute inset-0 bg-navy" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 0);"></div>
    <div class="absolute inset-0 bg-navy-mid" style="clip-path: polygon(0 100%, 100% 0, 100% 100%);"></div>
  </div>

</section>
