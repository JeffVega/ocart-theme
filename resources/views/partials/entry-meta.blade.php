<div class="flex flex-wrap items-center gap-4 text-cream/45 text-xs">
  <time datetime="{{ get_post_time('c', true) }}" class="flex items-center gap-1.5">
    <svg class="w-3.5 h-3.5 text-gold/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
    </svg>
    {{ get_the_date() }}
  </time>

  <span class="flex items-center gap-1.5">
    <svg class="w-3.5 h-3.5 text-gold/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
    </svg>
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}"
       class="hover:text-gold transition-colors">
      {{ get_the_author() }}
    </a>
  </span>

  @php($category = get_the_category())
  @if($category)
    <span class="flex items-center gap-1.5">
      <svg class="w-3.5 h-3.5 text-gold/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
      </svg>
      <a href="{{ get_category_link($category[0]->term_id) }}"
         class="hover:text-gold transition-colors">
        {{ $category[0]->name }}
      </a>
    </span>
  @endif
</div>
