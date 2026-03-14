<div class="bg-navy-mid border-b border-gold/20 py-14 lg:py-20">
  <div class="max-w-5xl mx-auto px-6 lg:px-8">

    {{-- Breadcrumbs --}}
    <nav class="flex items-center gap-2 text-xs text-cream/40 mb-5 uppercase tracking-widest" aria-label="Breadcrumb">
      <a href="{{ home_url('/') }}" class="hover:text-gold transition-colors">Home</a>
      <span class="text-gold/40">/</span>
      <span class="text-cream/60">{{ get_the_title() }}</span>
    </nav>

    <h1 class="font-display text-3xl lg:text-5xl font-bold text-cream leading-tight">
      {!! $title !!}
    </h1>

  </div>
</div>
