{{-- =========================================================
     PRACTICE AREAS PREVIEW
     ========================================================= --}}
<section class="bg-navy py-24 lg:py-32">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-14">
      <div>
        <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-3">What We Handle</div>
        <h2 class="font-display text-5xl lg:text-6xl text-cream font-bold">Practice Areas</h2>
      </div>
      <a href="{{ home_url('/practice-areas') }}"
         class="mt-5 md:mt-0 text-gold hover:text-gold-light border-b border-gold/40 hover:border-gold-light pb-1 text-[11px] uppercase tracking-[0.2em] font-bold transition-colors">
        View All Areas →
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach ([
        ['DUI / DWI',         'Protect your license and freedom. We challenge breath tests, field sobriety evidence, and procedural violations.', 'dui'],
        ['Drug Crimes',       'Possession to trafficking — from misdemeanor to felony, we build aggressive defenses at every level.', 'drug-crimes'],
        ['Assault & Battery', 'Context and intent matter. Our attorneys dismantle weak prosecution narratives and fight for dismissals.', 'assault'],
        ['Domestic Violence', 'False accusations are common. We provide confidential, sensitive defense focused on your future.', 'domestic-violence'],
        ['Theft Crimes',      'Shoplifting to grand theft. We work to reduce charges, protect your record, and avoid incarceration.', 'theft'],
        ['Juvenile Offenses', 'Young people deserve a second chance. We specialize in keeping charges off your child\'s permanent record.', 'juvenile'],
      ] as [$title, $desc, $slug])
      <a href="{{ home_url('/practice-areas#' . $slug) }}"
         class="group bg-navy-mid border border-gold/20 hover:border-gold/55 p-7 transition-all duration-300 hover:-translate-y-1">
        <h3 class="font-display text-xl text-cream font-bold mb-3 group-hover:text-gold transition-colors">{{ $title }}</h3>
        <p class="text-cream/50 text-sm leading-relaxed mb-5">{{ $desc }}</p>
        <span class="text-gold/0 group-hover:text-gold text-[11px] uppercase tracking-[0.15em] font-bold transition-colors">
          Learn More →
        </span>
      </a>
      @endforeach
    </div>
  </div>
</section>
