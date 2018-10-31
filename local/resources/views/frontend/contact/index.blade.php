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
    @include('frontend.common.banner-title')
@stop
@section('container')
    {{--<div class="wow fadeInUp">hello</div>--}}
    @include('frontend.contact.c_1')
    @include('frontend.common.map-address')
    {{--@include('frontend.home.h_2')--}}
    {{--@include('frontend.home.h_3')--}}
@stop
