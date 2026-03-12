{{-- =========================================================
     URGENT CTA BANNER — shared component
     Variables:
       $heading       (default: "Don't Wait.")
       $body          (default: urgency copy)
       $link          (default: tel:+17145550000)
       $linkText      (default: (714) 555-0000)
       $secondaryLink (optional: URL for a second action button)
       $secondaryText (optional: label for the second action button)
     ========================================================= --}}
<section class="relative bg-urgent py-20 overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(154,21,21,0.8)_0%,_transparent_70%)]"></div>
  <div class="relative z-10 max-w-3xl mx-auto px-6 text-center">
    <h2 class="font-display text-5xl md:text-7xl text-white font-bold mb-4">{{ $heading ?? 'Don\'t Wait.' }}</h2>
    <p class="text-white/75 text-xl mb-10 font-light leading-relaxed">
      {{ $body ?? 'Every hour without an attorney can cost you your case. Call now for an immediate, free consultation.' }}
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <a href="{{ $link ?? 'tel:+17145550000' }}"
         class="inline-flex items-center gap-4 bg-white text-urgent hover:bg-cream px-10 py-5 font-display text-2xl md:text-3xl font-bold tracking-wide transition-colors">
        <svg class="w-7 h-7 shrink-0" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
        {{ $linkText ?? '(714) 555-0000' }}
      </a>

      @if (!empty($secondaryLink))
        <a href="{{ $secondaryLink }}"
           class="inline-flex items-center gap-2 border-2 border-white/60 text-white hover:border-white hover:bg-white/10 px-8 py-5 font-bold text-sm tracking-widest uppercase transition-all duration-200">
          {{ $secondaryText ?? 'Send a Message' }}
        </a>
      @endif
    </div>

    <p class="mt-6 text-white/40 text-xs uppercase tracking-[0.2em]">Free · Confidential · Available Now</p>
  </div>
</section>
