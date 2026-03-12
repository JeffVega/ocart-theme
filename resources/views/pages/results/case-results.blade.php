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
