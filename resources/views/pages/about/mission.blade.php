{{-- Mission --}}
<section class="bg-navy-mid py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

      <div class="gold-line-left pl-8">
        <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-4">Our Mission</div>
        <h2 class="font-display text-4xl lg:text-5xl text-cream font-bold mb-6 leading-tight">
          No One Should Face<br/>an Arrest Alone
        </h2>
        <div class="space-y-4 text-cream/65 text-sm leading-relaxed">
          <p>
            When an arrest happens, most people don't know where to turn. The legal system is intimidating, the stakes are high, and the clock is ticking. We built OC Arrested to solve exactly this problem.
          </p>
          <p>
            We are a legal matching service dedicated to Orange County. We've built deep relationships with the county's best criminal defense attorneys — people who know the local courts, the prosecutors, and the judges.
          </p>
          <p>
            Our only goal is to get you connected with the right attorney as fast as possible, so your defense can begin before any damage is done.
          </p>
        </div>
      </div>

      <div class="space-y-4">
        @foreach ([
          ['2009',    'Year Founded',          'Over 15 years serving Orange County residents.'],
          ['500+',    'Clients Connected',     'Hundreds of families helped across all charge types.'],
          ['20+',     'Partner Attorneys',     'Vetted, experienced OC criminal defense lawyers.'],
          ['All OC',  'Coverage',              'Every city, every courthouse in Orange County.'],
        ] as [$num, $title, $body])
        <div class="bg-navy border border-gold/20 hover:border-gold/40 p-6 flex items-center gap-6 transition-colors group">
          <div class="shrink-0 text-center w-20">
            <div class="font-display text-3xl text-gold font-bold">{{ $num }}</div>
          </div>
          <div class="border-l border-gold/20 pl-6">
            <div class="text-cream font-bold text-sm mb-1">{{ $title }}</div>
            <div class="text-cream/50 text-xs leading-relaxed">{{ $body }}</div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>
</section>
