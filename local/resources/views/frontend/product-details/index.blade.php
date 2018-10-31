@extends('frontend.master')
@section('title')
    Công ty Lavapo
@stop
@section('description')
    Công ty Lavapo
@stop
@section('keyword')

@stop
@section('url-og')

@stop
@section('image-og')

@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.product-details.banner-title')
@stop
@section('container')
    {{--<div class="wow fadeInUp">hello</div>--}}
    @include('frontend.product-details.pd_1')
    @include('frontend.product-details.pd_2')
    {{--@include('frontend.products.p_2')--}}
    {{--@include('frontend.home.h_3')--}}
@stop

@section('jv-scripts')
    <script>
        $(document).ready(function () {

            $('#owl-project').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });

        });
    </script>
@stop
