@extends('layout.front')

@section('title', 'Blog - Smart LMS')

@section('content')
    <main class="main-content  ">

        <header data-anim="fade" data-add-bg="bg-dark-1" class="header -type-1 js-header">


            <div class="header__container">
                <div class="row justify-between items-center">

                    <div class="col-auto">
                        <div class="header-left">

                            <div class="header__logo ">
                                <a data-barba href="index-2.html">
                                    <img src="img/general/logo.svg" alt="logo">
                                </a>
                            </div>


                            <div class="header__explore text-green-1 ml-60 xl:ml-30 xl:d-none">
                                <a href="#" class="d-flex items-center" data-el-toggle=".js-explore-toggle">
                                    <i class="icon icon-explore mr-15"></i>
                                    Explore
                                </a>

                                <div class="explore-content py-25 rounded-8 bg-white toggle-element js-explore-toggle">

                                    <div class="explore__item">
                                        <a href="#" class="d-flex items-center justify-between text-dark-1">
                                            Architecture<div class="icon-chevron-right text-11"></div>
                                        </a>
                                        <div class="explore__subnav rounded-8">
                                            <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                            <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                            <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                            <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                            <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                            <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                        </div>
                                    </div>

                                    <div class="explore__item">
                                        <a href="#" class="d-flex items-center justify-between text-dark-1">
                                            Business<div class="icon-chevron-right text-11"></div>
                                        </a>
                                        <div class="explore__subnav rounded-8">
                                            <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                            <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                            <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                            <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                            <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                            <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                        </div>
                                    </div>


                                    <div class="explore__item">
                                        <a href="#" class="text-dark-1">Computer Programming</a>
                                    </div>

                                    <div class="explore__item">
                                        <a href="#" class="text-dark-1">Data Analysis</a>
                                    </div>


                                    <div class="explore__item">
                                        <a href="#" class="d-flex items-center justify-between text-dark-1">
                                            Design<div class="icon-chevron-right text-11"></div>
                                        </a>
                                        <div class="explore__subnav rounded-8">
                                            <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                            <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                            <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                            <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                            <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                            <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                        </div>
                                    </div>

                                    <div class="explore__item">
                                        <a href="courses-single-6.html" class="text-dark-1">Education</a>
                                    </div>


                                    <div class="explore__item">
                                        <a href="#" class="d-flex items-center justify-between text-dark-1">
                                            Electronics<div class="icon-chevron-right text-11"></div>
                                        </a>
                                        <div class="explore__subnav rounded-8">
                                            <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                            <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                            <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                            <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                            <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                            <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                        </div>
                                    </div>

                                    <div class="explore__item">
                                        <a href="#" class="d-flex items-center justify-between text-dark-1">
                                            Language<div class="icon-chevron-right text-11"></div>
                                        </a>
                                        <div class="explore__subnav rounded-8">
                                            <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                            <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                            <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                            <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                            <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                            <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                        </div>
                                    </div>

                                    <div class="explore__item">
                                        <a href="#" class="d-flex items-center justify-between text-dark-1">
                                            Marketing<div class="icon-chevron-right text-11"></div>
                                        </a>
                                        <div class="explore__subnav rounded-8">
                                            <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                            <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                            <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                            <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                            <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                            <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                        </div>
                                    </div>


                                    <div class="explore__item">
                                        <a href="#" class="text-dark-1">Music Arts</a>
                                    </div>

                                    <div class="explore__item">
                                        <a href="#" class="text-dark-1">Social Science</a>
                                    </div>


                                    <div class="explore__item">
                                        <a href="#" class="d-flex items-center justify-between text-dark-1">
                                            Photography & Video<div class="icon-chevron-right text-11"></div>
                                        </a>
                                        <div class="explore__subnav rounded-8">
                                            <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                            <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                            <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                            <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                            <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                            <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                            <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                        </div>
                                    </div>

                                    <div class="explore__item">
                                        <a href="courses-single-1.html" class="text-dark-1">IT & Software</a>
                                    </div>

                                    <div class="explore__item">
                                        <a href="courses-single-2.html" class="text-purple-1 underline">View All
                                            Courses</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="header-menu js-mobile-menu-toggle ">
                        <div class="header-menu__content">
                            <div class="mobile-bg js-mobile-bg"></div>

                            <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                                <a href="login.html" class="text-dark-1">Log in</a>
                                <a href="signup.html" class="text-dark-1 ml-30">Sign Up</a>
                            </div>

                            <div class="menu js-navList">
                                <ul class="menu__nav text-white -is-active">
                                    <li class="menu-item-has-children">
                                        <a data-barba href="#">
                                            Home <i class="icon-chevron-right text-13 ml-10"></i>
                                        </a>

                                        <ul class="subnav">
                                            <li class="menu__backButton js-nav-list-back">
                                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Home</a>
                                            </li>

                                            <li><a href="index-2.html">Home 1</a></li>

                                            <li><a href="home-2.html">Home 2</a></li>

                                            <li><a href="home-3.html">Home 3</a></li>

                                            <li><a href="home-4.html">Home 4</a></li>

                                            <li><a href="home-5.html">Home 5</a></li>

                                            <li><a href="home-6.html">Home 6</a></li>

                                            <li><a href="home-7.html">Home 7</a></li>

                                            <li><a href="home-8.html">Home 8</a></li>

                                            <li><a href="home-9.html">Home 9</a></li>

                                            <li><a href="home-10.html">Home 10</a></li>

                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children -has-mega-menu">
                                        <a data-barba href="#">Courses <i
                                                class="icon-chevron-right text-13 ml-10"></i></a>


                                        <div class="mega xl:d-none">
                                            <div class="mega__menu">
                                                <div class="row x-gap-40">
                                                    <div class="col">
                                                        <h4 class="text-17 fw-500 mb-20">Course List Layouts</h4>

                                                        <ul class="mega__list">

                                                            <li><a data-barba href="courses-list-1.html">Course List v1</a>
                                                            </li>

                                                            <li><a data-barba href="courses-list-2.html">Course List v2</a>
                                                            </li>

                                                            <li><a data-barba href="courses-list-3.html">Course List v3</a>
                                                            </li>

                                                            <li><a data-barba href="courses-list-4.html">Course List v4</a>
                                                            </li>

                                                            <li><a data-barba href="courses-list-5.html">Course List v5</a>
                                                            </li>

                                                            <li><a data-barba href="courses-list-6.html">Course List v6</a>
                                                            </li>

                                                            <li><a data-barba href="courses-list-7.html">Course List v7</a>
                                                            </li>

                                                            <li><a data-barba href="courses-list-8.html">Course List v8</a>
                                                            </li>

                                                            <li><a data-barba href="courses-list-9.html">Course List v9</a>
                                                            </li>

                                                        </ul>

                                                    </div>

                                                    <div class="col">
                                                        <h4 class="text-17 fw-500 mb-20">Course Single Layouts</h4>

                                                        <ul class="mega__list">

                                                            <li><a data-barba href="courses-single-1.html">Course Single
                                                                    v1</a></li>

                                                            <li><a data-barba href="courses-single-2.html">Course Single
                                                                    v2</a></li>

                                                            <li><a data-barba href="courses-single-3.html">Course Single
                                                                    v3</a></li>

                                                            <li><a data-barba href="courses-single-4.html">Course Single
                                                                    v4</a></li>

                                                            <li><a data-barba href="courses-single-5.html">Course Single
                                                                    v5</a></li>

                                                            <li><a data-barba href="courses-single-6.html">Course Single
                                                                    v6</a></li>

                                                        </ul>

                                                    </div>

                                                    <div class="col">
                                                        <h4 class="text-17 fw-500 mb-20">About Courses</h4>

                                                        <ul class="mega__list">

                                                            <li><a data-barba href="lesson-single-1.html">Lesson Page
                                                                    v1</a></li>

                                                            <li><a data-barba href="lesson-single-2.html">Lesson Page
                                                                    v2</a></li>

                                                            <li><a data-barba href="instructors-list-1.html">Instructors
                                                                    List v1</a></li>

                                                            <li><a data-barba href="instructors-list-2.html">Instructors
                                                                    List v2</a></li>

                                                            <li><a data-barba href="instructors-single.html">Instructors
                                                                    Single</a></li>

                                                            <li><a data-barba href="instructors-become.html">Become an
                                                                    Instructor</a></li>

                                                        </ul>

                                                    </div>

                                                    <div class="col">
                                                        <h4 class="text-17 fw-500 mb-20">Dashboard Pages</h4>

                                                        <ul class="mega__list">

                                                            <li><a data-barba href="dashboard.html">Dashboard</a></li>

                                                            <li><a data-barba href="dshb-courses.html">My Courses</a></li>

                                                            <li><a data-barba href="dshb-bookmarks.html">Bookmarks</a></li>

                                                            <li><a data-barba href="dshb-listing.html">Add Listing</a></li>

                                                            <li><a data-barba href="dshb-reviews.html">Reviews</a></li>

                                                            <li><a data-barba href="dshb-settings.html">Settings</a></li>

                                                            <li><a data-barba
                                                                    href="dshb-administration.html">Administration</a></li>

                                                            <li><a data-barba href="dshb-assignment.html">Assignment</a>
                                                            </li>

                                                            <li><a data-barba href="dshb-calendar.html">Calendar</a></li>

                                                            <li><a data-barba href="dshb-dashboard.html">Single
                                                                    Dashboard</a></li>

                                                            <li><a data-barba href="dshb-dictionary.html">Dictionary</a>
                                                            </li>

                                                            <li><a data-barba href="dshb-forums.html">Forums</a></li>

                                                            <li><a data-barba href="dshb-grades.html">Grades</a></li>

                                                            <li><a data-barba href="dshb-messages.html">Messages</a></li>

                                                            <li><a data-barba
                                                                    href="dshb-participants.html">Participants</a></li>

                                                            <li><a data-barba href="dshb-quiz.html">Quiz</a></li>

                                                            <li><a data-barba href="dshb-survey.html">Survey</a></li>

                                                        </ul>

                                                    </div>

                                                    <div class="col">
                                                        <h4 class="text-17 fw-500 mb-20">Popular Courses</h4>

                                                        <ul class="mega__list">

                                                            <li><a data-barba href="#">Web Developer</a></li>

                                                            <li><a data-barba href="#">Mobile Developer</a></li>

                                                            <li><a data-barba href="#">Digital Marketing</a></li>

                                                            <li><a data-barba href="#">Development</a></li>

                                                            <li><a data-barba href="#">Finance &amp; Accounting</a>
                                                            </li>

                                                            <li><a data-barba href="#">Design</a></li>

                                                            <li><a data-barba href="#">View All Courses</a></li>

                                                        </ul>

                                                    </div>
                                                </div>

                                                <div class="mega-banner bg-purple-1 ml-40">
                                                    <div class="text-24 lh-15 text-white fw-700">
                                                        Join more than<br>
                                                        <span class="text-green-1">8 million learners</span>
                                                        worldwide
                                                    </div>
                                                    <a href="#"
                                                        class="button -md -green-1 text-dark-1 fw-500 col-12">Start
                                                        Learning For Free</a>
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="subnav d-none xl:d-block">
                                            <li class="menu__backButton js-nav-list-back">
                                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                    Courses</a>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Course List Layouts<div
                                                        class="icon-chevron-right text-11"></div></a>

                                                <ul class="subnav">
                                                    <li class="menu__backButton js-nav-list-back">
                                                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                            Course List Layouts</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-1.html">Course List v1</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-2.html">Course List v2</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-3.html">Course List v3</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-4.html">Course List v4</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-5.html">Course List v5</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-6.html">Course List v6</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-7.html">Course List v7</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-8.html">Course List v8</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-list-all.html">Course List All</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Course Single Layouts<div
                                                        class="icon-chevron-right text-11"></div></a>

                                                <ul class="subnav">
                                                    <li class="menu__backButton js-nav-list-back">
                                                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                            Course Single Layouts</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-single-1.html">Course Single v1</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-single-2.html">Course Single v2</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-single-3.html">Course Single v3</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-single-4.html">Course Single v4</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-single-5.html">Course Single v5</a>
                                                    </li>

                                                    <li>
                                                        <a href="courses-single-6.html">Course Single v6</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">About Courses<div class="icon-chevron-right text-11">
                                                    </div></a>

                                                <ul class="subnav">
                                                    <li class="menu__backButton js-nav-list-back">
                                                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                            About Courses</a>
                                                    </li>

                                                    <li>
                                                        <a href="lesson-single-1.html">Lesson Page v1</a>
                                                    </li>

                                                    <li>
                                                        <a href="lesson-single-2.html">Lesson Page v2</a>
                                                    </li>

                                                    <li>
                                                        <a href="instructors-list-1.html">Instructors List v1</a>
                                                    </li>

                                                    <li>
                                                        <a href="instructors-list-2.html">Instructors List v2</a>
                                                    </li>

                                                    <li>
                                                        <a href="instructors-single.html">Instructors Single</a>
                                                    </li>

                                                    <li>
                                                        <a href="instructors-become.html">Become an Instructor</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Dashboard Pages<div class="icon-chevron-right text-11">
                                                    </div></a>

                                                <ul class="subnav">
                                                    <li class="menu__backButton js-nav-list-back">
                                                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                            Dashboard Pages</a>
                                                    </li>

                                                    <li>
                                                        <a href="dashboard.html">Dashboard</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-courses.html">My Courses</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-bookmarks.html">Bookmarks</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-listing.html">Add Listing</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-reviews.html">Reviews</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-settings.html">Settings</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-administration.html">Administration</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-assignment.html">Assignment</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-calendar.html">Calendar</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-dashboard.html">Single Dashboard</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-dictionary.html">Dictionary</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-forums.html">Forums</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-grades.html">Grades</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-messages.html">Messages</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-participants.html">Participants</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-quiz.html">Quiz</a>
                                                    </li>

                                                    <li>
                                                        <a href="dshb-survey.html">Survey</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Popular Courses<div class="icon-chevron-right text-11">
                                                    </div></a>

                                                <ul class="subnav">
                                                    <li class="menu__backButton js-nav-list-back">
                                                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                            Popular Courses</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Web Developer</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Mobile Developer</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Digital Marketing</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Development</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Finance &amp; Accounting</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Design</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">View All Courses</a>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a data-barba href="#">Events <i
                                                class="icon-chevron-right text-13 ml-10"></i></a>
                                        <ul class="subnav">
                                            <li class="menu__backButton js-nav-list-back">
                                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                    Events</a>
                                            </li>

                                            <li><a href="event-list-1.html">Event List 1</a></li>

                                            <li><a href="event-list-2.html">Event List 2</a></li>

                                            <li><a href="event-single.html">Event Single</a></li>

                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a data-barba href="#">Blog <i
                                                class="icon-chevron-right text-13 ml-10"></i></a>
                                        <ul class="subnav">
                                            <li class="menu__backButton js-nav-list-back">
                                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Blog</a>
                                            </li>

                                            <li><a href="blog-list-1.html">Blog List 1</a></li>

                                            <li><a href="blog-list-2.html">Blog List 2</a></li>

                                            <li><a href="blog-list-3.html">Blog List 3</a></li>

                                            <li><a href="blog-single.html">Blog Single</a></li>

                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a data-barba href="#">
                                            Pages <i class="icon-chevron-right text-13 ml-10"></i>
                                        </a>

                                        <ul class="subnav">
                                            <li class="menu__backButton js-nav-list-back">
                                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                    Pages</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">About Us<div class="icon-chevron-right text-11"></div>
                                                    </a>

                                                <ul class="subnav">
                                                    <li class="menu__backButton js-nav-list-back">
                                                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                            About Us</a>
                                                    </li>

                                                    <li>
                                                        <a href="about-1.html">About 1</a>
                                                    </li>

                                                    <li>
                                                        <a href="about-2.html">About 2</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Contact<div class="icon-chevron-right text-11"></div>
                                                    </a>
                                                <ul class="subnav">
                                                    <li class="menu__backButton js-nav-list-back">
                                                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                            Contact</a>
                                                    </li>

                                                    <li>
                                                        <a href="contact-1.html">Contact 1</a>
                                                    </li>

                                                    <li>
                                                        <a href="contact-2.html">Contact 2</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Shop<div class="icon-chevron-right text-11"></div></a>
                                                <ul class="subnav">
                                                    <li class="menu__backButton js-nav-list-back">
                                                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>
                                                            Shop</a>
                                                    </li>

                                                    <li>
                                                        <a href="shop-cart.html">Shop Cart</a>
                                                    </li>

                                                    <li>
                                                        <a href="shop-checkout.html">Shop Checkout</a>
                                                    </li>

                                                    <li>
                                                        <a href="shop-list.html">Shop List</a>
                                                    </li>

                                                    <li>
                                                        <a href="shop-order.html">Shop Order</a>
                                                    </li>

                                                    <li>
                                                        <a href="shop-single.html">Shop Single</a>
                                                    </li>

                                                </ul>
                                            </li>


                                            <li>
                                                <a href="pricing.html">Membership plans</a>
                                            </li>

                                            <li>
                                                <a href="404.html">404 Page</a>
                                            </li>

                                            <li>
                                                <a href="terms.html">FAQs</a>
                                            </li>

                                            <li>
                                                <a href="help-center.html">Help Center</a>
                                            </li>

                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>

                                            <li>
                                                <a href="signup.html">Register</a>
                                            </li>

                                            <li>
                                                <a href="ui-elements.html">UI Elements</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a data-barba href="contact-1.html">Contact</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                <div class="mobile-footer__number">
                                    <div class="text-17 fw-500 text-dark-1">Call us</div>
                                    <div class="text-17 fw-500 text-purple-1">800 388 80 90</div>
                                </div>

                                <div class="lh-2 mt-10">
                                    <div>329 Queensberry Street,<br> North Melbourne VIC 3051, Australia.</div>
                                    <div>hi@educrat.com</div>
                                </div>

                                <div class="mobile-socials mt-10">

                                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-instagram"></i>
                                    </a>

                                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-linkedin"></i>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                            <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                                <div class="icon-close text-dark-1 text-16"></div>
                            </div>
                        </div>

                        <div class="header-menu-bg"></div>
                    </div>


                    <div class="col-auto">
                        <div class="header-right d-flex items-center">
                            <div class="header-right__icons text-white d-flex items-center">

                                <div class="">
                                    <button class="d-flex items-center text-white" data-el-toggle=".js-search-toggle">
                                        <i class="text-20 icon icon-search"></i>
                                    </button>

                                    <div class="toggle-element js-search-toggle">
                                        <div class="header-search pt-90 bg-white shadow-4">
                                            <div class="container">
                                                <div class="header-search__field">
                                                    <div class="icon icon-search text-dark-1"></div>
                                                    <input type="text" class="col-12 text-18 lh-12 text-dark-1 fw-500"
                                                        placeholder="What do you want to learn?">

                                                    <button
                                                        class="d-flex items-center justify-center size-40 rounded-full bg-purple-3"
                                                        data-el-toggle=".js-search-toggle">
                                                        <img src="img/menus/close.svg" alt="icon">
                                                    </button>
                                                </div>

                                                <div class="header-search__content mt-30">
                                                    <div class="text-17 text-dark-1 fw-500">Popular Right Now</div>

                                                    <div class="d-flex y-gap-5 flex-column mt-20">
                                                        <a href="courses-single-1.html" class="text-dark-1">The Ultimate
                                                            Drawing Course - Beginner to Advanced</a>
                                                        <a href="courses-single-2.html" class="text-dark-1">Character Art
                                                            School: Complete Character Drawing Course</a>
                                                        <a href="courses-single-3.html" class="text-dark-1">Complete
                                                            Blender Creator: Learn 3D Modelling for Beginners</a>
                                                        <a href="courses-single-4.html" class="text-dark-1">User
                                                            Experience Design Essentials - Adobe XD UI UX Design</a>
                                                        <a href="courses-single-5.html" class="text-dark-1">Graphic Design
                                                            Masterclass - Learn GREAT Design</a>
                                                        <a href="courses-single-6.html" class="text-dark-1">Adobe
                                                            Photoshop CC – Essentials Training Course</a>
                                                    </div>

                                                    <div class="mt-30">
                                                        <button class="uppercase underline">PRESS ENTER TO SEE ALL SEARCH
                                                            RESULTS</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header-search__bg" data-el-toggle=".js-search-toggle"></div>
                                    </div>
                                </div>


                                <div class="relative ml-30 xl:ml-20">
                                    <button class="d-flex items-center text-white" data-el-toggle=".js-cart-toggle">
                                        <i class="text-20 icon icon-basket"></i>
                                    </button>

                                    <div class="toggle-element js-cart-toggle">
                                        <div class="header-cart bg-white -dark-bg-dark-1 rounded-8">
                                            <div class="px-30 pt-30 pb-10">

                                                <div class="row justify-between x-gap-40 pb-20">
                                                    <div class="col">
                                                        <div class="row x-gap-10 y-gap-10">
                                                            <div class="col-auto">
                                                                <img src="img/menus/cart/1.png" alt="image">
                                                            </div>

                                                            <div class="col">
                                                                <div class="text-dark-1 lh-15">The Ultimate Drawing Course
                                                                    Beginner to Advanced...</div>

                                                                <div class="d-flex items-center mt-10">
                                                                    <div
                                                                        class="lh-12 fw-500 line-through text-light-1 mr-10">
                                                                        $179</div>
                                                                    <div class="text-18 lh-12 fw-500 text-dark-1">$79</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button><img src="img/menus/close.svg" alt="icon"></button>
                                                    </div>
                                                </div>

                                                <div class="row justify-between x-gap-40 pb-20">
                                                    <div class="col">
                                                        <div class="row x-gap-10 y-gap-10">
                                                            <div class="col-auto">
                                                                <img src="img/menus/cart/2.png" alt="image">
                                                            </div>

                                                            <div class="col">
                                                                <div class="text-dark-1 lh-15">User Experience Design
                                                                    Essentials - Adobe XD UI UX...</div>

                                                                <div class="d-flex items-center mt-10">
                                                                    <div
                                                                        class="lh-12 fw-500 line-through text-light-1 mr-10">
                                                                        $179</div>
                                                                    <div class="text-18 lh-12 fw-500 text-dark-1">$79</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button><img src="img/menus/close.svg" alt="icon"></button>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="px-30 pt-20 pb-30 border-top-light">
                                                <div class="d-flex justify-between">
                                                    <div class="text-18 lh-12 text-dark-1 fw-500">Total:</div>
                                                    <div class="text-18 lh-12 text-dark-1 fw-500">$659</div>
                                                </div>

                                                <div class="row x-gap-20 y-gap-10 pt-30">
                                                    <div class="col-sm-6">
                                                        <button
                                                            class="button py-20 -dark-1 text-white -dark-button-white col-12">View
                                                            Cart</button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button
                                                            class="button py-20 -purple-1 text-white col-12">Checkout</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-none xl:d-block ml-20">
                                    <button class="text-white items-center" data-el-toggle=".js-mobile-menu-toggle">
                                        <i class="text-11 icon icon-mobile-menu"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="header-right__buttons d-flex items-center ml-30 md:d-none">
                                <a href="login.html" class="button -underline text-white">Log in</a>
                                <a href="signup.html" class="button -sm -white text-dark-1 ml-30">Sign up</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        <div class="content-wrapper  js-content-wrapper">


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

                                    <h1 class="page-header__title">Latest News</h1>

                                </div>

                                <div data-anim="slide-up delay-2">

                                    <p class="page-header__text">We’re on a mission to deliver engaging, curated courses at
                                        a reasonable price.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="layout-pt-sm layout-pb-lg">
                <div data-anim-wrap class="container">
                    <div class="tabs -pills js-tabs">
                        <div data-anim-child="slide-up delay-3"
                            class="tabs__controls d-flex justify-center x-gap-10 js-tabs-controls">

                            <div>
                                <button class="tabs__button px-15 py-8 rounded-8 js-tabs-button is-active"
                                    data-tab-target=".-tab-item-1" type="button">All Categories</button>
                            </div>

                            <div>
                                <button class="tabs__button px-15 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-2" type="button">Animation</button>
                            </div>

                            <div>
                                <button class="tabs__button px-15 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-3" type="button">Design</button>
                            </div>

                            <div>
                                <button class="tabs__button px-15 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-4" type="button">Illustration</button>
                            </div>

                            <div>
                                <button class="tabs__button px-15 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-5" type="button">Lifestyle</button>
                            </div>

                            <div>
                                <button class="tabs__button px-15 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-6" type="button">Photo &amp; Film</button>
                            </div>

                            <div>
                                <button class="tabs__button px-15 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-7" type="button">Business</button>
                            </div>

                            <div>
                                <button class="tabs__button px-15 py-8 rounded-8 js-tabs-button "
                                    data-tab-target=".-tab-item-8" type="button">Writing</button>
                            </div>

                        </div>

                        <div class="tabs__content pt-40 js-tabs-content">

                            <div class="tabs__pane -tab-item-1 is-active">
                                <div class="row y-gap-30">

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/1.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our
                                                    Lives: We Can Change the Future</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/2.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a culture
                                                    of professional development</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/3.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing engagement
                                                    with Instagram</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/4.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to design a
                                                    simple, yet unique and memorable brand identity</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/5.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">5 marketing trends
                                                    that you should be prepared for in 2022</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/6.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 great design trends
                                                    that are making a come-back in 2021</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/7.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to be more
                                                    creative: 5 cool tips to find inspiration everywhere</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/8.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 interesting
                                                    programming languages you should be paying attention to</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/9.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">19 ways to optimize
                                                    your ad marketing budget efficiently</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
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

                            <div class="tabs__pane -tab-item-2 ">
                                <div class="row y-gap-30">

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/1.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our
                                                    Lives: We Can Change the Future</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/2.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a culture
                                                    of professional development</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/3.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing engagement
                                                    with Instagram</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/4.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to design a
                                                    simple, yet unique and memorable brand identity</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/5.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">5 marketing trends
                                                    that you should be prepared for in 2022</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/6.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 great design trends
                                                    that are making a come-back in 2021</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/7.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to be more
                                                    creative: 5 cool tips to find inspiration everywhere</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/8.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 interesting
                                                    programming languages you should be paying attention to</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/9.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">19 ways to optimize
                                                    your ad marketing budget efficiently</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
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

                            <div class="tabs__pane -tab-item-3 ">
                                <div class="row y-gap-30">

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/1.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our
                                                    Lives: We Can Change the Future</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/2.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a culture
                                                    of professional development</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/3.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing engagement
                                                    with Instagram</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/4.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to design a
                                                    simple, yet unique and memorable brand identity</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/5.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">5 marketing trends
                                                    that you should be prepared for in 2022</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/6.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 great design trends
                                                    that are making a come-back in 2021</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/7.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to be more
                                                    creative: 5 cool tips to find inspiration everywhere</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/8.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 interesting
                                                    programming languages you should be paying attention to</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/9.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">19 ways to optimize
                                                    your ad marketing budget efficiently</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
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

                            <div class="tabs__pane -tab-item-4 ">
                                <div class="row y-gap-30">

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/1.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our
                                                    Lives: We Can Change the Future</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/2.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a culture
                                                    of professional development</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/3.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing
                                                    engagement with Instagram</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/4.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to design a
                                                    simple, yet unique and memorable brand identity</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/5.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">5 marketing trends
                                                    that you should be prepared for in 2022</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/6.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 great design
                                                    trends that are making a come-back in 2021</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/7.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to be more
                                                    creative: 5 cool tips to find inspiration everywhere</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/8.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 interesting
                                                    programming languages you should be paying attention to</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/9.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">19 ways to optimize
                                                    your ad marketing budget efficiently</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
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

                            <div class="tabs__pane -tab-item-5 ">
                                <div class="row y-gap-30">

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/1.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our
                                                    Lives: We Can Change the Future</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/2.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a
                                                    culture of professional development</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/3.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing
                                                    engagement with Instagram</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/4.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to design a
                                                    simple, yet unique and memorable brand identity</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/5.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">5 marketing trends
                                                    that you should be prepared for in 2022</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/6.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 great design
                                                    trends that are making a come-back in 2021</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/7.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to be more
                                                    creative: 5 cool tips to find inspiration everywhere</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/8.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 interesting
                                                    programming languages you should be paying attention to</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/9.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">19 ways to optimize
                                                    your ad marketing budget efficiently</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
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

                            <div class="tabs__pane -tab-item-6 ">
                                <div class="row y-gap-30">

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/1.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our
                                                    Lives: We Can Change the Future</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/2.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a
                                                    culture of professional development</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/3.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing
                                                    engagement with Instagram</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/4.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to design a
                                                    simple, yet unique and memorable brand identity</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/5.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">5 marketing trends
                                                    that you should be prepared for in 2022</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/6.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 great design
                                                    trends that are making a come-back in 2021</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/7.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to be more
                                                    creative: 5 cool tips to find inspiration everywhere</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/8.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 interesting
                                                    programming languages you should be paying attention to</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/9.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">19 ways to optimize
                                                    your ad marketing budget efficiently</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
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

                            <div class="tabs__pane -tab-item-7 ">
                                <div class="row y-gap-30">

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/1.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our
                                                    Lives: We Can Change the Future</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/2.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a
                                                    culture of professional development</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/3.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing
                                                    engagement with Instagram</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/4.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to design a
                                                    simple, yet unique and memorable brand identity</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/5.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">5 marketing trends
                                                    that you should be prepared for in 2022</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/6.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 great design
                                                    trends that are making a come-back in 2021</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/7.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to be more
                                                    creative: 5 cool tips to find inspiration everywhere</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/8.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 interesting
                                                    programming languages you should be paying attention to</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/9.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">19 ways to optimize
                                                    your ad marketing budget efficiently</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
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

                            <div class="tabs__pane -tab-item-8 ">
                                <div class="row y-gap-30">

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/1.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our
                                                    Lives: We Can Change the Future</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/2.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a
                                                    culture of professional development</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/3.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing
                                                    engagement with Instagram</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/4.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to design a
                                                    simple, yet unique and memorable brand identity</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/5.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">5 marketing trends
                                                    that you should be prepared for in 2022</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/6.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 great design
                                                    trends that are making a come-back in 2021</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/7.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">How to be more
                                                    creative: 5 cool tips to find inspiration everywhere</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/8.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">8 interesting
                                                    programming languages you should be paying attention to</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                                        <a href="blog-single.html" class="blogCard -type-1">
                                            <div class="blogCard__image">
                                                <img class="w-1/1 rounded-8" src="img/blog-list/9.png" alt="image">
                                            </div>
                                            <div class="blogCard__content mt-20">
                                                <div class="blogCard__category">EDUCATION</div>
                                                <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">19 ways to optimize
                                                    your ad marketing budget efficiently</h4>
                                                <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                            </div>
                                        </a>
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
                </div>
            </section>

            <footer class="footer -type-1 bg-dark-1 -green-links">
                <div class="container">
                    <div class="footer-header">
                        <div class="row y-gap-20 justify-between items-center">
                            <div class="col-auto">
                                <div class="footer-header__logo">
                                    <img src="img/footer/footer-logo.svg" alt="logo">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="footer-header-socials">
                                    <div class="footer-header-socials__title text-white">Follow us on social media</div>
                                    <div class="footer-header-socials__list">
                                        <a href="#"><i class="icon-facebook"></i></a>
                                        <a href="#"><i class="icon-twitter"></i></a>
                                        <a href="#"><i class="icon-instagram"></i></a>
                                        <a href="#"><i class="icon-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer-columns">
                        <div class="row y-gap-30">
                            <div class="col-xl-2 col-lg-4 col-md-6">
                                <div class="text-17 fw-500 text-white uppercase mb-25">ABOUT</div>
                                <div class="d-flex y-gap-10 flex-column">
                                    <a href="about-1.html">About Us</a>
                                    <a href="blog-list-1.html">Learner Stories</a>
                                    <a href="instructor-become.html">Careers</a>
                                    <a href="blog-list-1.html">Press</a>
                                    <a href="#">Leadership</a>
                                    <a href="contact-1.html">Contact Us</a>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-8">
                                <div class="text-17 fw-500 text-white uppercase mb-25">CATEGORIES</div>
                                <div class="row justify-between y-gap-20">
                                    <div class="col-md-6">
                                        <div class="d-flex y-gap-10 flex-column">
                                            <a href="courses-single-1.html">Development</a>
                                            <a href="courses-single-2.html">Business</a>
                                            <a href="courses-single-3.html">Finance & Accounting</a>
                                            <a href="courses-single-4.html">IT & Software</a>
                                            <a href="courses-single-5.html">Office Productivity</a>
                                            <a href="courses-single-6.html">Design</a>
                                            <a href="courses-single-1.html">Marketing</a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex y-gap-10 flex-column">
                                            <a href="courses-single-1.html">Lifiestyle</a>
                                            <a href="courses-single-2.html">Photography & Video</a>
                                            <a href="courses-single-3.html">Health & Fitness</a>
                                            <a href="courses-single-4.html">Music</a>
                                            <a href="courses-single-5.html">UX Design</a>
                                            <a href="courses-single-6.html">Seo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 offset-xl-1 col-lg-4 col-md-6">
                                <div class="text-17 fw-500 text-white uppercase mb-25">SUPPORT</div>
                                <div class="d-flex y-gap-10 flex-column">
                                    <a href="terms.html">Documentation</a>
                                    <a href="help-center.html">FAQS</a>
                                    <a href="dashboard.html">Dashboard</a>
                                    <a href="contact-1.html">Contact</a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="text-17 fw-500 text-white uppercase mb-25">GET IN TOUCH</div>
                                <div class="footer-columns-form">
                                    <div>We don’t send spam so don’t worry.</div>
                                    <form action="https://creativelayers.net/themes/educrat-html/post">
                                        <div class="form-group">
                                            <input type="text" placeholder="Email...">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-30 border-top-light-15">
                        <div class="row justify-between items-center y-gap-20">
                            <div class="col-auto">
                                <div class="d-flex items-center h-100 text-white">
                                    © 2022 Educrat. All Right Reserved.
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
                                    <div>
                                        <div class="d-flex x-gap-15 text-white">
                                            <a href="help-center.html">Help</a>
                                            <a href="terms.html">Privacy Policy</a>
                                            <a href="terms.html">Cookie Notice</a>
                                            <a href="terms.html">Security</a>
                                            <a href="terms.html">Terms of Use</a>
                                        </div>
                                    </div>

                                    <div>
                                        <a href="#" class="button px-30 h-50 -dark-6 rounded-200 text-white">
                                            <i class="icon-worldwide text-20 mr-15"></i><span
                                                class="text-15">English</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


        </div>
    </main>
@endsection
