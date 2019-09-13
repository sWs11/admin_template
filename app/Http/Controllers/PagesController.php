<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function page1() {
        return view('pages.page_1');
    }

    public function page2() {
        return view('pages.page_2');
    }

    public function page3() {
        return view('pages.page_3');
    }

    public function page4() {
        return view('pages.page_4');
    }

    public function page5() {
        return view('pages.page_5');
    }
}
