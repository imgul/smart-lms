@extends('front.layouts.master')

@section('title', 'Not Found - Smart LMS')

@section('content')
    <section class="no-page layout-pt-lg layout-pb-lg bg-beige-1">
        <div class="container">
            <div class="row y-gap-50 justify-between items-center">
                <div class="col-lg-6">
                    <div class="no-page__img">
                        <img src="img/404/1.svg" alt="image">
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="no-page__content">
                        <h1 class="no-page__main text-dark-1">
                            40<span class="text-purple-1">4</span>
                        </h1>
                        <h2 class="text-35 lh-12 mt-5">Oops! It looks like you're lost.</h2>
                        <div class="mt-10">The page you're looking for isn't available. Try to search again<br> or
                            use the go to.</div>
                        <button class="button -md -purple-1 text-white mt-20"><a href="{{ route('front.home') }}">Go Back To
                                Homepage</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
