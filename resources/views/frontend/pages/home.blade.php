@extends('frontend.layouts.main')

@section('title', 'home page')

@section('styles')
    <style>
        .text{
            color: blue;
        }
    </style>
@endsection

@section('content')
    <div class="container my-lg-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Home Page</h1>
                <p>This is home page</p>
                <p class="text">Home page is the first page that users see when they visit a website. It
                    is the main entry point for users and is often the most visited page on a
                    website.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.text').css('color', 'red');
        })
    </script>
@endsection