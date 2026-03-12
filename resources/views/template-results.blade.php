{{--
  Template Name: Results & Testimonials
--}}

@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="relative bg-navy pt-36 pb-20 overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_80%_30%,_#162852_0%,_transparent_65%)]"></div>
  <div class="absolute left-0 inset-y-0 w-[3px] bg-gradient-to-b from-transparent via-gold to-transparent opacity-40"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-4">Track Record</div>
    <h1 class="font-display text-6xl lg:text-8xl text-cream font-bold leading-none mb-6">
      Results &amp;<br/><span class="text-gold italic">Testimonials</span>
    </h1>
    <p class="text-cream/60 text-lg max-w-lg leading-relaxed">
      Real outcomes for real Orange County clients. Names redacted to protect client privacy.
    </p>
  </div>
</section>


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


{{-- Case Results --}}
<section class="bg-navy py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16">
      <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-3">Recent Outcomes</div>
      <h2 class="font-display text-5xl text-cream font-bold">Case Results</h2>
      <p class="text-cream/50 text-sm mt-3 max-w-md mx-auto">
        Every case is unique. Past results do not guarantee future outcomes.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
      @foreach ([
        ['DUI – .14 BAC',                     'All charges dismissed',           'Breathalyzer calibration challenged; stop unlawful.',    'Anaheim',          'DUI Defense'],
        ['Drug Possession (cocaine)',          'Reduced to infraction',           'Fourth Amendment violation — evidence suppressed.',      'Santa Ana',        'Drug Crimes'],
        ['Domestic Violence (felony)',         'Acquitted at trial',              'False accusation — timeline evidence exonerated client.','Irvine',           'Domestic Violence'],
        ['Grand Theft (retail, $900+)',        'Misdemeanor plea, no jail',       'First offense; negotiated diversion program.',           'Fullerton',        'Theft Crimes'],
        ['Assault w/ Deadly Weapon',          'Charges reduced to misdemeanor',  'Self-defense argument accepted; no prison time.',        'Orange',           'Assault'],
        ['DUI – Refusal (2nd offense)',        'License suspension overturned',   'DMV hearing won; criminal charges reduced to wet-reckless.','Costa Mesa',    'DUI Defense'],
        ['Juvenile Drug Possession',          'Diverted; record sealed',         'Juvenile diversion program — no criminal record.',       'Mission Viejo',    'Juvenile Defense'],
        ['Robbery (2nd degree)',              'Reduced to petty theft',          'Key witness recanted; prosecution evidence weakened.',   'Garden Grove',     'Robbery'],
        ['Drug Sales (Health & Safety 11351)', 'Probation only, no prison',      'Mitigating circumstances; cooperation with counsel.',    'Huntington Beach', 'Drug Crimes'],
      ] as [$charge, $outcome, $summary, $city, $type])
      <div class="bg-navy-mid border border-gold/20 hover:border-gold/45 p-6 transition-colors">
        <div class="flex items-start justify-between gap-3 mb-3">
          <span class="inline-block bg-gold/10 border border-gold/25 text-gold text-[10px] uppercase tracking-[0.15em] px-2 py-1 shrink-0">
            {{ $type }}
          </span>
          <span class="text-cream/35 text-xs">{{ $city }}</span>
        </div>
        <div class="text-cream/60 text-xs font-medium uppercase tracking-wide mb-2">Charge:</div>
        <div class="text-cream font-display text-lg font-bold mb-3">{{ $charge }}</div>
        <div class="w-8 h-[2px] bg-gold mb-3"></div>
        <div class="text-gold font-bold text-sm mb-3">Result: {{ $outcome }}</div>
        <p class="text-cream/50 text-xs leading-relaxed">{{ $summary }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>


{{-- Testimonials --}}
<section id="testimonials" class="bg-navy-mid py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16">
      <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-3">In Their Words</div>
      <h2 class="font-display text-5xl text-cream font-bold">Client Testimonials</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @foreach ([
        ['DUI charges completely dismissed. I thought my life was over and my career finished. They turned it around in three weeks. I can\'t express how grateful I am for the fast response and the outcome.',                    'M.R.',      'Irvine',           'DUI Defense',          '★★★★★'],
        ['They answered at 2am when I called from the jail. My attorney was at the arraignment the very next morning. Professional, fast, and genuinely effective. I would call them again without hesitation.',                   'D.T.',      'Anaheim',          'Drug Possession',      '★★★★★'],
        ['My son was facing serious felony charges that could have changed his life forever. The team fought incredibly hard and got them significantly reduced. His future is protected, and that\'s everything.',                 'Anonymous', 'Santa Ana',        'Juvenile Defense',     '★★★★★'],
        ['I didn\'t know what to do when I got the call that my husband was arrested. OC Arrested connected us with a lawyer within 30 minutes. The lawyer was at the hearing and the outcome was far better than expected.',     'L.M.',      'Fullerton',        'Assault Charges',      '★★★★★'],
        ['Second DUI and I was terrified. They found a problem with the breathalyzer and the entire case was reduced to a wet reckless. Saved my license. Saved my job. Best money I ever spent.',                                'Anonymous', 'Costa Mesa',       'DUI (2nd Offense)',    '★★★★★'],
        ['The domestic violence accusation was completely false. These attorneys believed me, did the investigative work to prove it, and I was acquitted. I can\'t imagine what would have happened without them.',               'R.K.',      'Orange',           'Domestic Violence',    '★★★★★'],
      ] as [$quote, $name, $location, $type, $stars])
      <div class="bg-navy border border-gold/20 hover:border-gold/40 p-8 relative transition-colors">
        <div class="absolute top-6 left-7 text-gold/15 font-display text-9xl leading-none pointer-events-none select-none">"</div>
        <div class="text-gold text-sm mb-4 tracking-wider">{{ $stars }}</div>
        <p class="text-cream/80 text-sm leading-relaxed italic font-light mb-6 relative z-10">{{ $quote }}</p>
        <div class="border-t border-gold/15 pt-5 flex items-end justify-between">
          <div>
            <div class="font-bold text-cream text-sm">{{ $name }}</div>
            <div class="text-cream/40 text-xs mt-0.5">{{ $location }}, CA</div>
          </div>
          <span class="bg-gold/10 border border-gold/25 text-gold text-[10px] uppercase tracking-[0.15em] px-2 py-1">
            {{ $type }}
          </span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


{{-- CTA --}}
<section class="bg-urgent py-20 relative overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(154,21,21,0.7)_0%,_transparent_70%)]"></div>
  <div class="relative z-10 max-w-2xl mx-auto px-6 text-center">
    <h2 class="font-display text-5xl text-white font-bold mb-4">Your Result is Next.</h2>
    <p class="text-white/70 mb-8">Call now for a free, confidential case evaluation.</p>
    <a href="tel:+17145550000"
       class="inline-flex items-center gap-3 bg-white text-urgent hover:bg-cream px-10 py-5 font-display text-2xl font-bold transition-colors">
      <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
      </svg>
      (714) 555-0000
    </a>
  </div>
</section>

@endsection
