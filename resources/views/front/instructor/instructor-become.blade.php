@extends('front.layouts.master')

@section('title', 'Become an Instructor')

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
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">

                            <h1 class="page-header__title">Become an Instructor</h1>

                        </div>

                        <div data-anim="slide-up delay-2">

                            <p class="page-header__text">We’re on a mission to deliver engaging, curated courses at a
                                reasonable price.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" layout-pb-lg">
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="tabs -active-purple-2 js-tabs">
                        <div class="tabs__controls d-flex js-tabs-controls">
                            <button class="tabs__button js-tabs-button is-active" data-tab-target=".-tab-item-1"
                                type="button">
                                Become an Instructor
                            </button>
                            <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-2" type="button">
                                Instructor Rules
                            </button>
                            <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-3" type="button">
                                Start with Courses
                            </button>
                        </div>

                        <div class="tabs__content pt-60 lg:pt-40 js-tabs-content">
                            <div class="tabs__pane -tab-item-1 is-active">
                                <p class="text-light-1">
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                    here', making it look like readable English.
                                    <br><br>
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                    their infancy.
                                </p>
                            </div>
                            <div class="tabs__pane -tab-item-2">
                                <p class="text-light-1">
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                    here', making it look like readable English.
                                </p>
                            </div>
                            <div class="tabs__pane -tab-item-3">
                                <p class="text-light-1">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                    their infancy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row y-gap-30 justify-between layout-pt-lg">

                <div class="col-lg-3 col-md-6">
                    <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 bg-white rounded-8">
                        <div class="coursesCard__image">
                            <img src="img/home-5/learning/1.svg" alt="image">
                        </div>
                        <div class="coursesCard__content mt-30">
                            <h5 class="coursesCard__title text-18 lh-1 fw-500">Learn with Experts</h5>
                            <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti
                                consecte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 bg-white rounded-8">
                        <div class="coursesCard__image">
                            <img src="img/home-5/learning/2.svg" alt="image">
                        </div>
                        <div class="coursesCard__content mt-30">
                            <h5 class="coursesCard__title text-18 lh-1 fw-500">Learn Anything</h5>
                            <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti
                                consecte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 bg-white rounded-8">
                        <div class="coursesCard__image">
                            <img src="img/home-5/learning/3.svg" alt="image">
                        </div>
                        <div class="coursesCard__content mt-30">
                            <h5 class="coursesCard__title text-18 lh-1 fw-500">Flexible Learning</h5>
                            <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti
                                consecte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 bg-white rounded-8">
                        <div class="coursesCard__image">
                            <img src="img/home-5/learning/4.svg" alt="image">
                        </div>
                        <div class="coursesCard__content mt-30">
                            <h5 class="coursesCard__title text-18 lh-1 fw-500">Industrial Standart</h5>
                            <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti
                                consecte.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-md bg-light-4">
        <div data-anim-wrap class="container">
            <div class="row y-gap-50 justify-between items-center">
                <div class="col-lg-7 pr-60">
                    <img src="img/become-ins/1.png" alt="image">
                </div>

                <div class="col-lg-5">
                    <h2 class="text-45 lh-15">Become an Instructor <span class="text-purple-1">Today</span></h2>
                    <p class="text-dark-1 mt-25">Use the list below to bring attention to your product’s key<br>
                        differentiator.</p>
                    <div class="d-inline-block mt-30">
                        <a href="instructors-become.html" class="button -md -dark-1 text-white">Join Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
        <div data-anim-wrap class="container">
            <div data-anim-child="slide-left delay-1" class="row y-gap-20 justify-between items-center">
                <div class="col-lg-6">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Learn from the best instructors</h2>

                        <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur.</p>

                    </div>

                </div>

                <div class="col-auto">

                    <a href="instructors-list-1.html" class="button -icon -purple-3 text-purple-1">
                        View All Instructors
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                    </a>

                </div>
            </div>

            <div class="row y-gap-30 pt-50">

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-left delay-2" class="teamCard -type-1">
                        <div class="teamCard__image">
                            <img src="img/team/1.png" alt="image">
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Floyd Miles</h4>
                            <p class="teamCard__text">President of Sales</p>
                            <div class="d-flex x-gap-10 pt-10">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">4.5</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-person-3 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">692 Students</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-play text-14"></div>
                                    <div class="text-13 lh-1 ml-8">15 Course</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-left delay-3" class="teamCard -type-1">
                        <div class="teamCard__image">
                            <img src="img/team/2.png" alt="image">
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Cameron Williamson</h4>
                            <p class="teamCard__text">Web Designer</p>
                            <div class="d-flex x-gap-10 pt-10">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">4.5</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-person-3 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">692 Students</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-play text-14"></div>
                                    <div class="text-13 lh-1 ml-8">15 Course</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-left delay-4" class="teamCard -type-1">
                        <div class="teamCard__image">
                            <img src="img/team/3.png" alt="image">
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Brooklyn Simmons</h4>
                            <p class="teamCard__text">Dog Trainer</p>
                            <div class="d-flex x-gap-10 pt-10">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">4.5</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-person-3 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">692 Students</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-play text-14"></div>
                                    <div class="text-13 lh-1 ml-8">15 Course</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-left delay-5" class="teamCard -type-1">
                        <div class="teamCard__image">
                            <img src="img/team/4.png" alt="image">
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Wade Warren</h4>
                            <p class="teamCard__text">Marketing Coordinator</p>
                            <div class="d-flex x-gap-10 pt-10">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">4.5</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-person-3 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">692 Students</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-play text-14"></div>
                                    <div class="text-13 lh-1 ml-8">15 Course</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-center text-center pt-60 lg:pt-40">
                <div class="col-auto">
                    <p class="lh-1">Want to help people learn, grow and achieve more in life? <a
                            class="text-purple-1 underline" href="instructors-become.html">Become an instructor</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
