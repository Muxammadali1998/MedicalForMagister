@extends('layout.home')
@section('title')
    "Biz haqimizda"
@endsection

@section('content')
    @include('site.sections.pageHeader')
    @include('site.sections.about')
    @include('site.sections.feature')
    @include('site.sections.team')
@endsection
