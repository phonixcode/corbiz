@extends('layouts.master')

@section('title', 'Home')

@section('content')

    @include('layouts.partials.slider')

    @include('layouts.partials.features')

    @include('layouts.partials.about')

    @include('layouts.partials.statistic')

    @include('layouts.partials.service')

    @include('layouts.partials.tabs')

    @include('layouts.partials.porfolio')

    @include('layouts.partials.testimonial')

    @include('layouts.partials.client')

    @include('layouts.partials.quick-support')

    @include('layouts.partials.package')

    @include('layouts.partials.team')

    @include('layouts.partials.call-to-action')

@endsection
