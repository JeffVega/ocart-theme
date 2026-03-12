@extends('layouts.app')

@section('content')

{{-- =========================================================
     HERO
     ========================================================= --}}
<section class="relative min-h-screen flex items-center overflow-hidden grain pt-20">
  {{-- Layered background --}}
  <div class="absolute inset-0 bg-navy"></div>
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_70%_20%,_#162852_0%,_transparent_70%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_50%_50%_at_10%_80%,_#0d1b3e_0%,_transparent_60%)]"></div>
  {{-- Gold vertical accent --}}
  <div class="absolute left-0 inset-y-0 w-[3px] bg-gradient-to-b from-transparent via-gold to-transparent opacity-50"></div>

  <div class="relative z-10 w-full max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

      {{-- Left: headline + CTAs --}}
      <div class="lg:col-span-7">
        <div class="anim-hidden animate-fade-in delay-100 inline-flex items-center gap-2 bg-urgent/15 border border-urgent/35 text-urgent/90 text-[11px] uppercase tracking-[0.2em] font-bold px-4 py-2 mb-8">
          <span class="w-2 h-2 bg-urgent rounded-full animate-pulse"></span>
          Available 24 Hours · 7 Days a Week
        </div>

        <h1 class="font-display font-bold leading-none mb-2">
          <span class="anim-hidden animate-fade-up delay-200 block text-cream text-6xl sm:text-8xl lg:text-[104px]">ARRESTED</span>
          <span class="anim-hidden animate-fade-up delay-300 block text-gold italic text-4xl sm:text-6xl lg:text-7xl mt-2">in Orange County?</span>
        </h1>

        <div class="anim-hidden animate-fade-up delay-400 mt-8 mb-10 pl-5 border-l-2 border-gold/40">
          <p class="text-cream/70 text-xl leading-relaxed max-w-lg">
            Every minute without a lawyer works against you. Get connected with an experienced OC criminal defense attorney — <span class="text-cream font-medium">right now.</span>
          </p>
        </div>

        <div class="anim-hidden animate-fade-up delay-500 flex flex-col sm:flex-row gap-4">
          <a href="tel:+17145550000"
             class="group flex items-center justify-center gap-3 bg-urgent hover:bg-urgent-dark text-white px-8 py-5 font-bold text-lg tracking-widest uppercase transition-all duration-200 hover:shadow-2xl hover:shadow-urgent/30 animate-glow-pulse">
            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Call (714) 555-0000
          </a>
          <a href="{{ home_url('/contact') }}"
             class="flex items-center justify-center gap-3 border border-gold text-gold hover:bg-gold hover:text-navy px-8 py-5 font-bold text-lg tracking-widest uppercase transition-all duration-200">
            Free Consultation
          </a>
        </div>

        <div class="anim-hidden animate-fade-up delay-600 mt-6 flex flex-wrap gap-6 text-cream/40 text-xs uppercase tracking-widest">
          <span>✓ No Upfront Fees</span>
          <span>✓ Confidential</span>
          <span>✓ Se Habla Español</span>
          <span>✓ All OC Courts</span>
        </div>
      </div>

      {{-- Right: lead form card --}}
      <div class="anim-hidden animate-fade-up delay-400 lg:col-span-5">
        <div class="relative bg-navy-mid border border-gold/30 p-8">
          <div class="absolute -top-px left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-gold to-transparent"></div>
          <div class="absolute -top-4 left-6">
            <span class="bg-gold text-navy text-[11px] font-bold uppercase tracking-[0.15em] px-3 py-1">Free Case Review</span>
          </div>

          <h3 class="font-display text-2xl text-cream font-bold mb-1 mt-3">Get Help Immediately</h3>
          <p class="text-cream/50 text-sm mb-6">Tell us what happened. We'll respond within minutes.</p>

          <form class="space-y-3" method="POST" action="{{ home_url('/contact') }}">
            @php(wp_nonce_field('oca_contact', '_wpnonce'))
            <input type="text"  name="name"  placeholder="Your Full Name"
                   class="w-full bg-navy border border-gold/20 text-cream placeholder-cream/35 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
            <input type="tel"   name="phone" placeholder="Phone Number"
                   class="w-full bg-navy border border-gold/20 text-cream placeholder-cream/35 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
            <input type="email" name="email" placeholder="Email Address (optional)"
                   class="w-full bg-navy border border-gold/20 text-cream placeholder-cream/35 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
            <select name="charge"
                    class="w-full bg-navy border border-gold/20 text-cream/80 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors">
              <option value="" disabled selected>Type of Charge</option>
              <option>DUI / DWI</option>
              <option>Drug Possession / Sales</option>
              <option>Assault &amp; Battery</option>
              <option>Domestic Violence</option>
              <option>Theft / Robbery</option>
              <option>Juvenile Offense</option>
              <option>Other</option>
            </select>
            <textarea name="message" rows="3" placeholder="Brief description of the situation..."
                      class="w-full bg-navy border border-gold/20 text-cream placeholder-cream/35 px-4 py-3 text-sm focus:outline-none focus:border-gold transition-colors resize-none"></textarea>
            <button type="submit"
                    class="w-full bg-gold hover:bg-gold-light text-navy font-bold py-4 text-sm uppercase tracking-[0.15em] transition-colors">
              Get Free Consultation →
            </button>
          </form>

          <p class="mt-4 text-center text-cream/30 text-[11px]">100% Confidential · No Obligation · Attorney-Client Privilege</p>
        </div>
      </div>

    </div>
  </div>

  {{-- Bottom diagonal --}}
  <div class="absolute bottom-0 left-0 right-0 h-20 bg-navy-mid"
       style="clip-path: polygon(0 100%, 100% 0, 100% 100%)"></div>
</section>


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


{{-- =========================================================
     HOW IT WORKS
     ========================================================= --}}
<section class="bg-navy-mid py-24 lg:py-32">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16">
      <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-3">The Process</div>
      <h2 class="font-display text-5xl lg:text-6xl text-cream font-bold">What Happens Next</h2>
      <p class="text-cream/55 mt-4 max-w-md mx-auto text-sm leading-relaxed">
        After an arrest in Orange County, time is critical. Here's how we help you through this.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach ([
        ['01', 'Call Us Immediately',  'We answer 24/7. The moment you or a loved one is arrested, reach out — early legal guidance changes outcomes.'],
        ['02', 'Free Case Evaluation', 'We assess your charges, explain your rights, and match you with the best-fit OC defense attorney for your case.'],
        ['03', 'Your Attorney Acts',   'Your lawyer begins building your defense, engaging with prosecutors, and protecting your rights from day one.'],
      ] as [$n, $title, $body])
      <div class="relative bg-navy border border-gold/20 hover:border-gold/45 p-8 pt-12 transition-all duration-300 group">
        <div class="absolute -top-5 left-7 w-10 h-10 bg-gold flex items-center justify-center">
          <span class="text-navy font-bold text-sm">{{ $n }}</span>
        </div>
        <h3 class="font-display text-2xl text-cream font-bold mb-3 group-hover:text-gold transition-colors">{{ $title }}</h3>
        <p class="text-cream/55 text-sm leading-relaxed">{{ $body }}</p>
      </div>
      @endforeach
    </div>

    <div class="text-center mt-12">
      <a href="tel:+17145550000"
         class="inline-flex items-center gap-3 bg-urgent hover:bg-urgent-dark text-white px-10 py-5 font-bold tracking-widest uppercase text-sm transition-all duration-200">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
        Start Now — Call (714) 555-0000
      </a>
    </div>
  </div>
</section>


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


{{-- =========================================================
     URGENT CTA BANNER
     ========================================================= --}}
<section class="relative bg-urgent py-20 overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(154,21,21,0.8)_0%,_transparent_70%)]"></div>
  <div class="relative z-10 max-w-3xl mx-auto px-6 text-center">
    <h2 class="font-display text-5xl md:text-7xl text-white font-bold mb-4">Don't Wait.</h2>
    <p class="text-white/75 text-xl mb-10 font-light leading-relaxed">
      Every hour without an attorney can cost you your case. Call now for an immediate, free consultation.
    </p>
    <a href="tel:+17145550000"
       class="inline-flex items-center gap-4 bg-white text-urgent hover:bg-cream px-12 py-6 font-display text-3xl font-bold tracking-wide transition-colors">
      <svg class="w-8 h-8 shrink-0" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
      </svg>
      (714) 555-0000
    </a>
    <p class="mt-6 text-white/40 text-xs uppercase tracking-[0.2em]">Free · Confidential · Available Now</p>
  </div>
</section>

@endsection
