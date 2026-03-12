{{--
  Template Name: About Us
--}}

@extends('layouts.app')

@section('content')
  @include('pages.about.hero')
  <div class="section-divider"></div>
  @include('pages.about.mission')
  <div class="section-divider"></div>
  @include('pages.about.how-we-work')
  <div class="section-divider"></div>
  @include('pages.about.values')
  @include('components.cta-banner', [
    'heading'       => 'Need Help Now?',
    'body'          => 'We\'re standing by 24/7. A real person answers every call — not a machine.',
    'link'          => $phoneTel,
    'linkText'      => $phoneDisplay,
    'secondaryLink' => home_url('/contact'),
    'secondaryText' => 'Prefer to Write? Send a Message',
  ])
@endsection
