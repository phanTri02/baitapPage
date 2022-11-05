<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Products;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();

        $new_product = Products::where('new',1)-> paginate(8);

        $promotion_product = Products::where('promotion_price', '<>', 0)-> paginate(4);
        return view('page.trangchu', compact('slide', 'new_product', 'promotion_product'));
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
