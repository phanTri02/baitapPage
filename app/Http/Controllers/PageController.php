<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Products;
use App\Models\Producttype;
use App\Models\Comment;
use App\Models\Cart;


class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();

        $new_product = Products::where('new',1)-> paginate(8);

        $promotion_product = Products::where('promotion_price', '<>', 0)-> paginate(4);
        return view('page.trangchu', compact('slide', 'new_product', 'promotion_product'));
    }

    public function getLoaiSp($type)
    {
        $type_product = Producttype::all();

        $sp_theoloai = Products::where('id_type',$type)->get();

        $sp_khac = Products::where('id_type', $type)->paginate(3);

        $loai_sp = Producttype::where('id', $type)->first();

        return view('page.loai_sanpham', compact('type_product','sp_theoloai', 'sp_khac', 'loai_sp'));
    }

    public function getModel()
    {
    
        return view('page.product_model');
    }

    public function getDetail(Request $request)
    {
        $sanpham = Products::where('id', $request->id)->first();
        $splienquan = Products::where('id', '<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments = Comment::where('id_product', $request->id)->get();
        return view('page.product_detail', compact('sanpham', 'splienquan', 'comments'));
    }

    public function getAddToCart(Request $req, $id) 
    {
        $product = Products::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getDelItemCart($id)
    {
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return redirect()->back();
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
