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
