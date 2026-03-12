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
