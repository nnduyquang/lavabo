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
    @include('frontend.blogs.banner-title')
@stop
@section('container')
    {{--<div class="wow fadeInUp">hello</div>--}}
    {{--@include('frontend.blogs.b_1')--}}
    @include('frontend.blogs.p_2')
    {{--@include('frontend.home.h_3')--}}
@stop
