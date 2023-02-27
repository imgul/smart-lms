@extends('front.layouts.master')

@section('title', 'Instructor List 2')

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


    <section class="page-header -type-3">
        <div class="page-header__bg bg-purple-1"></div>
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="page-header__content">
                        <div class="page-header__img">
                            <img src="img/Instructors-single/1.png" alt="image">
                        </div>

                        <div class="page-header__info pt-20">
                            <h1 class="text-30 lh-14 fw-700 text-white">Ali Tufan</h1>
                            <div class="text-white">UX Designer</div>
                            <div class="d-flex x-gap-20 pt-15">

                                <div class="d-flex items-center text-white">
                                    <div class="icon-star mr-10"></div>
                                    <div class="text-13 lh-1">Instructor Rating</div>
                                </div>

                                <div class="d-flex items-center text-white">
                                    <div class="icon-video-file mr-10"></div>
                                    <div class="text-13 lh-1">23,987 Reviews</div>
                                </div>

                                <div class="d-flex items-center text-white">
                                    <div class="icon-person-3 mr-10"></div>
                                    <div class="text-13 lh-1">692 Students</div>
                                </div>

                                <div class="d-flex items-center text-white">
                                    <div class="icon-play mr-10"></div>
                                    <div class="text-13 lh-1">15 Course</div>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex items-center mt-30">
                            <button class="button -md -green-1 text-dark-1">Send Message</button>

                            <div class="d-flex items-center x-gap-15 text-white ml-25">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="tabs -active-purple-2 js-tabs">
                        <div class="tabs__controls d-flex js-tabs-controls">
                            <button class="tabs__button js-tabs-button is-active" data-tab-target=".-tab-item-1"
                                type="button">
                                Overview
                            </button>
                            <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-2" type="button">
                                Courses
                            </button>
                        </div>

                        <div class="tabs__content pt-60 lg:pt-40 js-tabs-content">
                            <div class="tabs__pane -tab-item-1 is-active">
                                <h4 class="text-20">Description</h4>
                                <p class="text-light-1 mt-30">
                                    Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus,
                                    eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit
                                    amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor
                                    justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur.
                                    <br><br>
                                    This course is aimed at people interested in UI/UX Design. We’ll start from the very
                                    beginning and work all the way through, step by step. If you already have some UI/UX
                                    Design experience but want to get up to speed using Adobe XD then this course is perfect
                                    for you too!
                                    <br><br>
                                    First, we will go over the differences between UX and UI Design. We will look at what
                                    our brief for this real-world project is, then we will learn about low-fidelity
                                    wireframes and how to make use of existing UI design kits.
                                </p>
                                <button class="button underline text-purple-1 mt-30">Show More</button>
                            </div>

                            <div class="tabs__pane -tab-item-2">
                                <div class="row">

                                    <div data-anim="slide-up delay-1" class="col-md-6">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 rounded-8 shadow-3 bg-white">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-20 pb-15 px-30">
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

                                    <div data-anim="slide-up delay-2" class="col-md-6">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 rounded-8 shadow-3 bg-white">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
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

                                            <div class="h-100 pt-20 pb-15 px-30">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
