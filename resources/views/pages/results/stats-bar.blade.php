{{-- Stats bar --}}
<section class="bg-navy-mid border-y border-gold/15 py-10">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 divide-x divide-gold/15">
      @foreach ([
        ['500+', 'Cases Handled'],
        ['98%',  'Client Satisfaction'],
        ['200+', 'Charges Dismissed'],
        ['15+',  'Years in OC Courts'],
      ] as [$num, $label])
      <div class="text-center px-4">
        <div class="font-display text-4xl lg:text-5xl text-gold font-bold">{{ $num }}</div>
        <div class="text-cream/45 text-[11px] uppercase tracking-[0.15em] mt-1">{{ $label }}</div>
      </div>
      @endforeach
    </div>
  </div>
</section>
