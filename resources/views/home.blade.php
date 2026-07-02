@extends('layouts.app')

@section('title', 'Bull In Here')

@section('content')
    @include('components.hero')

    @include('components.about')

    @include('components.projects-list')
@endsection