{{-- =========================================================
     MOBILE STICKY CTA BAR
     Fixed bottom bar — visible on mobile only (hidden on lg+)
     ========================================================= --}}
<div class="fixed bottom-0 left-0 right-0 z-40 lg:hidden">
  <a href="{{ $phoneTel }}"
     class="flex items-center justify-center gap-3 bg-urgent hover:bg-urgent-dark text-white w-full py-4 font-bold text-base tracking-widest uppercase transition-colors animate-glow-pulse">
    <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
      <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
    </svg>
    Call Now Free — {{ $phoneDisplay }}
  </a>
</div>
