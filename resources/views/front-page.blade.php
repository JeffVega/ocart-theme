@extends('layouts.app')

@section('content')
  @include('pages.home.hero')
  @include('pages.home.trust-bar')
  @include('pages.home.how-it-works')
  @include('pages.home.practice-preview')
  @include('pages.home.why-us')
  @include('pages.home.testimonials')
  @include('components.cta-banner', [
    'heading'  => 'Don\'t Wait.',
    'body'     => 'Every hour without an attorney can cost you your case. Call now for an immediate, free consultation.',
    'link'     => 'tel:+17145550000',
    'linkText' => '(714) 555-0000',
  ])
@endsection
