{{-- =========================================================
     TRUST BAR
     ========================================================= --}}
<section class="bg-navy-mid border-b border-gold/15">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-8">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 divide-x divide-gold/15">
      @foreach ([
        ['500+',  'Cases Handled'],
        ['24/7',  'Attorney Access'],
        ['15+',   'Years in OC Courts'],
        ['FREE',  'Consultation'],
      ] as [$num, $label])
      <div class="flex flex-col items-center py-2">
        <span class="font-display text-4xl font-bold text-gold">{{ $num }}</span>
        <span class="text-cream/45 text-[11px] uppercase tracking-[0.15em] mt-1">{{ $label }}</span>
      </div>
      @endforeach
    </div>
  </div>
</section>
