@extends('layouts.app')
@section('content')
    <!-- Carousel section -->
        @include('partials.carousel')
    <!-- End Carousel section -->

    <!-- About section -->
        @include('partials.about')
    <!-- End About section -->

    <!-- Skill section -->
        @include('partials.skill')
    <!-- End Skill section -->

    <!-- Ftc section -->
        @include('partials.ftc')
    <!-- End Ftc section -->

    <!-- Project section -->
        @include('partials.project')
    <!-- End Project section -->

    <!-- Blog section -->
        @include('partials.blog')
    <!-- End Blog section -->

    <!-- Contact section -->
        @include('partials.contact')
    <!-- End Contact section -->


@endsection
