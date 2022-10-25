<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('page.trangchu');
    }

    public function getModel()
    {
        return view('page.product_model');
    }

    public function getDetail()
    {
        return view('page.product_detail');
    }

    public function getContact()
    {
        return view('page.contact');
    }

    public function getAbout()
    {
        return view('page.about');
    }
}
