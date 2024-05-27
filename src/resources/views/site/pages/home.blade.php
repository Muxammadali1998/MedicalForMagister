@extends('layout.home')
@section('title')
    Bosh sahifa
@endsection
@section('content')
    @include('site.sections.header')
    @include('site.sections.about')
    @include('site.sections.service')
    @include('site.sections.feature')
    @include('site.sections.team')
    @include('site.sections.appointment')
    @include('site.sections.testimonial')
@endsection

