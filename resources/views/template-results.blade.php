{{--
  Template Name: Results & Testimonials
--}}

@extends('layouts.app')

@section('content')
  @include('pages.results.hero')
  @include('pages.results.stats-bar')
  @include('pages.results.case-results')
  @include('pages.results.testimonials')
  @include('components.cta-banner', [
    'heading'  => 'Your Result is Next.',
    'body'     => 'Call now for a free, confidential case evaluation.',
    'link'     => 'tel:+17145550000',
    'linkText' => '(714) 555-0000',
  ])
@endsection
