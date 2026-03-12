{{-- =========================================================
     TESTIMONIALS
     ========================================================= --}}
<section class="bg-navy py-24 lg:py-32">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16">
      <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-3">Client Stories</div>
      <h2 class="font-display text-5xl lg:text-6xl text-cream font-bold">
        Real Results,<br/><span class="text-gold italic">Real People</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach ([
        ['DUI charges completely dismissed. I thought my life was over — they turned it around in 3 weeks. I can\'t express how grateful I am.',      'M.R.',        'Irvine, CA',    'DUI Defense',        '★★★★★'],
        ['They answered at 2am from the jail. My attorney was at the arraignment the very next morning. Professional, fast, and genuinely effective.', 'D.T.',        'Anaheim, CA',   'Drug Possession',    '★★★★★'],
        ['My son was facing serious felony charges. The team fought hard and got them significantly reduced. His future is intact.',                    'Anonymous',   'Santa Ana, CA', 'Juvenile Defense',   '★★★★★'],
      ] as [$quote, $name, $location, $type, $stars])
      <div class="bg-navy-mid border border-gold/20 hover:border-gold/40 p-8 relative transition-colors group">
        <div class="absolute top-5 left-6 text-gold/20 font-display text-8xl leading-none pointer-events-none">"</div>
        <div class="text-gold text-sm mb-4 tracking-wide">{{ $stars }}</div>
        <p class="text-cream/80 text-sm leading-relaxed italic font-light mb-6 relative z-10">{{ $quote }}</p>
        <div class="border-t border-gold/15 pt-4">
          <div class="font-bold text-cream text-sm">{{ $name }}</div>
          <div class="text-cream/40 text-xs">{{ $location }}</div>
          <span class="inline-block mt-2 bg-gold/10 border border-gold/25 text-gold text-[10px] uppercase tracking-[0.15em] px-2 py-1">
            {{ $type }}
          </span>
        </div>
      </div>
      @endforeach
    </div>

    <div class="text-center mt-10">
      <a href="{{ home_url('/results') }}"
         class="inline-block border border-gold/40 text-gold hover:bg-gold hover:text-navy px-10 py-4 text-[11px] uppercase tracking-[0.2em] font-bold transition-all duration-200">
        View All Results &amp; Testimonials →
      </a>
    </div>
  </div>
</section>
