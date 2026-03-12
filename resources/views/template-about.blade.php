{{--
  Template Name: About Us
--}}

@extends('layouts.app')

@section('content')

{{-- Page hero --}}
<section class="relative bg-navy pt-36 pb-24 overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_80%_30%,_#162852_0%,_transparent_65%)]"></div>
  <div class="absolute left-0 inset-y-0 w-[3px] bg-gradient-to-b from-transparent via-gold to-transparent opacity-40"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-4">Who We Are</div>
    <h1 class="font-display text-6xl lg:text-8xl text-cream font-bold leading-none mb-6">
      About<br/><span class="text-gold italic">OC Arrested</span>
    </h1>
    <p class="text-cream/60 text-xl max-w-xl leading-relaxed">
      Orange County's trusted connection between arrested individuals and experienced criminal defense attorneys — since 2009.
    </p>
  </div>
</section>


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


{{-- How We Work --}}
<section class="bg-navy py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16">
      <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-3">Our Approach</div>
      <h2 class="font-display text-5xl text-cream font-bold">How We Operate</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach ([
        ['Immediate Access',    'We\'re not a law firm — we\'re a 24/7 connection service. When you call, a real person answers and begins your case evaluation instantly.'],
        ['Careful Matching',    'Not every attorney is right for every case. We match you with lawyers who specialize in your specific charges and have local OC experience.'],
        ['No Obligation',       'Our service is free to use. We believe cost should never be a barrier to getting proper legal help after an arrest.'],
      ] as [$title, $body])
      <div class="bg-navy-mid border border-gold/20 hover:border-gold/45 p-8 transition-colors">
        <div class="w-8 h-[3px] bg-gold mb-6"></div>
        <h3 class="font-display text-2xl text-cream font-bold mb-3">{{ $title }}</h3>
        <p class="text-cream/55 text-sm leading-relaxed">{{ $body }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>


{{-- Values --}}
<section class="bg-navy-mid py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
      <div>
        <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-4">What We Stand For</div>
        <h2 class="font-display text-4xl lg:text-5xl text-cream font-bold mb-8">Our Values</h2>
        <div class="space-y-6">
          @foreach ([
            ['Speed',        'After an arrest, every hour matters. We operate with urgency.'],
            ['Transparency', 'No hidden fees, no surprises. We explain everything clearly.'],
            ['Dignity',      'Being arrested doesn\'t define you. We treat everyone with respect.'],
            ['Access',       'Quality legal defense shouldn\'t depend on who you know. We level the field.'],
          ] as [$val, $body])
          <div class="flex gap-4 items-start">
            <div class="shrink-0 mt-1 w-2 h-2 bg-gold"></div>
            <div>
              <span class="font-display text-xl text-cream font-bold">{{ $val }}.</span>
              <span class="text-cream/55 text-sm ml-2">{{ $body }}</span>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="bg-navy border border-gold/20 p-10 flex flex-col justify-center">
        <blockquote class="font-display text-2xl lg:text-3xl text-cream font-light italic leading-relaxed mb-6">
          "When you've been arrested, you need someone who answers the phone and knows what to do. That's exactly what we provide."
        </blockquote>
        <div class="border-t border-gold/20 pt-5">
          <div class="font-bold text-cream text-sm">The OC Arrested Team</div>
          <div class="text-gold text-xs tracking-wide mt-1">Orange County, California</div>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- CTA --}}
<section class="bg-urgent py-20 relative overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(154,21,21,0.7)_0%,_transparent_70%)]"></div>
  <div class="relative z-10 max-w-2xl mx-auto px-6 text-center">
    <h2 class="font-display text-5xl md:text-6xl text-white font-bold mb-4">Need Help Now?</h2>
    <p class="text-white/70 mb-8 leading-relaxed">We're standing by 24/7. A real person will answer your call.</p>
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
