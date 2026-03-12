<article @php(post_class('group bg-navy border border-gold/20 hover:border-gold/45 flex flex-col transition-colors'))>

  {{-- Featured image --}}
  @if(has_post_thumbnail())
    <a href="{{ get_permalink() }}" class="block overflow-hidden aspect-video shrink-0">
      <img src="{{ get_the_post_thumbnail_url(null, 'medium_large') }}"
           alt="{{ get_the_title() }}"
           class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
    </a>
  @else
    <a href="{{ get_permalink() }}" class="block aspect-video bg-navy-light flex items-center justify-center shrink-0">
      <span class="text-gold/20 font-display text-5xl font-bold">OC</span>
    </a>
  @endif

  <div class="p-7 flex flex-col flex-1">

    {{-- Category --}}
    @php($category = get_the_category())
    @if($category)
      <span class="inline-block bg-gold/10 border border-gold/25 text-gold text-[10px] uppercase tracking-[0.15em] px-2 py-1 mb-4 self-start">
        {{ $category[0]->name }}
      </span>
    @endif

    {{-- Title --}}
    <h2 class="font-display text-2xl text-cream font-bold leading-snug mb-3 group-hover:text-gold transition-colors">
      <a href="{{ get_permalink() }}">{!! $title !!}</a>
    </h2>

    {{-- Excerpt --}}
    <div class="text-cream/55 text-sm leading-relaxed flex-1 mb-5">
      @php(the_excerpt())
    </div>

    {{-- Meta + read more --}}
    <div class="flex items-center justify-between border-t border-gold/15 pt-4 mt-auto">
      <time class="text-cream/35 text-xs" datetime="{{ get_post_time('c', true) }}">
        {{ get_the_date() }}
      </time>
      <a href="{{ get_permalink() }}"
         class="text-gold text-[11px] uppercase tracking-[0.15em] font-bold hover:text-gold-light transition-colors">
        Read More →
      </a>
    </div>

  </div>
</article>
