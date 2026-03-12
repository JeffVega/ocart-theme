@extends('layouts.app')

@section('content')
  @include('pages.home.hero')
  @include('pages.home.trust-bar')
  <div class="section-divider"></div>
  @include('pages.home.how-it-works')
  <div class="section-divider"></div>
  @include('pages.home.practice-preview')
  <div class="section-divider"></div>
  @include('pages.home.why-us')
  <div class="section-divider"></div>
  @include('pages.home.testimonials')
  @include('components.cta-banner', [
    'heading'       => 'Don\'t Wait.',
    'body'          => 'Every hour without an attorney can cost you your case. Call now — a real lawyer answers 24/7.',
    'link'          => 'tel:+17145550000',
    'linkText'      => '(714) 555-0000',
    'secondaryLink' => home_url('/contact'),
    'secondaryText' => 'Send a Message',
  ])
@endsection
