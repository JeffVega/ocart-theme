@php
  $isFeatured = $isFeatured ?? false;
  $readTime = max(1, (int) ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 220));
  $excerpt = wp_trim_words(get_the_excerpt(), $isFeatured ? 34 : 18, '...');
  $articleClasses = $isFeatured
    ? 'blog-card blog-card--featured group bg-navy border border-gold/20 hover:border-gold/45 flex flex-col transition-colors'
    : 'blog-card group bg-navy border border-gold/20 hover:border-gold/45 flex flex-col transition-colors';
@endphp

<article @php(post_class($articleClasses))>
  @if(has_post_thumbnail())
    <a href="{{ get_permalink() }}" class="blog-card-media block overflow-hidden aspect-video shrink-0">
      <img src="{{ get_the_post_thumbnail_url(null, 'medium_large') }}"
           alt="{{ get_the_title() }}"
           class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
    </a>
  @else
    <a href="{{ get_permalink() }}" class="blog-card-media block aspect-video bg-navy-light flex items-center justify-center shrink-0">
      <span class="text-gold/20 font-display text-5xl font-bold">OC</span>
    </a>
  @endif

  <div class="blog-card-body p-7 flex flex-col flex-1">
    <div class="blog-card-meta-row">
      <span class="blog-card-readtime">{{ $readTime }} min read</span>
    </div>

    <h2 class="blog-card-title font-display text-2xl text-cream font-bold leading-snug mb-3 group-hover:text-gold transition-colors">
      <a href="{{ get_permalink() }}">{!! $title !!}</a>
    </h2>

    <div class="blog-card-excerpt text-sm leading-relaxed flex-1 mb-5">
      {{ $excerpt }}
    </div>

    <div class="blog-card-footer flex items-center justify-between border-t border-gold/15 pt-4 mt-auto">
      <time class="blog-card-date text-xs" datetime="{{ get_post_time('c', true) }}">
        {{ get_the_date() }}
      </time>
      <a href="{{ get_permalink() }}"
         class="blog-card-link text-gold text-[11px] uppercase tracking-[0.15em] font-bold hover:text-gold-light transition-colors">
        Read More ->
      </a>
    </div>
  </div>
</article>
