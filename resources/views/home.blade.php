@extends('layouts.app')

@section('title', 'Portfolio | Muhammad Nazril')

@section('content')
    @include('components.hero')

    @include('components.about')

    @include('components.projects-list')
@endsection