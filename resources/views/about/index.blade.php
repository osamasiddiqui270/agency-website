@extends('layout.app')

@section('content')
   @include('about.section.page-banner')
   @include('about.section.about-area')
   @include('about.section.service-area')
   @include('about.section.fancy-text')
   @include('about.section.team-area')
   @include('about.section.testimonial-area')
   @include('about.section.partner-area')

@endsection
