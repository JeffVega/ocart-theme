<div class="py-12 lg:py-16">
  <div class="max-w-5xl mx-auto px-6 lg:px-8">
    <div class="bg-navy-light border border-gold/15 px-8 py-10 lg:px-14 lg:py-14 post-content">
      @php(the_content())

      @if ($pagination())
        <nav class="page-nav mt-10" aria-label="Page">
          {!! $pagination !!}
        </nav>
      @endif
    </div>
  </div>
</div>
