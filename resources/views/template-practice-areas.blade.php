{{--
  Template Name: Practice Areas
--}}

@extends('layouts.app')

@section('content')
  @include('pages.practice-areas.hero')
  @include('pages.practice-areas.areas-grid')
  @include('components.cta-banner', [
    'heading'       => 'Facing Charges?',
    'body'          => 'The right attorney at the right moment can change your outcome. Call now for a free case review.',
    'link'          => 'tel:+17145550000',
    'linkText'      => '(714) 555-0000',
    'secondaryLink' => home_url('/contact'),
    'secondaryText' => 'Submit Case Details',
  ])
@endsection
