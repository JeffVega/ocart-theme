{{--
  Template Name: Practice Areas
--}}

@extends('layouts.app')

@section('content')
  @include('pages.practice-areas.hero')
  @include('pages.practice-areas.areas-grid')
  @include('components.cta-banner', [
    'heading'  => 'Facing Charges?',
    'body'     => 'Don\'t wait. A free consultation could change everything.',
    'link'     => 'tel:+17145550000',
    'linkText' => '(714) 555-0000',
  ])
@endsection
