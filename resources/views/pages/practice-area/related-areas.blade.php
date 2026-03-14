{{-- Practice Area: Related Areas --}}
@if (!empty($relatedAreas))
<section class="bg-navy-mid py-16 border-t border-gold/10">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <div class="flex items-center gap-4 mb-10">
      <span class="text-gold/40 font-display text-xs font-bold uppercase tracking-[0.25em]">Also Handled</span>
      <div class="h-px flex-1 bg-gold/15"></div>
    </div>

    <h2 class="font-display text-3xl lg:text-4xl text-cream font-bold mb-10">
      Related Practice Areas
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-{{ count($relatedAreas) === 2 ? '2' : '3' }} gap-4">
      @foreach ($relatedAreas as $related)
      <a href="{{ home_url('/' . $related['id']) }}"
         class="group bg-navy border border-gold/10 hover:border-gold/35 transition-all duration-300 p-7 relative overflow-hidden block">

        {{-- Hover gradient --}}
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_right,_rgba(201,168,76,0.06)_0%,_transparent_60%)] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

        <div class="relative z-10">
          <div class="text-gold/30 text-[10px] uppercase tracking-[0.2em] font-bold mb-3">{{ $related['category'] }}</div>
          <h3 class="font-display font-bold text-cream group-hover:text-gold transition-colors duration-300 mb-1" style="font-size: 1.5rem; line-height: 1.2;">
            {{ $related['headline'] }}
            <span class="italic">{{ $related['italic'] }}</span>
          </h3>
          <p class="text-cream/40 text-sm leading-snug mt-2 mb-5">{{ $related['tagline'] }}</p>

          <span class="inline-flex items-center gap-2 text-gold/60 group-hover:text-gold text-xs uppercase tracking-widest font-bold transition-colors duration-200">
            Learn more
            <svg class="w-3.5 h-3.5 translate-x-0 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </span>
        </div>

        {{-- Bottom accent --}}
        <div class="absolute bottom-0 left-0 right-0 h-[1px] bg-gold/0 group-hover:bg-gold/25 transition-colors duration-300"></div>
      </a>
      @endforeach
    </div>

  </div>
</section>
@endif
