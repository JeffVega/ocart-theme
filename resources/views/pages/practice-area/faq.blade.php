{{-- Practice Area: FAQ Accordion (CSS-only via details/summary) --}}
<div id="faq">

  {{-- Section label --}}
  <div class="flex items-center gap-4 mb-10">
    <span class="text-gold/40 font-display text-xs font-bold uppercase tracking-[0.25em]">FAQ</span>
    <div class="h-px flex-1 bg-gold/15"></div>
  </div>

  <h2 class="font-display text-3xl lg:text-4xl text-cream font-bold mb-3">
    Common Questions
  </h2>
  <p class="text-cream/50 text-sm mb-10 max-w-xl">
    Answers to the questions we hear most often about {{ strtolower($area['category']) }} cases in Orange County.
  </p>

  <div class="space-y-2 practice-area-faq">
    @foreach ($area['faqs'] as $i => $faq)
    <details class="group bg-navy-mid border border-gold/10 hover:border-gold/25 transition-colors duration-200">
      <summary class="flex items-center justify-between gap-4 px-6 py-5 cursor-pointer list-none select-none">
        <div class="flex items-start gap-4">
          <span class="font-display font-bold text-gold/30 text-sm shrink-0 pt-0.5">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
          <span class="font-display font-bold text-cream group-open:text-gold text-base lg:text-lg leading-snug transition-colors duration-200">
            {{ $faq['q'] }}
          </span>
        </div>
        {{-- Chevron --}}
        <svg class="w-4 h-4 text-gold/40 group-open:text-gold shrink-0 transition-transform duration-300 group-open:rotate-180"
             fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
      </summary>

      <div class="px-6 pb-6 pt-0">
        <div class="pl-9 border-t border-gold/10 pt-4">
          <p class="text-cream/60 text-sm leading-relaxed">{{ $faq['a'] }}</p>
        </div>
      </div>
    </details>
    @endforeach
  </div>

  {{-- More questions prompt --}}
  <div class="mt-8 flex items-center gap-4 text-cream/30 text-sm">
    <span class="h-px flex-1 bg-gold/10"></span>
    <span>Have a question not covered here?</span>
    <a href="{{ home_url('/contact') }}" class="text-gold hover:text-gold-light text-sm font-bold uppercase tracking-wider transition-colors">Ask an attorney →</a>
    <span class="h-px flex-1 bg-gold/10"></span>
  </div>

</div>
