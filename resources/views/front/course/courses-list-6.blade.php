@extends('front.layouts.master')

@section('title', 'Courses List 6 - Smart Academy')

@section('content')
    <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">

                        <div class="breadcrumbs__item ">
                            <a href="#">Home</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="#">All courses</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="#">User Experience Design</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="#">User Interface</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-header -type-1">
        <div class="container">
            <div class="page-header__content">
                <div class="row">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">

                            <h1 class="page-header__title">User Interface Courses</h1>

                        </div>

                        <div data-anim="slide-up delay-2">

                            <p class="page-header__text">Write an introductory description of the category.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="layout-pt-md layout-pb-md">
        <div data-anim-wrap class="container">
            <div class="tabs -pills js-tabs">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-auto">
                        <h2 data-anim-child="slide-up delay-1" class="text-24 lh-12">Courses to get you started</h2>
                    </div>

                    <div class="col-auto">
                        <div class="tabs__controls d-flex justify-center x-gap-10 js-tabs-controls">

                            <div>
                                <button class="tabs__button px-20 py-8 rounded-8 js-tabs-button is-active"
                                    data-tab-target=".-tab-item-1" type="button">All</button>
                            </div>

                            <div>
                                <button class="tabs__button px-20 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-2" type="button">Trending</button>
                            </div>

                            <div>
                                <button class="tabs__button px-20 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-3" type="button">Popular</button>
                            </div>

                            <div>
                                <button class="tabs__button px-20 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-4" type="button">Fetured</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tabs__content pt-60 lg:pt-50 js-tabs-content">

                    <div class="tabs__pane -tab-item-1 is-active">
                        <div class="overflow-hidden js-section-slider" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX
                                                    Design Essential Training</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-green-1">
                                                            <span class="text-11 lh-1 uppercase fw-500 text-dark-1">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python
                                                    Bootcamp From Zero to Hero in Python</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/3.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete
                                                    Guide (2022 Edition)</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/4.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing
                                                    Course Beginner to Advanced</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/5.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography
                                                    Masterclass: A Complete Guide to Photography</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/6.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing
                                                    2021: Complete Guide To Instagram</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/7.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender
                                                    Creator: Learn 3D Modelling for Beginners</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/8.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial
                                                    Analyst Training &amp; Investing Course</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>


                            <button
                                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-2 ">
                        <div class="overflow-hidden js-section-slider" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX
                                                    Design Essential Training</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-green-1">
                                                            <span class="text-11 lh-1 uppercase fw-500 text-dark-1">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python
                                                    Bootcamp From Zero to Hero in Python</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/3.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete
                                                    Guide (2022 Edition)</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/4.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing
                                                    Course Beginner to Advanced</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/5.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography
                                                    Masterclass: A Complete Guide to Photography</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/6.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing
                                                    2021: Complete Guide To Instagram</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/7.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender
                                                    Creator: Learn 3D Modelling for Beginners</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/8.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial
                                                    Analyst Training &amp; Investing Course</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>


                            <button
                                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-3 ">
                        <div class="overflow-hidden js-section-slider" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX
                                                    Design Essential Training</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-green-1">
                                                            <span class="text-11 lh-1 uppercase fw-500 text-dark-1">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python
                                                    Bootcamp From Zero to Hero in Python</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/3.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete
                                                    Guide (2022 Edition)</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/4.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing
                                                    Course Beginner to Advanced</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/5.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography
                                                    Masterclass: A Complete Guide to Photography</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/6.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing
                                                    2021: Complete Guide To Instagram</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/7.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender
                                                    Creator: Learn 3D Modelling for Beginners</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/8.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial
                                                    Analyst Training &amp; Investing Course</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>


                            <button
                                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-4 ">
                        <div class="overflow-hidden js-section-slider" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX
                                                    Design Essential Training</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-green-1">
                                                            <span class="text-11 lh-1 uppercase fw-500 text-dark-1">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python
                                                    Bootcamp From Zero to Hero in Python</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/3.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete
                                                    Guide (2022 Edition)</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/4.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing
                                                    Course Beginner to Advanced</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/5.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography
                                                    Masterclass: A Complete Guide to Photography</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/6.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing
                                                    2021: Complete Guide To Instagram</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/7.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender
                                                    Creator: Learn 3D Modelling for Beginners</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1" src="img/coursesCards/8.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial
                                                    Analyst Training &amp; Investing Course</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png" alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>


                            <button
                                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="row y-gap-20 justify-between items-center">
                <div class="col-auto">
                    <h2 class="text-24 lh-12">Popular Instructors</h2>
                </div>

                <div class="col-auto">
                    <div class="d-flex justify-center x-gap-15 items-center">
                        <div class="col-auto">
                            <button class="d-flex items-center text-24 arrow-left-hover js-events-slider-prev">
                                <i class="icon icon-arrow-left"></i>
                            </button>
                        </div>
                        <div class="col-auto">
                            <div class="pagination -arrows js-events-slider-pagination"></div>
                        </div>
                        <div class="col-auto">
                            <button class="d-flex items-center text-24 arrow-right-hover js-events-slider-next">
                                <i class="icon icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden pt-50 lg:pt-40 js-section-slider" data-gap="30"
                data-pagination="js-events-slider-pagination" data-nav-prev="js-events-slider-prev"
                data-nav-next="js-events-slider-next" data-slider-cols="xl-5 lg-3 md-2 sm-2" data-anim-wrap>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div data-anim-child="slide-left delay-2" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image size-180 mx-auto">
                                <img class="fit-cover size-180 rounded-full" src="img/team/1.png" alt="image">
                                <div class="teamCard__socials rounded-full">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="teamCard__content text-center">
                                <div class="d-flex items-center justify-center">
                                    <div class="icon-star text-yellow-1 text-9 mr-5"></div>
                                    <div class="text-14 text-yellow-1">4.5</div>
                                </div>

                                <h4 class="teamCard__title mt-10">Floyd Miles</h4>
                                <p class="teamCard__text">President of Sales</p>

                                <div class="d-flex x-gap-15 justify-center pt-10">

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/1.svg" alt="icon">
                                        <div class="text-13 lh-12">692 Students</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/2.svg" alt="icon">
                                        <div class="text-13 lh-12">15 Course</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim-child="slide-left delay-3" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image size-180 mx-auto">
                                <img class="fit-cover size-180 rounded-full" src="img/team/2.png" alt="image">
                                <div class="teamCard__socials rounded-full">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="teamCard__content text-center">
                                <div class="d-flex items-center justify-center">
                                    <div class="icon-star text-yellow-1 text-9 mr-5"></div>
                                    <div class="text-14 text-yellow-1">4.5</div>
                                </div>

                                <h4 class="teamCard__title mt-10">Cameron Williamson</h4>
                                <p class="teamCard__text">Web Designer</p>

                                <div class="d-flex x-gap-15 justify-center pt-10">

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/1.svg" alt="icon">
                                        <div class="text-13 lh-12">692 Students</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/2.svg" alt="icon">
                                        <div class="text-13 lh-12">15 Course</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim-child="slide-left delay-4" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image size-180 mx-auto">
                                <img class="fit-cover size-180 rounded-full" src="img/team/3.png" alt="image">
                                <div class="teamCard__socials rounded-full">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="teamCard__content text-center">
                                <div class="d-flex items-center justify-center">
                                    <div class="icon-star text-yellow-1 text-9 mr-5"></div>
                                    <div class="text-14 text-yellow-1">4.5</div>
                                </div>

                                <h4 class="teamCard__title mt-10">Brooklyn Simmons</h4>
                                <p class="teamCard__text">Dog Trainer</p>

                                <div class="d-flex x-gap-15 justify-center pt-10">

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/1.svg" alt="icon">
                                        <div class="text-13 lh-12">692 Students</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/2.svg" alt="icon">
                                        <div class="text-13 lh-12">15 Course</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim-child="slide-left delay-5" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image size-180 mx-auto">
                                <img class="fit-cover size-180 rounded-full" src="img/team/4.png" alt="image">
                                <div class="teamCard__socials rounded-full">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="teamCard__content text-center">
                                <div class="d-flex items-center justify-center">
                                    <div class="icon-star text-yellow-1 text-9 mr-5"></div>
                                    <div class="text-14 text-yellow-1">4.5</div>
                                </div>

                                <h4 class="teamCard__title mt-10">Brooklyn Simmons</h4>
                                <p class="teamCard__text">Dog Trainer</p>

                                <div class="d-flex x-gap-15 justify-center pt-10">

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/1.svg" alt="icon">
                                        <div class="text-13 lh-12">692 Students</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/2.svg" alt="icon">
                                        <div class="text-13 lh-12">15 Course</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim-child="slide-left delay-6" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image size-180 mx-auto">
                                <img class="fit-cover size-180 rounded-full" src="img/team/5.png" alt="image">
                                <div class="teamCard__socials rounded-full">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="teamCard__content text-center">
                                <div class="d-flex items-center justify-center">
                                    <div class="icon-star text-yellow-1 text-9 mr-5"></div>
                                    <div class="text-14 text-yellow-1">4.5</div>
                                </div>

                                <h4 class="teamCard__title mt-10">Wade Warren</h4>
                                <p class="teamCard__text">Marketing Coordinator</p>

                                <div class="d-flex x-gap-15 justify-center pt-10">

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/1.svg" alt="icon">
                                        <div class="text-13 lh-12">692 Students</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/2.svg" alt="icon">
                                        <div class="text-13 lh-12">15 Course</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim-child="slide-left delay-7" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image size-180 mx-auto">
                                <img class="fit-cover size-180 rounded-full" src="img/team/6.png" alt="image">
                                <div class="teamCard__socials rounded-full">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="teamCard__content text-center">
                                <div class="d-flex items-center justify-center">
                                    <div class="icon-star text-yellow-1 text-9 mr-5"></div>
                                    <div class="text-14 text-yellow-1">4.5</div>
                                </div>

                                <h4 class="teamCard__title mt-10">Floyd Miles</h4>
                                <p class="teamCard__text">President of Sales</p>

                                <div class="d-flex x-gap-15 justify-center pt-10">

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/1.svg" alt="icon">
                                        <div class="text-13 lh-12">692 Students</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/2.svg" alt="icon">
                                        <div class="text-13 lh-12">15 Course</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim-child="slide-left delay-8" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image size-180 mx-auto">
                                <img class="fit-cover size-180 rounded-full" src="img/team/7.png" alt="image">
                                <div class="teamCard__socials rounded-full">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="teamCard__content text-center">
                                <div class="d-flex items-center justify-center">
                                    <div class="icon-star text-yellow-1 text-9 mr-5"></div>
                                    <div class="text-14 text-yellow-1">4.5</div>
                                </div>

                                <h4 class="teamCard__title mt-10">Cameron Williamson</h4>
                                <p class="teamCard__text">Web Designer</p>

                                <div class="d-flex x-gap-15 justify-center pt-10">

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/1.svg" alt="icon">
                                        <div class="text-13 lh-12">692 Students</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <img class="mr-8" src="img/team/icons/2.svg" alt="icon">
                                        <div class="text-13 lh-12">15 Course</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <h2 class="text-24 lh-12">Popular Instructors</h2>
                </div>
            </div>

            <div class="row x-gap-20 y-gap-20 pt-30">

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">User Experience Design</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Figma</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Graphical User Interface</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Web Design</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Adobe XD</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Sketch Software</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Prototyping</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Product Design</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Webflow</button>
                </div>

                <div class="col-auto">
                    <button class="button h-60 px-35 -purple-3 text-purple-1">Mobile App Design</button>
                </div>

            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <h2 class="text-24 lh-12">All User Interface courses</h2>
                </div>
            </div>

            <div class="row y-gap-50 pt-60">
                <div class="col-xl-3 col-lg-4 lg:d-none">
                    <div class="pr-30 lg:pr-0">

                        <div data-anim="slide-up delay-2" class="sidebar -courses">
                            <div class="sidebar__item">
                                <div class="accordion js-accordion">
                                    <div class="accordion__item js-accordion-item-active">
                                        <div class="accordion__button items-center">
                                            <h5 class="sidebar__title">Category</h5>

                                            <div class="accordion__icon">
                                                <div class="icon icon-chevron-down"></div>
                                                <div class="icon icon-chevron-up"></div>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Art</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Exercise</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Software Development</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Music</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Material Design</div>
                                                        <div class="sidebar-checkbox__count">(34)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Photography</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                </div>

                                                <div class="sidebar__more mt-15">
                                                    <a href="#"
                                                        class="text-14 fw-500 underline text-purple-1">Show more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__item">
                                <div class="accordion js-accordion">
                                    <div class="accordion__item js-accordion-item-active">
                                        <div class="accordion__button items-center">
                                            <h5 class="sidebar__title">Ratings</h5>

                                            <div class="accordion__icon">
                                                <div class="icon icon-chevron-down"></div>
                                                <div class="icon icon-chevron-up"></div>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title d-flex items-center">
                                                            <div class="d-flex x-gap-5 pr-10">
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                            </div>
                                                            4.5 &amp; up
                                                        </div>
                                                        <div class="sidebar-checkbox__count">(1991)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title d-flex items-center">
                                                            <div class="d-flex x-gap-5 pr-10">
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                            </div>
                                                            4.0 &amp; up
                                                        </div>
                                                        <div class="sidebar-checkbox__count">(200)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title d-flex items-center">
                                                            <div class="d-flex x-gap-5 pr-10">
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                            </div>
                                                            3.5 &amp; up
                                                        </div>
                                                        <div class="sidebar-checkbox__count">(300)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title d-flex items-center">
                                                            <div class="d-flex x-gap-5 pr-10">
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                            </div>
                                                            3.0 &amp; up
                                                        </div>
                                                        <div class="sidebar-checkbox__count">(500)</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__item">
                                <div class="accordion js-accordion">
                                    <div class="accordion__item js-accordion-item-active">
                                        <div class="accordion__button items-center">
                                            <h5 class="sidebar__title">Instructors</h5>

                                            <div class="accordion__icon">
                                                <div class="icon icon-chevron-down"></div>
                                                <div class="icon icon-chevron-up"></div>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Jane Cooper</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Jenny Wilson</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Robert Fox</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Jacob Jones</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Albert Flores</div>
                                                        <div class="sidebar-checkbox__count">(34)</div>
                                                    </div>

                                                </div>
                                                <div class="sidebar__more mt-15">
                                                    <a href="#"
                                                        class="text-14 fw-500 underline text-purple-1">Show more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__item">
                                <div class="accordion js-accordion">
                                    <div class="accordion__item js-accordion-item-active">
                                        <div class="accordion__button items-center">
                                            <h5 class="sidebar__title">Price</h5>

                                            <div class="accordion__icon">
                                                <div class="icon icon-chevron-down"></div>
                                                <div class="icon icon-chevron-up"></div>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio-2"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">All</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio-2"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Free</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio-2"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Paid</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__item">
                                <div class="accordion js-accordion">
                                    <div class="accordion__item js-accordion-item-active">
                                        <div class="accordion__button items-center">
                                            <h5 class="sidebar__title">Level</h5>

                                            <div class="accordion__icon">
                                                <div class="icon icon-chevron-down"></div>
                                                <div class="icon icon-chevron-up"></div>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">All Levels</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Beginner</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Intermediate</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Expert</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__item">
                                <div class="accordion js-accordion">
                                    <div class="accordion__item js-accordion-item-active">
                                        <div class="accordion__button items-center">
                                            <h5 class="sidebar__title">Languange</h5>

                                            <div class="accordion__icon">
                                                <div class="icon icon-chevron-down"></div>
                                                <div class="icon icon-chevron-up"></div>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">English</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">French</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">German</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Italian</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Turkish</div>
                                                        <div class="sidebar-checkbox__count">(34)</div>
                                                    </div>

                                                </div>
                                                <div class="sidebar__more mt-15">
                                                    <a href="#"
                                                        class="text-14 fw-500 underline text-purple-1">Show more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__item">
                                <div class="accordion js-accordion">
                                    <div class="accordion__item js-accordion-item-active">
                                        <div class="accordion__button items-center">
                                            <h5 class="sidebar__title">Duration</h5>

                                            <div class="accordion__icon">
                                                <div class="icon icon-chevron-down"></div>
                                                <div class="icon icon-chevron-up"></div>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Less than 3 hours</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">4 - 7 hours</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">8 -18 hours </div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">20 + Hours</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div data-anim="slide-up delay-3" class="col-xl-9 col-lg-8">
                    <div class="accordion js-accordion">
                        <div class="accordion__item">
                            <div class="row y-gap-20 items-center justify-between pb-30">
                                <div class="col-auto">
                                    <div class="text-14 lh-12">Showing <span class="text-dark-1 fw-500">250</span> total
                                        results</div>
                                </div>

                                <div class="col-auto">
                                    <div class="row x-gap-20 y-gap-20">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <div class="text-14 lh-12 fw-500 text-dark-1 mr-20">Sort by:</div>

                                                <div class="dropdown js-dropdown js-category-active">
                                                    <div class="dropdown__button d-flex items-center text-14 rounded-8 px-20 py-10 text-14 lh-12"
                                                        data-el-toggle=".js-category-toggle"
                                                        data-el-toggle-active=".js-category-active">
                                                        <span class="js-dropdown-title">Most Popular</span>
                                                        <i class="icon text-9 ml-40 icon-chevron-down"></i>
                                                    </div>

                                                    <div
                                                        class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-category-toggle">
                                                        <div class="text-14 y-gap-15 js-dropdown-list">

                                                            <div><a href="#"
                                                                    class="d-block js-dropdown-link">Animation</a></div>

                                                            <div><a href="#"
                                                                    class="d-block js-dropdown-link">Design</a></div>

                                                            <div><a href="#"
                                                                    class="d-block js-dropdown-link">Illustration</a>
                                                            </div>

                                                            <div><a href="#"
                                                                    class="d-block js-dropdown-link">Business</a></div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-auto d-none lg:d-block">
                                            <div class="accordion__button w-unset">
                                                <button class="button h-50 px-30 -light-7 text-purple-1">
                                                    <i class="icon-filter mr-10"></i>
                                                    Filter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion__content d-none lg:d-block">
                                <div class="sidebar -courses px-30 py-30 rounded-8 bg-light-3 mb-50">
                                    <div class="row x-gap-60 y-gap-40">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="sidebar__item">
                                                <h5 class="sidebar__title">Category</h5>
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Art</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Exercise</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Software Development</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Music</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Material Design</div>
                                                        <div class="sidebar-checkbox__count">(34)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Photography</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                </div>
                                                <div class="sidebar__more mt-15">
                                                    <a href="#"
                                                        class="text-14 fw-500 underline text-purple-1">Show more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="sidebar__item">
                                                <h5 class="sidebar__title">Ratings</h5>
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title d-flex items-center">
                                                            <div class="d-flex x-gap-5 pr-10">
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                            </div>
                                                            4.5 &amp; up
                                                        </div>
                                                        <div class="sidebar-checkbox__count">(1991)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title d-flex items-center">
                                                            <div class="d-flex x-gap-5 pr-10">
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                            </div>
                                                            4.0 &amp; up
                                                        </div>
                                                        <div class="sidebar-checkbox__count">(200)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title d-flex items-center">
                                                            <div class="d-flex x-gap-5 pr-10">
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                            </div>
                                                            3.5 &amp; up
                                                        </div>
                                                        <div class="sidebar-checkbox__count">(300)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title d-flex items-center">
                                                            <div class="d-flex x-gap-5 pr-10">
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                                <div class="icon-star text-11 text-yellow-1"></div>
                                                            </div>
                                                            3.0 &amp; up
                                                        </div>
                                                        <div class="sidebar-checkbox__count">(500)</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="sidebar__item">
                                                <h5 class="sidebar__title">Instructors</h5>
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Jane Cooper</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Jenny Wilson</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Robert Fox</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Jacob Jones</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Albert Flores</div>
                                                        <div class="sidebar-checkbox__count">(34)</div>
                                                    </div>

                                                </div>
                                                <div class="sidebar__more mt-15">
                                                    <a href="#"
                                                        class="text-14 fw-500 underline text-purple-1">Show more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="sidebar__item">
                                                <h5 class="sidebar__title">Price</h5>
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio-2"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">All</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio-2"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Free</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-radio mr-10">
                                                            <div class="radio">
                                                                <input type="radio" name="radio-2"
                                                                    checked="checked">
                                                                <div class="radio__mark">
                                                                    <div class="radio__icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Paid</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="sidebar__item">
                                                <h5 class="sidebar__title">Level</h5>
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">All Levels</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Beginner</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Intermediate</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>

                                                        <div class="sidebar-checkbox__title">Expert</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="sidebar__item">
                                                <h5 class="sidebar__title">Languange</h5>
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">English</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">French</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">German</div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Italian</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Turkish</div>
                                                        <div class="sidebar-checkbox__count">(34)</div>
                                                    </div>

                                                </div>
                                                <div class="sidebar__more mt-15">
                                                    <a href="#"
                                                        class="text-14 fw-500 underline text-purple-1">Show more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="sidebar__item">
                                                <h5 class="sidebar__title">Duration</h5>
                                                <div class="sidebar-checkbox">

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">Less than 3 hours</div>
                                                        <div class="sidebar-checkbox__count">(18)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">4 - 7 hours</div>
                                                        <div class="sidebar-checkbox__count">(12)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">8 -18 hours </div>
                                                        <div class="sidebar-checkbox__count">(23)</div>
                                                    </div>

                                                    <div class="sidebar-checkbox__item">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox">
                                                            <div class="form-checkbox__mark">
                                                                <div class="form-checkbox__icon icon-check"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sidebar-checkbox__title">20 + Hours</div>
                                                        <div class="sidebar-checkbox__count">(67)</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row y-gap-60">

                        <div class="col-12 border-bottom-light">
                            <a href="courses-single-1.html"
                                class="coursesCard -type-1 row y-gap-20 flex-row items-center">
                                <div class="col-xl-4">
                                    <div class="coursesCard__image rounded-8 relative">
                                        <img class="w-1/1 rounded-8" src="img/coursesCards/1.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX Design
                                        Essential Training</div>
                                    <div class="mt-8">Introductory course on web hosting, domain registration, and how
                                        you can easily publish and edit your website online.</div>

                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img src="img/general/avatar-1.png" alt="image">
                                                <div class="ml-10">Ali Tufan</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                                                <div class="text-14 lh-1">6 lesson</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                                                <div class="text-14 lh-1">3h 56m</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                                                <div class="text-14 lh-1">Beginner</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="line -vertical -h-120 bg-light-5"></div>
                                </div>

                                <div class="col-auto text-right">
                                    <div class="text-15 lh-1 fw-500 line-through">$179</div>
                                    <div class="text-24 lh-1 fw-500 text-dark-1 mt-10">$279</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 border-bottom-light">
                            <a href="courses-single-1.html"
                                class="coursesCard -type-1 row y-gap-20 flex-row items-center">
                                <div class="col-xl-4">
                                    <div class="coursesCard__image rounded-8 relative">
                                        <img class="w-1/1 rounded-8" src="img/coursesCards/2.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python Bootcamp From Zero
                                        to Hero in Python</div>
                                    <div class="mt-8">Introductory course on web hosting, domain registration, and how
                                        you can easily publish and edit your website online.</div>

                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img src="img/general/avatar-1.png" alt="image">
                                                <div class="ml-10">Ali Tufan</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                                                <div class="text-14 lh-1">6 lesson</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                                                <div class="text-14 lh-1">3h 56m</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                                                <div class="text-14 lh-1">Beginner</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="line -vertical -h-120 bg-light-5"></div>
                                </div>

                                <div class="col-auto text-right">
                                    <div class="text-15 lh-1 fw-500 line-through">$179</div>
                                    <div class="text-24 lh-1 fw-500 text-dark-1 mt-10">$279</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 border-bottom-light">
                            <a href="courses-single-1.html"
                                class="coursesCard -type-1 row y-gap-20 flex-row items-center">
                                <div class="col-xl-4">
                                    <div class="coursesCard__image rounded-8 relative">
                                        <img class="w-1/1 rounded-8" src="img/coursesCards/3.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete Guide (2022
                                        Edition)</div>
                                    <div class="mt-8">Introductory course on web hosting, domain registration, and how
                                        you can easily publish and edit your website online.</div>

                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img src="img/general/avatar-1.png" alt="image">
                                                <div class="ml-10">Ali Tufan</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                                                <div class="text-14 lh-1">6 lesson</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                                                <div class="text-14 lh-1">3h 56m</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                                                <div class="text-14 lh-1">Beginner</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="line -vertical -h-120 bg-light-5"></div>
                                </div>

                                <div class="col-auto text-right">
                                    <div class="text-15 lh-1 fw-500 line-through">$179</div>
                                    <div class="text-24 lh-1 fw-500 text-dark-1 mt-10">$279</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 border-bottom-light">
                            <a href="courses-single-1.html"
                                class="coursesCard -type-1 row y-gap-20 flex-row items-center">
                                <div class="col-xl-4">
                                    <div class="coursesCard__image rounded-8 relative">
                                        <img class="w-1/1 rounded-8" src="img/coursesCards/4.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing Course
                                        Beginner to Advanced</div>
                                    <div class="mt-8">Introductory course on web hosting, domain registration, and how
                                        you can easily publish and edit your website online.</div>

                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img src="img/general/avatar-1.png" alt="image">
                                                <div class="ml-10">Ali Tufan</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                                                <div class="text-14 lh-1">6 lesson</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                                                <div class="text-14 lh-1">3h 56m</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                                                <div class="text-14 lh-1">Beginner</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="line -vertical -h-120 bg-light-5"></div>
                                </div>

                                <div class="col-auto text-right">
                                    <div class="text-15 lh-1 fw-500 line-through">$179</div>
                                    <div class="text-24 lh-1 fw-500 text-dark-1 mt-10">$279</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 border-bottom-light">
                            <a href="courses-single-1.html"
                                class="coursesCard -type-1 row y-gap-20 flex-row items-center">
                                <div class="col-xl-4">
                                    <div class="coursesCard__image rounded-8 relative">
                                        <img class="w-1/1 rounded-8" src="img/coursesCards/5.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography Masterclass: A
                                        Complete Guide to Photography</div>
                                    <div class="mt-8">Introductory course on web hosting, domain registration, and how
                                        you can easily publish and edit your website online.</div>

                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img src="img/general/avatar-1.png" alt="image">
                                                <div class="ml-10">Ali Tufan</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                                                <div class="text-14 lh-1">6 lesson</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                                                <div class="text-14 lh-1">3h 56m</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                                                <div class="text-14 lh-1">Beginner</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="line -vertical -h-120 bg-light-5"></div>
                                </div>

                                <div class="col-auto text-right">
                                    <div class="text-15 lh-1 fw-500 line-through">$179</div>
                                    <div class="text-24 lh-1 fw-500 text-dark-1 mt-10">$279</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 border-bottom-light">
                            <a href="courses-single-1.html"
                                class="coursesCard -type-1 row y-gap-20 flex-row items-center">
                                <div class="col-xl-4">
                                    <div class="coursesCard__image rounded-8 relative">
                                        <img class="w-1/1 rounded-8" src="img/coursesCards/6.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing 2021: Complete
                                        Guide To Instagram Growth</div>
                                    <div class="mt-8">Introductory course on web hosting, domain registration, and how
                                        you can easily publish and edit your website online.</div>

                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img src="img/general/avatar-1.png" alt="image">
                                                <div class="ml-10">Ali Tufan</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                                                <div class="text-14 lh-1">6 lesson</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                                                <div class="text-14 lh-1">3h 56m</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                                                <div class="text-14 lh-1">Beginner</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="line -vertical -h-120 bg-light-5"></div>
                                </div>

                                <div class="col-auto text-right">
                                    <div class="text-15 lh-1 fw-500 line-through">$179</div>
                                    <div class="text-24 lh-1 fw-500 text-dark-1 mt-10">$279</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 border-bottom-light">
                            <a href="courses-single-1.html"
                                class="coursesCard -type-1 row y-gap-20 flex-row items-center">
                                <div class="col-xl-4">
                                    <div class="coursesCard__image rounded-8 relative">
                                        <img class="w-1/1 rounded-8" src="img/coursesCards/7.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender Creator: Learn 3D
                                        Modelling for Beginners</div>
                                    <div class="mt-8">Introductory course on web hosting, domain registration, and how
                                        you can easily publish and edit your website online.</div>

                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img src="img/general/avatar-1.png" alt="image">
                                                <div class="ml-10">Ali Tufan</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                                                <div class="text-14 lh-1">6 lesson</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                                                <div class="text-14 lh-1">3h 56m</div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                                                <div class="text-14 lh-1">Beginner</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="line -vertical -h-120 bg-light-5"></div>
                                </div>

                                <div class="col-auto text-right">
                                    <div class="text-15 lh-1 fw-500 line-through">$179</div>
                                    <div class="text-24 lh-1 fw-500 text-dark-1 mt-10">$279</div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="row justify-center pt-90 lg:pt-50">
                        <div class="col-auto">
                            <div class="pagination -buttons">
                                <button class="pagination__button -prev">
                                    <i class="icon icon-chevron-left"></i>
                                </button>

                                <div class="pagination__count">
                                    <a href="#">1</a>
                                    <a class="-count-is-active" href="#">2</a>
                                    <a href="#">3</a>
                                    <span>...</span>
                                    <a href="#">67</a>
                                </div>

                                <button class="pagination__button -next">
                                    <i class="icon icon-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
