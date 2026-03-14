{{-- Practice Area: Defense Strategies --}}
<div id="defense">

  {{-- Section label --}}
  <div class="flex items-center gap-4 mb-10">
    <span class="text-gold/40 font-display text-xs font-bold uppercase tracking-[0.25em]">Defense</span>
    <div class="h-px flex-1 bg-gold/15"></div>
  </div>

  <h2 class="font-display text-3xl lg:text-4xl text-cream font-bold mb-3">
    How We Fight for You
  </h2>
  <p class="text-cream/50 text-sm mb-12 max-w-xl">
    Every defense is built on the specific facts of your case. Below are the most effective strategies we employ in {{ $area['category'] }} matters.
  </p>

  {{-- Strategy cards with connecting vertical line --}}
  <div class="relative">

    {{-- Vertical connector line (desktop) --}}
    <div class="absolute left-[19px] top-6 bottom-6 w-px bg-gradient-to-b from-gold/40 via-gold/20 to-transparent hidden sm:block"></div>

    <div class="space-y-4">
      @foreach ($area['defenses'] as $strategy)
      <div class="group relative pl-0 sm:pl-14">

        {{-- Number node --}}
        <div class="hidden sm:flex absolute left-0 top-5 w-10 h-10 items-center justify-center bg-navy border border-gold/30 group-hover:border-gold group-hover:bg-navy-mid transition-colors duration-300 z-10">
          <span class="font-display font-bold text-gold/60 group-hover:text-gold text-xs transition-colors duration-300">
            {{ $strategy['num'] }}
          </span>
        </div>

        {{-- Card --}}
        <div class="bg-navy-mid border border-gold/10 group-hover:border-gold/30 transition-colors duration-300 p-6">
          <div class="flex items-start gap-4">

            {{-- Mobile number --}}
            <span class="sm:hidden font-display font-bold text-gold/40 text-sm shrink-0 pt-0.5">{{ $strategy['num'] }}</span>

            <div class="flex-1">
              <h3 class="font-display font-bold text-cream group-hover:text-gold transition-colors duration-300 text-lg mb-2">
                {{ $strategy['title'] }}
              </h3>
              <p class="text-cream/55 text-sm leading-relaxed">{{ $strategy['body'] }}</p>
            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>
  </div>

  {{-- CTA pull quote --}}
  <div class="mt-12 bg-navy-light border border-gold/20 p-7 relative overflow-hidden">
    <div class="absolute top-0 right-0 font-display font-bold text-gold/[0.05] leading-none select-none pointer-events-none"
         style="font-size: 8rem;">?</div>
    <div class="relative z-10">
      <p class="font-display text-xl text-cream/80 italic mb-4 leading-snug">
        "Not every defense is the same. The right strategy depends on the specific facts of your arrest, the evidence available, and the court handling your case."
      </p>
      <a href="{{ $phoneTel }}"
         class="inline-flex items-center gap-2 text-gold hover:text-gold-light text-sm font-bold uppercase tracking-widest transition-colors">
        Discuss your case →
      </a>
    </div>
  </div>

</div>
