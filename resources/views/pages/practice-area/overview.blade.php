{{-- Practice Area: Overview --}}
<div id="overview">

  {{-- Section label --}}
  <div class="flex items-center gap-4 mb-10">
    <span class="text-gold/40 font-display text-xs font-bold uppercase tracking-[0.25em]">Overview</span>
    <div class="h-px flex-1 bg-gold/15"></div>
  </div>

  {{-- Intro paragraph --}}
  <p class="text-cream/70 text-base lg:text-lg leading-relaxed mb-12 font-light border-l-2 border-gold/40 pl-6">
    {{ $area['overview']['intro'] }}
  </p>

  {{-- Key facts grid --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-gold/10">
    @foreach ($area['overview']['facts'] as $i => $fact)
    <div class="bg-navy-mid p-7 relative overflow-hidden group">
      {{-- Faint number watermark --}}
      <div class="absolute right-4 bottom-2 font-display font-bold text-gold/[0.04] select-none pointer-events-none"
           style="font-size: 5rem; line-height: 1;">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>

      <div class="relative z-10">
        <div class="text-2xl mb-3 leading-none">{{ $fact['icon'] }}</div>
        <h3 class="font-display text-cream font-bold text-lg mb-2 group-hover:text-gold transition-colors duration-300">
          {{ $fact['label'] }}
        </h3>
        <p class="text-cream/50 text-sm leading-relaxed">{{ $fact['detail'] }}</p>
      </div>

      {{-- Hover accent line --}}
      <div class="absolute bottom-0 left-0 right-0 h-[2px] bg-gold/0 group-hover:bg-gold/30 transition-colors duration-300"></div>
    </div>
    @endforeach
  </div>

</div>
