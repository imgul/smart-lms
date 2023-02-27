@extends('front.layout.master')

@section('title', 'Smart LMS')

@section('content')
    <section data-anim-wrap class="mainSlider -type-1 js-mainSlider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="img/home-2/mainSlider/bg.png"></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="img/home-2/mainSlider/bg.png"></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="img/home-2/mainSlider/bg.png"></div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="mainSlider__content">
                        <h1 data-anim-child="slide-up delay-3" class="mainSlider__title text-white">
                            Learn Your Way With Educrat To <span class="text-green-1 underline">Web Design</span>
                        </h1>

                        <p data-anim-child="slide-up delay-4" class="mainSlider__text text-white">
                            More than 6.500 online courses
                        </p>

                        <div data-anim-child="slide-up delay-5" class="mainSlider__form">
                            <input type="text" placeholder="What do you want to learn today?">

                            <button class="button -md -purple-1 text-white">
                                <i class="icon icon-search mr-15"></i>
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div data-anim-child="slide-up delay-6" class="row y-gap-20 justify-center mainSlider__items">

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <img src="img/home-2/mainSlider/icons/1.svg" alt="icon">
                        <h4 class="text-20 fw-500 lh-18 text-white mt-8">100,000 online courses</h4>
                        <p class="text-15 text-white">Explore a variety of fresh topics</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <img src="img/home-2/mainSlider/icons/2.svg" alt="icon">
                        <h4 class="text-20 fw-500 lh-18 text-white mt-8">Expert instruction</h4>
                        <p class="text-15 text-white">Find the right instructor for you</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <img src="img/home-2/mainSlider/icons/3.svg" alt="icon">
                        <h4 class="text-20 fw-500 lh-18 text-white mt-8">Lifetime access</h4>
                        <p class="text-15 text-white">Learn on your schedule</p>
                    </div>
                </div>

            </div>
        </div>

        <button
            class="swiper-prev button -white-20 text-white size-60 rounded-full d-flex justify-center items-center js-prev">
            <i class="icon icon-arrow-left text-24"></i>
        </button>

        <button
            class="swiper-next button -white-20 text-white size-60 rounded-full d-flex justify-center items-center js-next">
            <i class="icon icon-arrow-right text-24"></i>
        </button>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-15 justify-between items-center">
                <div class="col-lg-6">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Our Most Popular Courses</h2>

                        <p class="sectionTitle__text ">10,000+ unique online course list designs</p>

                    </div>

                </div>

                <div class="col-lg-auto">
                    <div class="d-flex items-center">
                        <div class="text-dark-1">Filter By:</div>

                        <div class="d-flex x-gap-20 items-center pl-15">
                            <div>

                                <div class="dropdown js-dropdown js-drop1-active">
                                    <div class="dropdown__button d-flex items-center text-14 rounded-8 px-15 py-10 text-dark-1"
                                        data-el-toggle=".js-drop1-toggle" data-el-toggle-active=".js-drop1-active">
                                        <span class="js-dropdown-title">Category</span>
                                        <i class="icon text-9 ml-40 icon-chevron-down"></i>
                                    </div>

                                    <div
                                        class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-drop1-toggle">
                                        <div class="text-14 y-gap-15 js-dropdown-list">

                                            <div><a href="#" class="d-block js-dropdown-link">Animation</a>
                                            </div>

                                            <div><a href="#" class="d-block js-dropdown-link">Design</a>
                                            </div>

                                            <div><a href="#" class="d-block js-dropdown-link">Illustration</a>
                                            </div>

                                            <div><a href="#" class="d-block js-dropdown-link">Lifestyle</a>
                                            </div>

                                            <div><a href="#" class="d-block js-dropdown-link">Business</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>

                                <div class="dropdown js-dropdown js-drop2-active">
                                    <div class="dropdown__button d-flex items-center text-14 rounded-8 px-15 py-10 text-dark-1"
                                        data-el-toggle=".js-drop2-toggle" data-el-toggle-active=".js-drop2-active">
                                        <span class="js-dropdown-title">Rating</span>
                                        <i class="icon text-9 ml-40 icon-chevron-down"></i>
                                    </div>

                                    <div
                                        class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-drop2-toggle">
                                        <div class="text-14 y-gap-15 js-dropdown-list">

                                            <div><a href="#" class="d-block js-dropdown-link">Great</a>
                                            </div>

                                            <div><a href="#" class="d-block js-dropdown-link">Good</a></div>

                                            <div><a href="#" class="d-block js-dropdown-link">Medium</a>
                                            </div>

                                            <div><a href="#" class="d-block js-dropdown-link">Low</a></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>

                                <div class="dropdown js-dropdown js-drop3-active">
                                    <div class="dropdown__button d-flex items-center text-14 rounded-8 px-15 py-10 text-dark-1"
                                        data-el-toggle=".js-drop3-toggle" data-el-toggle-active=".js-drop3-active">
                                        <span class="js-dropdown-title">Diffiulty</span>
                                        <i class="icon text-9 ml-40 icon-chevron-down"></i>
                                    </div>

                                    <div
                                        class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-drop3-toggle">
                                        <div class="text-14 y-gap-15 js-dropdown-list">

                                            <div><a href="#" class="d-block js-dropdown-link">Hard</a></div>

                                            <div><a href="#" class="d-block js-dropdown-link">Meduium</a>
                                            </div>

                                            <div><a href="#" class="d-block js-dropdown-link">Easy</a></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row y-gap-30 justify-center pt-50">

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-up delay-1">

                        <a href="courses-single-1.html" class="coursesCard -type-1 -hover-shadow border-light rounded-8">
                            <div class="relative">
                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                    <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                </div>
                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                </div>
                            </div>

                            <div class="h-100 pt-15 pb-10 px-20">
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

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-up delay-2">

                        <a href="courses-single-1.html" class="coursesCard -type-1 -hover-shadow border-light rounded-8">
                            <div class="relative">
                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                    <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                </div>
                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    <div>
                                        <div class="px-15 rounded-200 bg-purple-1">
                                            <span class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
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

                            <div class="h-100 pt-15 pb-10 px-20">
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

                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python Bootcamp From
                                    Zero to Hero in Python</div>

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

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-up delay-3">

                        <a href="courses-single-1.html" class="coursesCard -type-1 -hover-shadow border-light rounded-8">
                            <div class="relative">
                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                    <img class="w-1/1" src="img/coursesCards/3.png" alt="image">
                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                </div>
                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                </div>
                            </div>

                            <div class="h-100 pt-15 pb-10 px-20">
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

                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete Guide
                                    (2022 Edition)</div>

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

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-up delay-4">

                        <a href="courses-single-1.html" class="coursesCard -type-1 -hover-shadow border-light rounded-8">
                            <div class="relative">
                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                    <img class="w-1/1" src="img/coursesCards/4.png" alt="image">
                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                </div>
                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                </div>
                            </div>

                            <div class="h-100 pt-15 pb-10 px-20">
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

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-up delay-5">

                        <a href="courses-single-1.html" class="coursesCard -type-1 -hover-shadow border-light rounded-8">
                            <div class="relative">
                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                    <img class="w-1/1" src="img/coursesCards/5.png" alt="image">
                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                </div>
                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                </div>
                            </div>

                            <div class="h-100 pt-15 pb-10 px-20">
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

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-up delay-6">

                        <a href="courses-single-1.html" class="coursesCard -type-1 -hover-shadow border-light rounded-8">
                            <div class="relative">
                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                    <img class="w-1/1" src="img/coursesCards/6.png" alt="image">
                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                </div>
                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                </div>
                            </div>

                            <div class="h-100 pt-15 pb-10 px-20">
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

                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing 2021:
                                    Complete Guide To Instagram</div>

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

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-up delay-7">

                        <a href="courses-single-1.html" class="coursesCard -type-1 -hover-shadow border-light rounded-8">
                            <div class="relative">
                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                    <img class="w-1/1" src="img/coursesCards/7.png" alt="image">
                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                </div>
                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                </div>
                            </div>

                            <div class="h-100 pt-15 pb-10 px-20">
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

                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender Creator: Learn
                                    3D Modelling for Beginners</div>

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

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-up delay-8">

                        <a href="courses-single-1.html" class="coursesCard -type-1 -hover-shadow border-light rounded-8">
                            <div class="relative">
                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                    <img class="w-1/1" src="img/coursesCards/8.png" alt="image">
                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                </div>
                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                </div>
                            </div>

                            <div class="h-100 pt-15 pb-10 px-20">
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

                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial Analyst
                                    Training &amp; Investing Course</div>

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

            <div class="row justify-center pt-60 lg:pt-40">
                <div class="col-auto">
                    <a href="#" class="button -md -outline-purple-1 text-purple-1">
                        View All Courses
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta -type-1 layout-pt-lg layout-pb-lg">
        <div data-parallax="0.6" class="cta__bg">
            <div data-parallax-target class="bg-image js-lazy" data-bg="img/home-2/cta/bg.png"></div>
        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-auto">
                    <h2 class="text-45 md:text-30 text-white">Find the right learning path for you</h2>
                </div>

                <div class="w-100"></div>

                <div class="col-lg-4 col-md-8">
                    <p class="text-white mt-15">Match your goals to our programs, explore your options and map out
                        your path to success.</p>
                </div>

                <div class="w-100"></div>

                <div class="col-auto">
                    <a href="courses-list-3.html" class="button -md -outline-white text-white mt-45 md:mt-20">Get
                        Started Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg js-mouse-move-container">
        <div class="container">
            <div class="row y-gap-30 items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <h2 class="text-45 lg:text-40 md:text-30 text-dark-1">Online learning solutions<br class="xl:d-none">
                        that meet your needs.</h2>
                    <p class="text-dark-1 mt-20">Use the list below to bring attention to your product’s key<br
                            class="lg:d-none"> differentiator.</p>

                    <div class="row y-gap-30 pt-60 lg:pt-40">

                        <div class="col-12">
                            <div class="featureIcon -type-1">
                                <div class="featureIcon__icon bg-green-2">
                                    <img src="img/home-2/learning/icons/1.svg" alt="icon">
                                </div>

                                <div class="featureIcon__content ml-30 md:ml-20">
                                    <h4 class="text-17 fw-500">Leadership development</h4>
                                    <p class="mt-5">Lorem ipsum is placeholder text commonly used<br class="lg:d-none">
                                        in the graphic, print, and publishing industries</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="featureIcon -type-1">
                                <div class="featureIcon__icon bg-purple-2">
                                    <img src="img/home-2/learning/icons/2.svg" alt="icon">
                                </div>

                                <div class="featureIcon__content ml-30 md:ml-20">
                                    <h4 class="text-17 fw-500">Digital transformation</h4>
                                    <p class="mt-5">Lorem ipsum is placeholder text commonly used<br class="lg:d-none">
                                        in the graphic, print, and publishing industries</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="featureIcon -type-1">
                                <div class="featureIcon__icon bg-orange-2">
                                    <img src="img/home-2/learning/icons/3.svg" alt="icon">
                                </div>

                                <div class="featureIcon__content ml-30 md:ml-20">
                                    <h4 class="text-17 fw-500">Innovation &amp; design thinking</h4>
                                    <p class="mt-5">Lorem ipsum is placeholder text commonly used<br class="lg:d-none">
                                        in the graphic, print, and publishing industries</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="elements-image">
                        <div class="elements-image__img1">
                            <img class="js-mouse-move" data-move="40" src="img/home-2/learning/1.png" alt="image">
                        </div>

                        <div class="elements-image__img2">
                            <img class="js-mouse-move" data-move="70" src="img/home-2/learning/2.png" alt="image">
                        </div>

                        <div data-move="60"
                            class="elements-image__el1 lg:d-none img-el -w-260 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                            <img src="img/masthead/4.png" alt="icon">
                            <div class="ml-20">
                                <div class="text-dark-1 text-16 fw-500 lh-1">Ali Tufan</div>
                                <div class="mt-3">UX/UI Designer</div>
                                <div class="d-flex x-gap-5 mt-3">
                                    <div>
                                        <div class="icon-star text-yellow-1 text-11"></div>
                                    </div>
                                    <div>
                                        <div class="icon-star text-yellow-1 text-11"></div>
                                    </div>
                                    <div>
                                        <div class="icon-star text-yellow-1 text-11"></div>
                                    </div>
                                    <div>
                                        <div class="icon-star text-yellow-1 text-11"></div>
                                    </div>
                                    <div>
                                        <div class="icon-star text-yellow-1 text-11"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-move="30"
                            class="elements-image__el2 lg:d-none img-el -w-250 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                            <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                                <img src="img/masthead/1.svg" alt="icon">
                            </div>
                            <div class="ml-20">
                                <div class="text-orange-1 text-16 fw-500 lh-1">3.000 +</div>
                                <div class="mt-3">Free Courses</div>
                            </div>
                        </div>

                        <div data-move="30"
                            class="elements-image__el3 sm:d-none shadow-4 img-el -w-260 px-30 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                            <div class="img-el__side">
                                <div class="size-50 d-flex justify-center items-center bg-purple-1 rounded-full">
                                    <img src="img/masthead/2.svg" alt="icon">
                                </div>
                            </div>
                            <div class="">
                                <div class="text-purple-1 text-16 fw-500 lh-1">Congrats!</div>
                                <div class="mt-3">Your Admission Completed</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-light-3">
        <div class="container">
            <div class="row y-gap-15 justify-between items-end">
                <div class="col-lg-6">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Upcoming Events</h2>

                        <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur.</p>

                    </div>

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

            <div class="pt-60 lg:pt-40 js-section-slider" data-gap="30" data-pagination="js-events-slider-pagination"
                data-nav-prev="js-events-slider-prev" data-nav-next="js-events-slider-next" data-slider-cols="xl-3 lg-2">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div data-anim="slide-left delay-2" class="eventCard -type-1">
                            <div class="eventCard__img">
                                <img src="img/home-2/events/1.png" alt="image">
                            </div>

                            <div class="eventCard__bg bg-white">
                                <div class="eventCard__content y-gap-10">
                                    <div class="eventCard__inner">
                                        <h4 class="eventCard__title text-17 fw-500">
                                            Summer School 2022
                                        </h4>
                                        <div class="d-flex x-gap-15 pt-10">
                                            <div class="d-flex items-center">
                                                <div class="icon-calendar-2 text-16 mr-8"></div>
                                                <div class="text-14">6 April, 2022</div>
                                            </div>
                                            <div class="d-flex items-center">
                                                <div class="icon-location text-16 mr-8"></div>
                                                <div class="text-14">London, UK</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="eventCard__button">
                                        <a href="#" class="button -sm -rounded -purple-1 text-white px-25">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim="slide-left delay-3" class="eventCard -type-1">
                            <div class="eventCard__img">
                                <img src="img/home-2/events/2.png" alt="image">
                            </div>

                            <div class="eventCard__bg bg-white">
                                <div class="eventCard__content y-gap-10">
                                    <div class="eventCard__inner">
                                        <h4 class="eventCard__title text-17 fw-500">
                                            Summer School 2022
                                        </h4>
                                        <div class="d-flex x-gap-15 pt-10">
                                            <div class="d-flex items-center">
                                                <div class="icon-calendar-2 text-16 mr-8"></div>
                                                <div class="text-14">6 April, 2022</div>
                                            </div>
                                            <div class="d-flex items-center">
                                                <div class="icon-location text-16 mr-8"></div>
                                                <div class="text-14">London, UK</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="eventCard__button">
                                        <a href="#" class="button -sm -rounded -purple-1 text-white px-25">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim="slide-left delay-4" class="eventCard -type-1">
                            <div class="eventCard__img">
                                <img src="img/home-2/events/3.png" alt="image">
                            </div>

                            <div class="eventCard__bg bg-white">
                                <div class="eventCard__content y-gap-10">
                                    <div class="eventCard__inner">
                                        <h4 class="eventCard__title text-17 fw-500">
                                            Summer School 2022
                                        </h4>
                                        <div class="d-flex x-gap-15 pt-10">
                                            <div class="d-flex items-center">
                                                <div class="icon-calendar-2 text-16 mr-8"></div>
                                                <div class="text-14">6 April, 2022</div>
                                            </div>
                                            <div class="d-flex items-center">
                                                <div class="icon-location text-16 mr-8"></div>
                                                <div class="text-14">London, UK</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="eventCard__button">
                                        <a href="#" class="button -sm -rounded -purple-1 text-white px-25">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim="slide-left delay-5" class="eventCard -type-1">
                            <div class="eventCard__img">
                                <img src="img/home-2/events/4.png" alt="image">
                            </div>

                            <div class="eventCard__bg bg-white">
                                <div class="eventCard__content y-gap-10">
                                    <div class="eventCard__inner">
                                        <h4 class="eventCard__title text-17 fw-500">
                                            Summer School 2022
                                        </h4>
                                        <div class="d-flex x-gap-15 pt-10">
                                            <div class="d-flex items-center">
                                                <div class="icon-calendar-2 text-16 mr-8"></div>
                                                <div class="text-14">6 April, 2022</div>
                                            </div>
                                            <div class="d-flex items-center">
                                                <div class="icon-location text-16 mr-8"></div>
                                                <div class="text-14">London, UK</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="eventCard__button">
                                        <a href="#" class="button -sm -rounded -purple-1 text-white px-25">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim="slide-left delay-6" class="eventCard -type-1">
                            <div class="eventCard__img">
                                <img src="img/home-2/events/5.png" alt="image">
                            </div>

                            <div class="eventCard__bg bg-white">
                                <div class="eventCard__content y-gap-10">
                                    <div class="eventCard__inner">
                                        <h4 class="eventCard__title text-17 fw-500">
                                            Summer School 2022
                                        </h4>
                                        <div class="d-flex x-gap-15 pt-10">
                                            <div class="d-flex items-center">
                                                <div class="icon-calendar-2 text-16 mr-8"></div>
                                                <div class="text-14">6 April, 2022</div>
                                            </div>
                                            <div class="d-flex items-center">
                                                <div class="icon-location text-16 mr-8"></div>
                                                <div class="text-14">London, UK</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="eventCard__button">
                                        <a href="#" class="button -sm -rounded -purple-1 text-white px-25">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div data-anim="slide-left delay-7" class="eventCard -type-1">
                            <div class="eventCard__img">
                                <img src="img/home-2/events/6.png" alt="image">
                            </div>

                            <div class="eventCard__bg bg-white">
                                <div class="eventCard__content y-gap-10">
                                    <div class="eventCard__inner">
                                        <h4 class="eventCard__title text-17 fw-500">
                                            Summer School 2022
                                        </h4>
                                        <div class="d-flex x-gap-15 pt-10">
                                            <div class="d-flex items-center">
                                                <div class="icon-calendar-2 text-16 mr-8"></div>
                                                <div class="text-14">6 April, 2022</div>
                                            </div>
                                            <div class="d-flex items-center">
                                                <div class="icon-location text-16 mr-8"></div>
                                                <div class="text-14">London, UK</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="eventCard__button">
                                        <a href="#" class="button -sm -rounded -purple-1 text-white px-25">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row pt-60 lg:pt-40">
                <div class="col-auto">
                    <a href="#" class="button -icon -outline-purple-1 text-purple-1 fw-500">
                        View All Events
                        <span class="icon-arrow-top-right text-14 ml-10"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-auto">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Top Categories</h2>

                        <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur.</p>

                    </div>

                </div>
            </div>

            <div class="row y-gap-30 pt-50">
                <div class="col-lg-6">
                    <div class="row y-gap-30">

                        <div class="col-md-6">
                            <div class="categoryCard -type-1">
                                <div class="categoryCard__image">
                                    <div class="bg-image ratio ratio-30:16 js-lazy" data-bg="img/home-2/categories/1.png">
                                    </div>
                                </div>

                                <div class="categoryCard__content text-center">
                                    <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Digital
                                        Marketing</h4>
                                    <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">573+ Courses
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="categoryCard -type-1">
                                <div class="categoryCard__image">
                                    <div class="bg-image ratio ratio-30:16 js-lazy" data-bg="img/home-2/categories/2.png">
                                    </div>
                                </div>

                                <div class="categoryCard__content text-center">
                                    <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Web
                                        Development</h4>
                                    <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">573+ Courses
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="categoryCard -type-1">
                                <div class="categoryCard__image">
                                    <div class="bg-image ratio ratio-30:16 js-lazy" data-bg="img/home-2/categories/3.png">
                                    </div>
                                </div>

                                <div class="categoryCard__content text-center">
                                    <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Graphic Design
                                    </h4>
                                    <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">573+ Courses
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="categoryCard -type-1">
                                <div class="categoryCard__image">
                                    <div class="bg-image ratio ratio-30:16 js-lazy" data-bg="img/home-2/categories/4.png">
                                    </div>
                                </div>

                                <div class="categoryCard__content text-center">
                                    <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Social
                                        Sciences</h4>
                                    <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">573+ Courses
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row y-gap-30">
                        <div class="col-12">
                            <div class="categoryCard -type-1">
                                <div class="categoryCard__image">
                                    <div class="bg-image ratio ratio-30:35 js-lazy" data-bg="img/home-2/categories/5.png">
                                    </div>
                                </div>
                                <div class="categoryCard__content text-center">
                                    <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Personal
                                        Development</h4>
                                    <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">573+ Courses
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row y-gap-30">

                        <div class="col-lg-12">
                            <div class="categoryCard -type-1">
                                <div class="categoryCard__image">
                                    <div class="bg-image ratio ratio-30:16 js-lazy" data-bg="img/home-2/categories/6.png">
                                    </div>
                                </div>
                                <div class="categoryCard__content text-center">
                                    <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Photography
                                    </h4>
                                    <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">573+ Courses
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="categoryCard -type-1">
                                <div class="categoryCard__image">
                                    <div class="bg-image ratio ratio-30:16 js-lazy" data-bg="img/home-2/categories/7.png">
                                    </div>
                                </div>
                                <div class="categoryCard__content text-center">
                                    <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Arts and
                                        Humanities</h4>
                                    <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">573+ Courses
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-light-4">
        <div class="container">
            <div class="row y-gap-15 justify-between items-end">
                <div class="col-lg-6">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Top Students</h2>

                        <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur.</p>

                    </div>

                </div>

                <div class="col-auto">
                    <div class="col-auto">
                        <a href="#" class="button -icon -outline-purple-1 text-purple-1 fw-500">
                            View All Students
                            <span class="icon-arrow-top-right text-14 ml-10"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pt-60 lg:pt-40 js-section-slider" data-gap="30" data-pagination="js-students-slider-pagination"
                data-nav-prev="js-students-slider-prev" data-nav-next="js-students-slider-next"
                data-slider-cols="xl-4 lg-3 md-2">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="teamCard -type-2 bg-white">
                            <div class="teamCard__content">
                                <div class="teamCard__img">
                                    <img src="img/home-2/students/1.png" alt="image">
                                </div>

                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12">Brooklyn Simmons</h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5">Web Designer</div>

                                <div class="teamCard__socials d-flex x-gap-20 pt-12">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>

                                <div class="teamCard-tags pt-20">
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Design</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Art</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Graphic</div>
                                    </div>
                                </div>

                                <div class="teamCard__button mt-20">
                                    <a href="#" class="button -icon -outline-purple-1 -rounded text-purple-1">
                                        View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="teamCard -type-2 bg-white">
                            <div class="teamCard__content">
                                <div class="teamCard__img">
                                    <img src="img/home-2/students/2.png" alt="image">
                                </div>

                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12">Cody Fisher</h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5">Dog Trainer</div>

                                <div class="teamCard__socials d-flex x-gap-20 pt-12">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>

                                <div class="teamCard-tags pt-20">
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Design</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Art</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Graphic</div>
                                    </div>
                                </div>

                                <div class="teamCard__button mt-20">
                                    <a href="#" class="button -icon -outline-purple-1 -rounded text-purple-1">
                                        View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="teamCard -type-2 bg-white">
                            <div class="teamCard__content">
                                <div class="teamCard__img">
                                    <img src="img/home-2/students/3.png" alt="image">
                                </div>

                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12">Marvin McKinney</h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5">President of Sales</div>

                                <div class="teamCard__socials d-flex x-gap-20 pt-12">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>

                                <div class="teamCard-tags pt-20">
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Design</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Art</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Graphic</div>
                                    </div>
                                </div>

                                <div class="teamCard__button mt-20">
                                    <a href="#" class="button -icon -outline-purple-1 -rounded text-purple-1">
                                        View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="teamCard -type-2 bg-white">
                            <div class="teamCard__content">
                                <div class="teamCard__img">
                                    <img src="img/home-2/students/4.png" alt="image">
                                </div>

                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12">Jane Cooper</h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5">Marketing Coordinator</div>

                                <div class="teamCard__socials d-flex x-gap-20 pt-12">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>

                                <div class="teamCard-tags pt-20">
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Design</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Art</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Graphic</div>
                                    </div>
                                </div>

                                <div class="teamCard__button mt-20">
                                    <a href="#" class="button -icon -outline-purple-1 -rounded text-purple-1">
                                        View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="teamCard -type-2 bg-white">
                            <div class="teamCard__content">
                                <div class="teamCard__img">
                                    <img src="img/home-2/students/5.png" alt="image">
                                </div>

                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12">Ali Tufan</h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5">Marketing Coordinator</div>

                                <div class="teamCard__socials d-flex x-gap-20 pt-12">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>

                                <div class="teamCard-tags pt-20">
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Design</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Art</div>
                                    </div>
                                    <div class="teamCard-tags__item">
                                        <div class="teamCard-tags__tag">Graphic</div>
                                    </div>
                                </div>

                                <div class="teamCard__button mt-20">
                                    <a href="#" class="button -icon -outline-purple-1 -rounded text-purple-1">
                                        View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row pt-60 lg:pt-40">
                <div class="col-auto">
                    <div class="d-flex x-gap-15 justify-center items-center">
                        <div class="col-auto">
                            <button class="d-flex items-center text-24 arrow-left-hover js-students-slider-prev">
                                <i class="icon icon-arrow-left"></i>
                            </button>
                        </div>
                        <div class="col-auto">
                            <div class="pagination -arrows js-students-slider-pagination"></div>
                        </div>
                        <div class="col-auto">
                            <button class="d-flex items-center text-24 arrow-right-hover js-students-slider-next">
                                <i class="icon icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
        <div class="container">
            <div class="row y-gap-30 items-center">
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <img class="w-1/1" src="img/home-2/about/1.png" alt="image">
                </div>

                <div class="col-xl-4 offset-xl-1 col-lg-6">
                    <h3 class="text-24 lh-1">Become an Instructor</h3>
                    <p class="mt-20">Join millions of people from around the world learning together. Online
                        learning is as easy and natural as chatting.</p>
                    <div class="d-inline-block mt-20">
                        <a href="instructors-become.html" class="button -md -outline-purple-1 text-purple-1">Apply
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="row y-gap-30 items-center">
                <div class="col-xl-4 offset-xl-1 order-lg-1 col-lg-6 order-2">
                    <h3 class="text-24 lh-1">Become a Student</h3>
                    <p class="mt-20">Join millions of people from around the world learning together. Online
                        learning is as easy and natural as chatting..</p>
                    <div class="d-inline-block mt-20">
                        <a href="#" class="button -md -outline-dark-2 text-dark-2">Apply Now</a>
                    </div>
                </div>

                <div class="col-xl-5 offset-xl-1 col-lg-6 order-lg-2 order-1">
                    <img class="w-1/1" src="img/home-2/about/2.png" alt="image">
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row justify-center">
                <div class="col text-center">
                    <p class="text-lg text-dark-1">Trusted by the world’s best</p>
                </div>
            </div>

            <div class="row y-gap-30 justify-between sm:justify-start items-center pt-60 md:pt-50">

                <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/1.svg" alt="clients image">
                    </div>
                </div>

                <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/2.svg" alt="clients image">
                    </div>
                </div>

                <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/3.svg" alt="clients image">
                    </div>
                </div>

                <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/4.svg" alt="clients image">
                    </div>
                </div>

                <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/5.svg" alt="clients image">
                    </div>
                </div>

                <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/6.svg" alt="clients image">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
