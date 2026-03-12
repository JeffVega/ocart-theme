<article @php(post_class(''))>

  {{-- Post hero --}}
  <div class="relative bg-navy pt-36 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_80%_30%,_#162852_0%,_transparent_65%)]"></div>
    <div class="absolute left-0 inset-y-0 w-[3px] bg-gradient-to-b from-transparent via-gold to-transparent opacity-40"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8">

      {{-- Category + breadcrumb --}}
      <div class="flex flex-wrap items-center gap-3 mb-6">
        <a href="{{ home_url('/blog') }}"
           class="text-cream/40 text-[11px] uppercase tracking-[0.15em] hover:text-gold transition-colors">
          ← Legal Resources
        </a>
        @php($category = get_the_category())
        @if($category)
          <span class="text-gold/30">|</span>
          <a href="{{ get_category_link($category[0]->term_id) }}"
             class="inline-block bg-gold/10 border border-gold/25 text-gold text-[10px] uppercase tracking-[0.15em] px-2 py-1 hover:bg-gold/20 transition-colors">
            {{ $category[0]->name }}
          </a>
        @endif
      </div>

      <h1 class="font-display text-4xl md:text-6xl text-cream font-bold leading-tight mb-6">
        {!! $title !!}
      </h1>

      @include('partials.entry-meta')
    </div>
  </div>

  {{-- Featured image --}}
  @if(has_post_thumbnail())
    <div class="bg-navy-mid">
      <div class="max-w-4xl mx-auto px-6 lg:px-8">
        <div class="aspect-video overflow-hidden border border-gold/15">
          <img src="{{ get_the_post_thumbnail_url(null, 'large') }}"
               alt="{{ get_the_title() }}"
               class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  @endif

  {{-- Post content --}}
  <div class="bg-navy-mid py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

        {{-- Main content --}}
        <div class="lg:col-span-8">
          <div class="post-content text-cream/80 leading-relaxed">
            @php(the_content())
          </div>

          {{-- Page pagination (multi-page posts) --}}
          @if($pagination())
            <nav class="mt-10 pt-8 border-t border-gold/15" aria-label="Page">
              <div class="text-cream/40 text-[11px] uppercase tracking-[0.15em] mb-3">Pages</div>
              {!! $pagination !!}
            </nav>
          @endif

          {{-- Tags --}}
          @php($tags = get_the_tags())
          @if($tags)
            <div class="mt-10 pt-8 border-t border-gold/15">
              <div class="text-cream/40 text-[11px] uppercase tracking-[0.15em] mb-3">Topics</div>
              <div class="flex flex-wrap gap-2">
                @foreach($tags as $tag)
                  <a href="{{ get_tag_link($tag->term_id) }}"
                     class="bg-gold/10 border border-gold/25 text-gold/80 hover:text-gold hover:border-gold text-[11px] uppercase tracking-[0.12em] px-3 py-1.5 transition-colors">
                    {{ $tag->name }}
                  </a>
                @endforeach
              </div>
            </div>
          @endif

          {{-- Post navigation --}}
          @php
            $prev = get_previous_post();
            $next = get_next_post();
          @endphp
          @if($prev || $next)
            <nav class="mt-10 pt-8 border-t border-gold/15 grid grid-cols-2 gap-4" aria-label="Posts">
              @if($prev)
                <a href="{{ get_permalink($prev) }}"
                   class="group bg-navy border border-gold/20 hover:border-gold/45 p-5 transition-colors text-left">
                  <div class="text-cream/35 text-[10px] uppercase tracking-[0.15em] mb-2">← Previous</div>
                  <div class="font-display text-base text-cream font-bold group-hover:text-gold transition-colors leading-snug">
                    {{ get_the_title($prev) }}
                  </div>
                </a>
              @else
                <div></div>
              @endif
              @if($next)
                <a href="{{ get_permalink($next) }}"
                   class="group bg-navy border border-gold/20 hover:border-gold/45 p-5 transition-colors text-right">
                  <div class="text-cream/35 text-[10px] uppercase tracking-[0.15em] mb-2">Next →</div>
                  <div class="font-display text-base text-cream font-bold group-hover:text-gold transition-colors leading-snug">
                    {{ get_the_title($next) }}
                  </div>
                </a>
              @endif
            </nav>
          @endif

          {{-- Comments --}}
          @php(comments_template())
        </div>

        {{-- Sidebar --}}
        <aside class="lg:col-span-4 space-y-5">

          {{-- CTA card --}}
          <div class="relative bg-urgent p-7 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(154,21,21,0.5)_0%,_transparent_60%)]"></div>
            <div class="relative z-10">
              <div class="text-white/60 text-[10px] uppercase tracking-[0.2em] font-bold mb-2">Arrested?</div>
              <p class="text-white font-display text-xl font-bold mb-4 leading-tight">Get a Free Case Evaluation Now</p>
              <a href="tel:+17145550000"
                 class="flex items-center gap-2 text-white font-bold text-lg hover:text-white/80 transition-colors">
                <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
                (714) 555-0000
              </a>
              <div class="mt-3 text-white/50 text-[11px]">Free · 24/7 · Confidential</div>
            </div>
          </div>

          {{-- Practice areas quick links --}}
          <div class="bg-navy border border-gold/20 p-6">
            <h3 class="text-gold font-display text-base font-bold uppercase tracking-[0.12em] mb-5">Practice Areas</h3>
            <ul class="space-y-2">
              @foreach([
                ['DUI / DWI',         '/practice-areas#dui'],
                ['Drug Crimes',       '/practice-areas#drug-crimes'],
                ['Assault & Battery', '/practice-areas#assault'],
                ['Domestic Violence', '/practice-areas#domestic-violence'],
                ['Theft Crimes',      '/practice-areas#theft'],
                ['Juvenile Defense',  '/practice-areas#juvenile'],
              ] as [$label, $url])
              <li>
                <a href="{{ home_url($url) }}"
                   class="flex items-center gap-2 text-cream/55 hover:text-gold transition-colors text-sm group">
                  <span class="w-3 h-px bg-gold/30 group-hover:bg-gold group-hover:w-5 transition-all duration-200 shrink-0"></span>
                  {{ $label }}
                </a>
              </li>
              @endforeach
            </ul>
          </div>

          {{-- Recent posts --}}
          @php
            $recent = get_posts(['numberposts' => 4, 'exclude' => [get_the_ID()]]);
          @endphp
          @if($recent)
            <div class="bg-navy border border-gold/20 p-6">
              <h3 class="text-gold font-display text-base font-bold uppercase tracking-[0.12em] mb-5">More Articles</h3>
              <ul class="space-y-4">
                @foreach($recent as $post)
                  @php(setup_postdata($post))
                  <li class="border-b border-gold/10 pb-4 last:border-0 last:pb-0">
                    <a href="{{ get_permalink($post) }}"
                       class="text-cream/70 hover:text-gold transition-colors text-sm leading-snug font-medium">
                      {{ get_the_title($post) }}
                    </a>
                    <div class="text-cream/30 text-[11px] mt-1">{{ get_the_date('M j, Y', $post) }}</div>
                  </li>
                @endforeach
                @php(wp_reset_postdata())
              </ul>
            </div>
          @endif

        </aside>
      </div>
    </div>
  </div>

</article>
