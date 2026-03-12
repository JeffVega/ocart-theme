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
