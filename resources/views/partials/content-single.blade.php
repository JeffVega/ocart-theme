@php
  /**
   * ── Reading time ──────────────────────────────────────────────────────────
   * Source: Brysbaert, M. (2019). How many words do we read per minute?
   * A review and meta-analysis of reading rate. Journal of Memory and Language.
   * Average silent adult reading speed: 238 WPM.
   */
  $rawContent  = get_the_content();
  $wordCount   = str_word_count(strip_tags($rawContent));
  $readingMins = max(1, (int) ceil($wordCount / 238));

  /**
   * ── Related posts (same category first, fallback to recent) ──────────────
   * Source: Chartbeat (2014) — users who reach 50% scroll depth have
   * 3× higher return visit rate. Related content keeps them in the funnel.
   */
  $category = get_the_category();
  $catId    = $category[0]->term_id ?? 0;
  $related  = get_posts([
    'numberposts' => 3,
    'exclude'     => [get_the_ID()],
    'category'    => $catId ?: null,
  ]);
  if (count($related) < 3) {
    $related = get_posts(['numberposts' => 3, 'exclude' => [get_the_ID()]]);
  }

  $prev = get_previous_post();
  $next = get_next_post();
  $tags = get_the_tags();
@endphp

{{-- ═══════════════════════════════════════════════════════════════════════
     READING PROGRESS BAR
     Psychology: Zeigarnik Effect (Zeigarnik, 1927) — unfinished tasks
     create cognitive tension that compels completion. A visible progress
     bar converts passive scrolling into an active goal.
     Source: Zeigarnik, B. (1927). Über das Behalten von erledigten und
     unerledigten Handlungen. Psychologische Forschung, 9, 1–85.
     ═══════════════════════════════════════════════════════════════════════ --}}
<div id="reading-progress-wrap"
     class="fixed top-0 left-0 right-0 z-[60] h-[3px] bg-white/5 pointer-events-none">
  <div id="reading-progress-bar"
       class="h-full bg-gradient-to-r from-gold via-gold-light to-gold origin-left"
       style="transform: scaleX(0); transition: transform 0.1s linear;"></div>
</div>

<article class="{{ implode(' ', get_post_class('')) }}" id="article-root">

  {{-- ─────────────────────────────────────────────────────────────────────
       HERO
       Psychology: Fogg Credibility (Fogg, 2002) — trust is established in
       the first 3 seconds. Category, reading time, and date are credibility
       signals that reduce bounce before the user commits to reading.
       Source: Fogg, B.J. (2002). Persuasive Technology. Morgan Kaufmann.
       ───────────────────────────────────────────────────────────────────── --}}
  <div class="relative bg-navy pt-36 pb-20 overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_80%_30%,_#162852_0%,_transparent_65%)]"></div>
    <div class="absolute left-0 inset-y-0 w-[3px] bg-gradient-to-b from-transparent via-gold to-transparent opacity-40"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8">

      {{-- Breadcrumb + category --}}
      <div class="flex flex-wrap items-center gap-3 mb-8">
        <a href="{{ home_url('/blog') }}"
           class="text-cream/40 text-[11px] uppercase tracking-[0.15em] hover:text-gold transition-colors">
          ← Legal Resources
        </a>
        @if($category)
          <span class="text-gold/30">|</span>
          <a href="{{ get_category_link($category[0]->term_id) }}"
             class="inline-block bg-gold/10 border border-gold/25 text-gold text-[10px] uppercase tracking-[0.15em] px-3 py-1 hover:bg-gold/20 transition-colors">
            {{ $category[0]->name }}
          </a>
        @endif
      </div>

      <h1 class="font-display text-4xl md:text-6xl text-cream font-bold leading-[1.1] mb-8 max-w-3xl">
        {!! $title !!}
      </h1>

      {{-- Meta bar — credibility signals --}}
      <div class="flex flex-wrap items-center gap-5 text-cream/45 text-xs uppercase tracking-widest">
        <span>{{ get_the_date('F j, Y') }}</span>
        <span class="w-px h-3 bg-gold/30"></span>
        <span class="flex items-center gap-1.5">
          <svg class="w-3.5 h-3.5 text-gold/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          {{ $readingMins }} min read
        </span>
        <span class="w-px h-3 bg-gold/30"></span>
        <span>{{ number_format($wordCount) }} words</span>
        @if(get_the_author())
          <span class="w-px h-3 bg-gold/30"></span>
          <span>By {{ get_the_author() }}</span>
        @endif
      </div>

    </div>
  </div>

  {{-- Featured image --}}
  @if(has_post_thumbnail())
    <div class="bg-navy">
      <div class="max-w-5xl mx-auto">
        <div class="aspect-[21/9] overflow-hidden">
          <img src="{{ get_the_post_thumbnail_url(null, 'full') }}"
               alt="{{ get_the_title() }}"
               class="w-full h-full object-cover opacity-80">
        </div>
      </div>
    </div>
  @endif

  {{-- ─────────────────────────────────────────────────────────────────────
       CONTENT + SIDEBAR
       ───────────────────────────────────────────────────────────────────── --}}
  <div class="bg-navy-mid">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 xl:gap-16">

        {{-- ── MAIN CONTENT ────────────────────────────────────────────── --}}
        <div class="lg:col-span-7 xl:col-span-8 min-w-0">

          {{-- ─────────────────────────────────────────────────────────────
               KEY TAKEAWAYS BOX
               Psychology: Curiosity Gap (Loewenstein, 1994) — showing what
               the reader WILL know after finishing creates information desire
               that drives them to complete the article.
               Source: Loewenstein, G. (1994). The psychology of curiosity.
               Psychological Bulletin, 116(1), 75–98.
               ───────────────────────────────────────────────────────────── --}}
          <div id="key-takeaways"
               class="relative bg-navy border-l-2 border-gold p-6 mb-10 overflow-hidden hidden">
            <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-gold/60 to-transparent"></div>
            <div class="text-gold text-[10px] uppercase tracking-[0.25em] font-bold mb-3">
              What You'll Learn
            </div>
            <ul id="takeaways-list" class="space-y-2 text-cream/70 text-sm leading-relaxed"></ul>
          </div>

          {{-- ── Post content ──────────────────────────────────────────── --}}
          {{--
            Psychology: Cognitive Ease (Kahneman, 2011) — content that is
            visually easy to process is perceived as more credible and
            trustworthy. Line length, spacing, and hierarchy directly
            affect dwell time.
            Source: Kahneman, D. (2011). Thinking, Fast and Slow. Farrar,
            Straus and Giroux. Chapter 5: Cognitive Ease.
          --}}
          <div class="post-content" id="post-content">
            @php the_content() @endphp
          </div>

          {{-- Multi-page pagination --}}
          @if($pagination())
            <nav class="mt-10 pt-8 border-t border-gold/15" aria-label="Page">
              <div class="text-cream/40 text-[11px] uppercase tracking-[0.15em] mb-3">Pages</div>
              {!! $pagination !!}
            </nav>
          @endif

          {{-- Tags --}}
          @if($tags)
            <div class="mt-12 pt-8 border-t border-gold/15">
              <div class="text-cream/40 text-[11px] uppercase tracking-widest mb-4">Topics</div>
              <div class="flex flex-wrap gap-2">
                @foreach($tags as $tag)
                  <a href="{{ get_tag_link($tag->term_id) }}"
                     class="bg-gold/10 border border-gold/25 text-gold/80 hover:text-gold hover:border-gold
                            text-[11px] uppercase tracking-[0.12em] px-3 py-1.5 transition-colors">
                    {{ $tag->name }}
                  </a>
                @endforeach
              </div>
            </div>
          @endif

          {{-- ─────────────────────────────────────────────────────────────
               AUTHOR CARD
               Psychology: Fogg Credibility Model (2002) — for legal YMYL
               content, author expertise is a critical trust signal. Users
               who trust the author share and return at higher rates.
               ───────────────────────────────────────────────────────────── --}}
          <div class="mt-12 pt-8 border-t border-gold/15">
            <div class="flex items-start gap-5">
              @if(get_avatar(get_the_author_meta('email'), 72))
                <div class="shrink-0 w-16 h-16 overflow-hidden border border-gold/30">
                  {!! get_avatar(get_the_author_meta('email'), 72, '', '', ['class' => 'w-full h-full object-cover']) !!}
                </div>
              @endif
              <div>
                <div class="text-gold text-[10px] uppercase tracking-[0.2em] font-bold mb-1">Written by</div>
                <div class="text-cream font-display text-lg font-bold">{{ get_the_author() }}</div>
                @if(get_the_author_meta('description'))
                  <p class="text-cream/50 text-sm mt-1 leading-relaxed">{{ get_the_author_meta('description') }}</p>
                @else
                  <p class="text-cream/50 text-sm mt-1 leading-relaxed">
                    Legal content contributor at OC Arrested — Orange County, California criminal defense resource.
                  </p>
                @endif
              </div>
            </div>
          </div>

          {{-- ─────────────────────────────────────────────────────────────
               PREV / NEXT NAVIGATION — large cards
               Psychology: Commitment & Consistency (Cialdini, 1984) —
               users who have read 80%+ of an article are in a committed
               state and highly susceptible to reading the next one.
               Prominent navigation capitalizes on this window.
               Source: Cialdini, R. (1984). Influence: The Psychology of
               Persuasion. Harper Collins. Chapter 3.
               ───────────────────────────────────────────────────────────── --}}
          @if($prev || $next)
            <div class="mt-12 pt-8 border-t border-gold/15">
              <div class="text-cream/40 text-[11px] uppercase tracking-widest mb-5">Continue Reading</div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @if($prev)
                  <a href="{{ get_permalink($prev) }}"
                     class="group relative bg-navy border border-gold/20 hover:border-gold/50 p-6 transition-all duration-200 hover:bg-navy-mid">
                    <div class="text-cream/35 text-[10px] uppercase tracking-[0.15em] mb-3 flex items-center gap-2">
                      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                      </svg>
                      Previous Article
                    </div>
                    <div class="font-display text-base text-cream font-bold group-hover:text-gold transition-colors leading-snug">
                      {{ get_the_title($prev) }}
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-px bg-gold/0 group-hover:bg-gold/30 transition-colors duration-300"></div>
                  </a>
                @else
                  <div></div>
                @endif
                @if($next)
                  <a href="{{ get_permalink($next) }}"
                     class="group relative bg-navy border border-gold/20 hover:border-gold/50 p-6 transition-all duration-200 hover:bg-navy-mid text-right">
                    <div class="text-cream/35 text-[10px] uppercase tracking-[0.15em] mb-3 flex items-center justify-end gap-2">
                      Next Article
                      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                      </svg>
                    </div>
                    <div class="font-display text-base text-cream font-bold group-hover:text-gold transition-colors leading-snug">
                      {{ get_the_title($next) }}
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-px bg-gold/0 group-hover:bg-gold/30 transition-colors duration-300"></div>
                  </a>
                @endif
              </div>
            </div>
          @endif

          {{-- Comments --}}
          {{-- @php comments_template() @endphp --}}
        </div>

        {{-- ── SIDEBAR ──────────────────────────────────────────────────── --}}
        <aside class="lg:col-span-5 xl:col-span-4 space-y-5">
          <div class="sticky top-24 space-y-5">

            {{-- ─────────────────────────────────────────────────────────
                 TABLE OF CONTENTS (JS-generated)
                 Psychology: Miller's Law (Miller, 1956) — humans can hold
                 7 ± 2 chunks in working memory. A TOC pre-organizes the
                 article into labeled sections, reducing cognitive load and
                 increasing willingness to read.
                 Source: Miller, G.A. (1956). The Magical Number Seven,
                 Plus or Minus Two. Psychological Review, 63(2), 81–97.

                 Also: Nielsen Norman Group (2020) — visible content
                 structure reduces abandonment by showing value upfront.
                 ───────────────────────────────────────────────────────── --}}
            <div id="toc-container"
                 class="bg-navy border border-gold/20 p-6 hidden">
              <div class="text-gold text-[10px] uppercase tracking-[0.2em] font-bold mb-4 flex items-center gap-2">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h10"/>
                </svg>
                In This Article
              </div>
              <nav id="toc-nav" aria-label="Table of contents">
                <ol id="toc-list" class="space-y-1 text-sm"></ol>
              </nav>
              {{-- Reading progress within article --}}
              <div class="mt-5 pt-4 border-t border-gold/15">
                <div class="flex items-center justify-between text-[10px] text-cream/35 uppercase tracking-widest mb-2">
                  <span>Progress</span>
                  <span id="toc-progress-pct">0%</span>
                </div>
                <div class="h-px bg-white/5 overflow-hidden">
                  <div id="toc-progress-fill"
                       class="h-full bg-gold/60 origin-left transition-transform duration-150"
                       style="transform: scaleX(0)"></div>
                </div>
              </div>
            </div>

            {{-- Urgent CTA --}}
            <div class="relative bg-urgent p-7 overflow-hidden">
              <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(154,21,21,0.5)_0%,_transparent_60%)]"></div>
              <div class="relative z-10">
                <div class="text-white/60 text-[10px] uppercase tracking-[0.2em] font-bold mb-2">Arrested in OC?</div>
                <p class="text-white font-display text-xl font-bold mb-4 leading-tight">Get a Free Case Evaluation Now</p>
                <a href="{{ $phoneTel }}"
                   class="flex items-center gap-2 text-white font-bold text-lg hover:text-white/80 transition-colors">
                  <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                  </svg>
                  {{ $phoneDisplay }}
                </a>
                <div class="mt-3 text-white/50 text-[11px]">Free · 24/7 · Confidential</div>
              </div>
            </div>

            {{-- Practice areas --}}
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

          </div>{{-- /sticky --}}
        </aside>

      </div>
    </div>
  </div>

  {{-- ─────────────────────────────────────────────────────────────────────
       RELATED ARTICLES
       Psychology: Variable Reward / IKEA Effect — Nir Eyal (2014) Hooked
       model. Presenting 3 related articles at the exit point intercepts
       the user's intent to leave by triggering curiosity about adjacent
       content. Chartbeat (2014): users shown related content at scroll
       completion have 2.4× higher session depth.
       ───────────────────────────────────────────────────────────────────── --}}
  @if($related)
    <div class="bg-navy border-t border-gold/15 py-16 lg:py-20">
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-10">
          <div class="h-px flex-1 bg-gold/15 max-w-[3rem]"></div>
          <h2 class="font-display text-2xl text-gold font-bold uppercase tracking-[0.1em]">
            Keep Reading
          </h2>
          <div class="h-px flex-1 bg-gold/15"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          @foreach($related as $relPost)
            @php
              $relThumb    = get_the_post_thumbnail_url($relPost->ID, 'medium');
              $relCats     = get_the_category($relPost->ID);
              $relWords    = str_word_count(strip_tags($relPost->post_content));
              $relMins     = max(1, (int) ceil($relWords / 238));
            @endphp
            <a href="{{ get_permalink($relPost) }}"
               class="group bg-navy-mid border border-gold/15 hover:border-gold/40 transition-all duration-200 flex flex-col overflow-hidden">
              @if($relThumb)
                <div class="aspect-video overflow-hidden">
                  <img src="{{ $relThumb }}"
                       alt="{{ get_the_title($relPost) }}"
                       class="w-full h-full object-cover opacity-70 group-hover:opacity-90 group-hover:scale-[1.02] transition-all duration-500">
                </div>
              @else
                <div class="aspect-video bg-navy flex items-center justify-center">
                  <span class="text-gold/20 font-display text-5xl font-bold">OC</span>
                </div>
              @endif
              <div class="p-5 flex flex-col flex-1">
                @if($relCats)
                  <span class="text-gold text-[10px] uppercase tracking-[0.15em] font-bold mb-2">
                    {{ $relCats[0]->name }}
                  </span>
                @endif
                <h3 class="font-display text-lg text-cream font-bold leading-snug group-hover:text-gold transition-colors mb-3">
                  {{ get_the_title($relPost) }}
                </h3>
                <div class="mt-auto flex items-center justify-between text-cream/35 text-[11px] uppercase tracking-widest">
                  <span>{{ get_the_date('M j, Y', $relPost) }}</span>
                  <span>{{ $relMins }} min</span>
                </div>
              </div>
            </a>
          @endforeach
        </div>

        <div class="mt-10 text-center">
          <a href="{{ home_url('/blog') }}"
             class="inline-flex items-center gap-2 border border-gold/30 text-gold/70 hover:border-gold hover:text-gold
                    text-[11px] uppercase tracking-[0.2em] px-8 py-3 transition-all duration-200">
            View All Legal Resources
          </a>
        </div>
      </div>
    </div>
    @php wp_reset_postdata() @endphp
  @endif

</article>

{{-- Styles → resources/css/single.css | JS → resources/js/single.js --}}
