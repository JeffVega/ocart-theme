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
