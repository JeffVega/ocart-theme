{{--
  Template Name: FAQ
--}}

@extends('layouts.app')

@section('content')
  @include('pages.faq.hero')
  @include('pages.faq.accordion')
  @include('components.cta-banner', [
    'heading'       => 'Ready for Real Answers?',
    'body'          => 'Every situation is different. Speak directly with an attorney who knows Orange County law — free, no obligation.',
    'link'          => 'tel:+17145550000',
    'linkText'      => '(714) 555-0000',
    'secondaryLink' => home_url('/contact'),
    'secondaryText' => 'Ask in Writing',
  ])
@endsection
