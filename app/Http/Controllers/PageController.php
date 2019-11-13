<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	// $new_product = Product::where('new',1)->paginate(4);
    	$new_product= Product::paginate(4,["*"],'pag');
    	$sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
    	// return view('page.trangchu',['slide'=>$slide]);
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSp($type){
    	$sp_theoloai = Product::where('id_type',$type)->get();
    	return view('page.loai_sanpham',compact('sp_theoloai'));
    }

    public function getChiTiet(){
    	return view('page.chitiet_sanpham');
    }

     public function getLienHe(){
    	return view('page.lienhe');
    }

    public function getGioiThieu(){
    	return view('page.gioithieu');
    }


}
