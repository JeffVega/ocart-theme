{{-- =========================================================
     WHY CHOOSE US
     ========================================================= --}}
<section class="bg-navy-mid py-24 lg:py-32">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

      <div class="gold-line-left pl-8">
        <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-4">Why OC Arrested</div>
        <h2 class="font-display text-5xl lg:text-6xl text-cream font-bold leading-tight mb-10">
          Your Defense<br/><span class="text-gold italic">Begins Here</span>
        </h2>
        <div class="space-y-7">
          @foreach ([
            ['Immediate Response',      'Calls answered within minutes — any hour, any day. When you need help, we\'re there.'],
            ['Deep OC Court Knowledge', 'We know Orange County courtrooms, judges, and prosecutors. That local edge matters.'],
            ['No Cost to Start',        'Your first consultation is free, with no pressure. We discuss fees honestly upfront.'],
            ['Se Habla Español',        'Full Spanish-language service available throughout your entire case.'],
          ] as [$title, $body])
          <div class="flex gap-5">
            <div class="shrink-0 w-10 h-10 border border-gold/35 flex items-center justify-center mt-1">
              <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <div>
              <h4 class="font-display text-lg text-cream font-bold mb-1">{{ $title }}</h4>
              <p class="text-cream/55 text-sm leading-relaxed">{{ $body }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="relative">
        <div class="grid grid-cols-2 gap-4">
          @foreach ([
            ['98%',  'Client Satisfaction'],
            ['500+', 'Cases Won'],
            ['15+',  'Years in OC'],
            ['24/7', 'Attorney Access'],
          ] as [$num, $label])
          <div class="bg-navy border border-gold/20 hover:border-gold/45 p-8 text-center transition-colors group cursor-default">
            <div class="font-display text-5xl text-gold font-bold mb-2 group-hover:scale-105 transition-transform inline-block">{{ $num }}</div>
            <div class="text-cream/50 text-[11px] uppercase tracking-[0.15em]">{{ $label }}</div>
          </div>
          @endforeach
        </div>
        <div class="absolute -top-5 -right-5 w-20 h-20 border border-gold/15 pointer-events-none"></div>
        <div class="absolute -bottom-5 -left-5 w-14 h-14 border border-gold/15 pointer-events-none"></div>
      </div>

    </div>
  </div>
</section>
