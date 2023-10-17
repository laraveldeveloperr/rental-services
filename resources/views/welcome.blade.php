@extends('layouts.app')
@section('content')
    @include('layouts.partials.slider', ['slides' => $slides])
    @include('layouts.partials.search')
    @include('layouts.partials.about-us-section')
    @include('layouts.partials.services')
    @include('layouts.partials.banner1')
    @include('layouts.partials.offers')
    @include('layouts.partials.comments-for-site')
    @include('layouts.partials.members')
    @include('layouts.partials.banner2')
    @include('layouts.partials.blogs')
@endsection