@extends('layouts.app')

@section('content')
    @include('components.header')
    @include('components.hero')
    @include('components.about')
    @include('components.advantages')
    @include('components.process')
    @include('components.works')
    @include('components.prices')
    @include('components.reviews')
    @include('components.contacts')
    @include('components.map')
    @include('components.footer')
    @include('components.back-to-top')
    @include('components.success-popup')
@endsection
