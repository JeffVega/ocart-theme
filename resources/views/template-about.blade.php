{{--
  Template Name: About Us
--}}

@extends('layouts.app')

@section('content')
  @include('pages.about.hero')
  @include('pages.about.mission')
  @include('pages.about.how-we-work')
  @include('pages.about.values')
  @include('components.cta-banner', [
    'heading'  => 'Need Help Now?',
    'body'     => 'We\'re standing by 24/7. A real person will answer your call.',
    'link'     => 'tel:+17145550000',
    'linkText' => '(714) 555-0000',
  ])
@endsection
