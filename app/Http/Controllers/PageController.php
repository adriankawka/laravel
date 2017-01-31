<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Page;

class PageController extends Controller
{

     public function index()
    {
         return view('pages.page_about');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about(Request $request)
    {
        $products = new Page;
        $products->bodytext = $request->input('makeupStr');
        $products->overview = $request->input('pagetitle');
        $products->diligence = $request->input('pagedue');
        $products->bodycontent = $request->input('pagetext');
        $products->guide = $request->input('pageguide');
        $products->save();
        return redirect()->action('PageController@index');
    }
    public function term()
    {
         // $products = Product::get();
        return view('pages.page_term');
    }
    public function privacy()
    {
         // $products = Product::get();
        return view('pages.page_privacy');
    }
    public function accep()
    {
         // $products = Product::get();
        return view('pages.page_accep');
    }
}
