{{-- =========================================================
     URGENT CTA BANNER — shared component
     Variables:
       $heading  (default: "Don't Wait.")
       $body     (default: urgency copy)
       $link     (default: tel:+17145550000)
       $linkText (default: (714) 555-0000)
     ========================================================= --}}
<section class="relative bg-urgent py-20 overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(154,21,21,0.8)_0%,_transparent_70%)]"></div>
  <div class="relative z-10 max-w-3xl mx-auto px-6 text-center">
    <h2 class="font-display text-5xl md:text-7xl text-white font-bold mb-4">{{ $heading ?? 'Don\'t Wait.' }}</h2>
    <p class="text-white/75 text-xl mb-10 font-light leading-relaxed">
      {{ $body ?? 'Every hour without an attorney can cost you your case. Call now for an immediate, free consultation.' }}
    </p>
    <a href="{{ $link ?? 'tel:+17145550000' }}"
       class="inline-flex items-center gap-4 bg-white text-urgent hover:bg-cream px-12 py-6 font-display text-3xl font-bold tracking-wide transition-colors">
      <svg class="w-8 h-8 shrink-0" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
      </svg>
      {{ $linkText ?? '(714) 555-0000' }}
    </a>
    <p class="mt-6 text-white/40 text-xs uppercase tracking-[0.2em]">Free · Confidential · Available Now</p>
  </div>
</section>
