@extends('layouts.home')

@section('title', 'TVC Trading | Trading Platform')

@section('description', 'Explore the markets, discover trading opportunities, and take the next step in your trading journey.')

@section('content')

@include('partials.home-slider')

@include('partials.home-categories')

@include('partials.home-new-arrivals')

@include('partials.home-brands')

@include('partials.home-best-sellers')

@include('partials.home-special-offers')

@include('partials.home-bottom-nav')

    {{-- Section homepage lainnya --}}
@endsection