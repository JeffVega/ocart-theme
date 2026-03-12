{{--
  Template Name: Results & Testimonials
--}}

@extends('layouts.app')

@section('content')
  @include('pages.results.hero')
  @include('pages.results.stats-bar')
  <div class="section-divider"></div>
  @include('pages.results.case-results')
  <div class="section-divider"></div>
  @include('pages.results.testimonials')
  @include('components.cta-banner', [
    'heading'       => 'Your Result is Next.',
    'body'          => 'These cases were won because someone called in time. Don\'t wait — your free consultation is one call away.',
    'link'          => 'tel:+17145550000',
    'linkText'      => '(714) 555-0000',
    'secondaryLink' => home_url('/contact'),
    'secondaryText' => 'Request a Callback',
  ])
@endsection
