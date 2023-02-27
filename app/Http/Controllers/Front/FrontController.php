<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function about()
    {
        return view('front.about');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function blog_single()
    {
        return view('front.blog-single');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function courses()
    {
        return view('front.course.courses-list-6');
    }

    public function course_details()
    {
        return view('front.course.course-single-2');
    }

    public function lesson_single()
    {
        return view('front.course.lesson-single-2');
    }

    public function instructors()
    {
        return view('front.instructor.instructor-list-2');
    }

    public function instructor_single()
    {
        return view('front.instructor.instructor-single');
    }

    public function become_instructor()
    {
        return view('front.instructor.instructor-become');
    }
}
