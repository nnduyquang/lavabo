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
    @include('frontend.products.banner-title')
@stop
@section('container')
    {{--<div class="wow fadeInUp">hello</div>--}}
    @include('frontend.products.p_1')
    @include('frontend.products.p_2')
    {{--@include('frontend.home.h_3')--}}
@stop
