@extends('layouts.app')

@section('content')
  @include('pages.blog.hero')

  <section class="bg-navy-mid py-20 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

      @if (! have_posts())
        <div class="max-w-xl mx-auto text-center py-16">
          <div class="text-gold font-display text-6xl mb-4">?</div>
          <h2 class="font-display text-3xl text-cream font-bold mb-3">No Posts Found</h2>
          <p class="text-cream/55 text-sm mb-6">Nothing here yet — check back soon or search for what you need.</p>
          {!! get_search_form(false) !!}
        </div>
      @endif

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @while(have_posts())
          @php
            the_post();
            $contentTemplate = 'partials.content-' . get_post_type();
          @endphp
          @includeFirst([$contentTemplate, 'partials.content'])
        @endwhile
      </div>

      {{-- Pagination --}}
      @php
        $nav = get_the_posts_navigation([
          'prev_text' => '← Newer Posts',
          'next_text' => 'Older Posts →',
          'screen_reader_text' => ' ',
        ]);
      @endphp

      @if($nav)
        <div class="mt-16 flex justify-center">
          <div class="blog-pagination">
            {!! $nav !!}
          </div>
        </div>
      @endif

    </div>
  </section>

  @include('components.cta-banner', [
    'heading'  => 'Need Legal Help?',
    'body'     => 'Reading about it is a start. Talking to an attorney is the next step — free and confidential.',
    'link'     => $phoneTel,
    'linkText' => $phoneDisplay,
  ])
@endsection
