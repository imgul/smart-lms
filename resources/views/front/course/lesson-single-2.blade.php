@extends('front.layouts.master')

@section('title', 'Lesson Single 2')

@section('content')
    <section class="lesson-image">
        <div class="relative pt-40">
            <img class="w-1/1" src="img/lesson-single/1.png" alt="image">
            <div class="absolute-full-center d-flex justify-center items-center">
                <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY"
                    class="d-flex justify-center items-center size-60 rounded-full bg-white js-gallery"
                    data-gallery="gallery1">
                    <div class="icon-play text-18"></div>
                </a>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column">
        <section class="pt-40 layout-pb-lg lg:order-2">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-7 col-lg-8">
                        <div class="">
                            <h4 class="text-18 fw-500">Description</h4>
                            <p class="mt-30">
                                Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend
                                euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non,
                                suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque
                                tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur.
                                <br><br>
                                This course is aimed at people interested in UI/UX Design. We’ll start from the very
                                beginning and work all the way through, step by step. If you already have some UI/UX Design
                                experience but want to get up to speed using Adobe XD then this course is perfect for you
                                too!
                                <br><br>
                                First, we will go over the differences between UX and UI Design. We will look at what our
                                brief for this real-world project is, then we will learn about low-fidelity wireframes and
                                how to make use of existing UI design kits.
                            </p>
                            <button class="text-purple-1 fw-500 underline mt-30">Show more</button>

                            <div class="mt-60">
                                <h4 class="text-20 mb-30">What you'll learn</h4>
                                <div class="row x-gap-100 justfiy-between">
                                    <div class="col-md-6">
                                        <div class="y-gap-20">

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>Become a UX designer.</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>You will be able to add UX designer to your CV</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>Become a UI designer.</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>Build &amp; test a full website design.</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>Create your first UX brief &amp; persona.</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>How to use premade UI kits.</p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="y-gap-20">

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>Create quick wireframes.</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>Downloadable exercise files</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>Build a UX project from beginning to end.</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>Learn to design websites &amp; mobile phone apps.</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>All the techniques used by UX professionals</p>
                                            </div>

                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                                    <i class="icon-check text-6"></i>
                                                </div>
                                                <p>You will be able to talk correctly with other UX design.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-60">
                                <h4 class="text-20">Requirements</h4>
                                <ul class="ul-list y-gap-15 pt-30">
                                    <li>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from
                                        Adobe.</li>
                                    <li>No previous design experience is needed.</li>
                                    <li>No previous Adobe XD skills are needed.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-60 lg:mt-40">
                            <div class="blogPost -comments">
                                <div class="blogPost__content">
                                    <h2 class="text-20 fw-500">
                                        Reviews
                                    </h2>

                                    <ul class="comments__list mt-30">
                                        <li class="comments__item">
                                            <div class="comments__item-inner md:direction-column">
                                                <div class="comments__img mr-20">
                                                    <div class="bg-image rounded-full js-lazy" data-bg="img/avatars/1.png">
                                                    </div>
                                                </div>

                                                <div class="comments__body md:mt-15">
                                                    <div class="comments__header">
                                                        <h4 class="text-17 fw-500 lh-15">
                                                            Ali Tufan
                                                            <span class="text-13 text-light-1 fw-400">3 Days ago</span>
                                                        </h4>

                                                        <div class="stars"></div>
                                                    </div>

                                                    <h5 class="text-15 fw-500 mt-15">The best LMS Design</h5>
                                                    <div class="comments__text mt-10">
                                                        <p>This course is a very applicable. Professor Ng explains precisely
                                                            each algorithm and even tries to give an intuition for
                                                            mathematical and statistic concepts behind each algorithm. Thank
                                                            you very much.</p>
                                                    </div>

                                                    <div class="comments__helpful mt-20">
                                                        <span class="text-13 text-purple-1">Was this review helpful?</span>
                                                        <button class="button text-13 -sm -purple-1 text-white">Yes</button>
                                                        <button
                                                            class="button text-13 -sm -light-7 text-purple-1">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="comments__item">
                                            <div class="comments__item-inner md:direction-column">
                                                <div class="comments__img mr-20">
                                                    <div class="bg-image rounded-full js-lazy" data-bg="img/avatars/1.png">
                                                    </div>
                                                </div>

                                                <div class="comments__body md:mt-15">
                                                    <div class="comments__header">
                                                        <h4 class="text-17 fw-500 lh-15">
                                                            Ali Tufan
                                                            <span class="text-13 text-light-1 fw-400">3 Days ago</span>
                                                        </h4>

                                                        <div class="stars"></div>
                                                    </div>

                                                    <h5 class="text-15 fw-500 mt-15">The best LMS Design</h5>
                                                    <div class="comments__text mt-10">
                                                        <p>This course is a very applicable. Professor Ng explains precisely
                                                            each algorithm and even tries to give an intuition for
                                                            mathematical and statistic concepts behind each algorithm. Thank
                                                            you very much.</p>
                                                    </div>

                                                    <div class="comments__helpful mt-20">
                                                        <span class="text-13 text-purple-1">Was this review helpful?</span>
                                                        <button
                                                            class="button text-13 -sm -purple-1 text-white">Yes</button>
                                                        <button
                                                            class="button text-13 -sm -light-7 text-purple-1">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="respondForm pt-30">
                                <h3 class="text-20 fw-500">
                                    Write a Review
                                </h3>

                                <div class="mt-30">
                                    <h4 class="text-16 fw-500">What is it like to Course?</h4>
                                    <div class="d-flex x-gap-10 pt-10">
                                        <div class="icon-star text-14 text-yellow-1"></div>
                                        <div class="icon-star text-14 text-yellow-1"></div>
                                        <div class="icon-star text-14 text-yellow-1"></div>
                                        <div class="icon-star text-14 text-yellow-1"></div>
                                        <div class="icon-star text-14 text-yellow-1"></div>
                                    </div>
                                </div>

                                <form class="contact-form respondForm__form row y-gap-30 pt-30" action="#">
                                    <div class="col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Review Title</label>
                                        <input type="text" name="title" placeholder="Great Courses">
                                    </div>
                                    <div class="col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Review Content</label>
                                        <textarea name="comment" placeholder="Message" rows="8"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="submit" id="submit"
                                            class="button -md -purple-1 text-white">
                                            Submit Review
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <aside class="lesson-sidebar -type-2 lg:order-1">
            <div class="px-30 sm:px-20">
                <form class="lesson-sidebar-search" action="https://creativelayers.net/themes/educrat-html/post">
                    <input type="text" placeholder="Search">
                    <button class="" type="submit">
                        <i class="icon-search text-20"></i>
                    </button>
                </form>

                <div class="accordion -block-2 text-left js-accordion mt-30">

                    <div class="accordion__item">
                        <div class="accordion__button py-20 px-30 bg-light-4">
                            <div class="d-flex items-center">
                                <div class="accordion__icon">
                                    <div class="icon" data-feather="chevron-down"></div>
                                    <div class="icon" data-feather="chevron-up"></div>
                                </div>
                                <span class="text-17 fw-500 text-dark-1">Course Content</span>
                            </div>
                        </div>

                        <div class="accordion__content">
                            <div class="accordion__content__inner px-30 py-30">
                                <div class="y-gap-30">

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Introduction to the User</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Getting started with your</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>What is UI vs UX - User Interface vs User Experience vs Product</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Wireframing (low fidelity) in</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Viewing your prototype on</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Sharing your design</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <div class="accordion__button py-20 px-30 bg-light-4">
                            <div class="d-flex items-center">
                                <div class="accordion__icon">
                                    <div class="icon" data-feather="chevron-down"></div>
                                    <div class="icon" data-feather="chevron-up"></div>
                                </div>
                                <span class="text-17 fw-500 text-dark-1">The Brief</span>
                            </div>
                        </div>

                        <div class="accordion__content">
                            <div class="accordion__content__inner px-30 py-30">
                                <div class="y-gap-30">

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Introduction to the User</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Getting started with your</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>What is UI vs UX - User Interface vs User Experience vs Product</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Wireframing (low fidelity) in</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Viewing your prototype on</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Sharing your design</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <div class="accordion__button py-20 px-30 bg-light-4">
                            <div class="d-flex items-center">
                                <div class="accordion__icon">
                                    <div class="icon" data-feather="chevron-down"></div>
                                    <div class="icon" data-feather="chevron-up"></div>
                                </div>
                                <span class="text-17 fw-500 text-dark-1">Type, Color &amp; Icon Introduction</span>
                            </div>
                        </div>

                        <div class="accordion__content">
                            <div class="accordion__content__inner px-30 py-30">
                                <div class="y-gap-30">

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Introduction to the User</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Getting started with your</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>What is UI vs UX - User Interface vs User Experience vs Product</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Wireframing (low fidelity) in</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Viewing your prototype on</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Sharing your design</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <div class="accordion__button py-20 px-30 bg-light-4">
                            <div class="d-flex items-center">
                                <div class="accordion__icon">
                                    <div class="icon" data-feather="chevron-down"></div>
                                    <div class="icon" data-feather="chevron-up"></div>
                                </div>
                                <span class="text-17 fw-500 text-dark-1">Prototyping a App - Introduction</span>
                            </div>
                        </div>

                        <div class="accordion__content">
                            <div class="accordion__content__inner px-30 py-30">
                                <div class="y-gap-30">

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Introduction to the User</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Getting started with your</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>What is UI vs UX - User Interface vs User Experience vs Product</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Wireframing (low fidelity) in</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Viewing your prototype on</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Sharing your design</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <div class="accordion__button py-20 px-30 bg-light-4">
                            <div class="d-flex items-center">
                                <div class="accordion__icon">
                                    <div class="icon" data-feather="chevron-down"></div>
                                    <div class="icon" data-feather="chevron-up"></div>
                                </div>
                                <span class="text-17 fw-500 text-dark-1">Wireframe Feedback</span>
                            </div>
                        </div>

                        <div class="accordion__content">
                            <div class="accordion__content__inner px-30 py-30">
                                <div class="y-gap-30">

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Introduction to the User</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Getting started with your</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>What is UI vs UX - User Interface vs User Experience vs Product</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Wireframing (low fidelity) in</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Viewing your prototype on</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="d-flex">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>

                                            <div class="">
                                                <div>Sharing your design</div>
                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                    <a href="#"
                                                        class="text-14 lh-1 text-purple-1 underline">03:56</a>
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
        </aside>
    </div>
@endsection
