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


    <section class="page-header -type-1">
        <div class="container">
            <div class="page-header__content">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">

                            <h1 class="page-header__title">Instructors</h1>

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


    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-50">
                <div class="col-lg-3 pr-50">

                    <div data-anim="slide-up delay-2" class="sidebar -courses">
                        <div class="sidebar__item">
                            <div class="accordion js-accordion">
                                <div class="accordion__item">
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
                                                <a href="#" class="text-14 fw-500 underline text-purple-1">Show
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__item">
                            <div class="accordion js-accordion">
                                <div class="accordion__item">
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
                                                            <input type="radio" name="radio" checked="checked">
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
                                                            <input type="radio" name="radio" checked="checked">
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
                                                            <input type="radio" name="radio" checked="checked">
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
                                                            <input type="radio" name="radio" checked="checked">
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
                                <div class="accordion__item">
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
                                                <a href="#" class="text-14 fw-500 underline text-purple-1">Show
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-9">
                    <div class="row y-gap-20 items-center justify-between pb-30">
                        <div class="col-auto">
                            <div class="text-14 lh-12">Showing <span class="text-dark-1 fw-500">250</span> total results
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <div class="text-14 lh-12 fw-500 text-dark-1 mr-20">Sort by:</div>

                                <div class="dropdown js-dropdown js-category-active">
                                    <div class="dropdown__button d-flex items-center text-14 rounded-8 px-20 py-10 text-14 lh-12"
                                        data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                                        <span class="js-dropdown-title">Most Popular</span>
                                        <i class="icon text-9 ml-40 icon-chevron-down"></i>
                                    </div>

                                    <div
                                        class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-category-toggle">
                                        <div class="text-14 y-gap-15 js-dropdown-list">

                                            <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>

                                            <div><a href="#" class="d-block js-dropdown-link">Design</a></div>

                                            <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>

                                            <div><a href="#" class="d-block js-dropdown-link">Business</a></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row y-gap-30">

                        <div class="col-lg-4 col-md-6">
                            <div data-anim-child="slide-left delay-2"
                                class="teamCard -type-1 px-10 py-10 rounded-8 border-light">
                                <div class="teamCard__image">
                                    <img src="img/team/1.png" alt="image">
                                </div>
                                <div class="teamCard__content mt-10 px-10 pb-5">
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

                        <div class="col-lg-4 col-md-6">
                            <div data-anim-child="slide-left delay-3"
                                class="teamCard -type-1 px-10 py-10 rounded-8 border-light">
                                <div class="teamCard__image">
                                    <img src="img/team/2.png" alt="image">
                                </div>
                                <div class="teamCard__content mt-10 px-10 pb-5">
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

                        <div class="col-lg-4 col-md-6">
                            <div data-anim-child="slide-left delay-4"
                                class="teamCard -type-1 px-10 py-10 rounded-8 border-light">
                                <div class="teamCard__image">
                                    <img src="img/team/3.png" alt="image">
                                </div>
                                <div class="teamCard__content mt-10 px-10 pb-5">
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

                        <div class="col-lg-4 col-md-6">
                            <div data-anim-child="slide-left delay-5"
                                class="teamCard -type-1 px-10 py-10 rounded-8 border-light">
                                <div class="teamCard__image">
                                    <img src="img/team/4.png" alt="image">
                                </div>
                                <div class="teamCard__content mt-10 px-10 pb-5">
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

                        <div class="col-lg-4 col-md-6">
                            <div data-anim-child="slide-left delay-6"
                                class="teamCard -type-1 px-10 py-10 rounded-8 border-light">
                                <div class="teamCard__image">
                                    <img src="img/team/5.png" alt="image">
                                </div>
                                <div class="teamCard__content mt-10 px-10 pb-5">
                                    <h4 class="teamCard__title">Bessie Cooper</h4>
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

                        <div class="col-lg-4 col-md-6">
                            <div data-anim-child="slide-left delay-7"
                                class="teamCard -type-1 px-10 py-10 rounded-8 border-light">
                                <div class="teamCard__image">
                                    <img src="img/team/6.png" alt="image">
                                </div>
                                <div class="teamCard__content mt-10 px-10 pb-5">
                                    <h4 class="teamCard__title">Albert Flores</h4>
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

                    </div>

                    <div class="row justify-center pt-60 lg:pt-40">
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
