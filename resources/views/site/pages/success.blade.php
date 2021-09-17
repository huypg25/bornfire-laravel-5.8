@extends('site.app')
@section('title', 'Order Completed')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/ui.css') }}" />

    <style>
        header {
            background-repeat: no-repeat;
            background-image: none;
            height: auto;
            background-color: grey ;
            max-height: none;
        }

    </style>
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Order Completed</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <main class="col-sm-12">
                    <p class="alert alert-success">Your order placed successfully .</p></main>
            </div>
        </div>
    </section>
@stop
