<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Product;
use App\Models\Banner;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::get();
          // $products = \DB::table('products')->get();
          return view('admin.admin', ['products'=> $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function call()
    {
         $products = Product::get();
         return view('products.product_call', ['products'=> $products]);
    }

    public function calledit(Request $request)
    {
        $id = $request->input('id');
        $products = Product::find($id);
        // return Response::json(array('products' => $products));
        return response()->json(['products' => $products]);
    }



    public function create(Request $request)
    {
        $id = $request->input('id');
        $product = Product::find($id);
        $product->featured = '1';
        $product->save();
    }

    public function remove(Request $request)
    {
        $id = $request->input('id');
        $product = Product::find($id);
        $product->featured = '0';
        $product->save();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new product;
        $products->title            = $request->input('title');
        $products->location             = $request->input('location');
        $products->type       = $request->input('type');
        $products->price        = $request->input('price');
        $products->description            = $request->input('description');
        $products->yield             = $request->input('yield');
        $products->strategy       = $request->input('strategy');
        $products->launchdate        = $request->input('launchdate');
        $products->country            = $request->input('country');
        $products->contactname             = $request->input('contactname');
        $products->contactnumber       = $request->input('contactnumber');
        $products->contactemail        = $request->input('contactemail');
        $products->companyname            = $request->input('companyname');
        $products->websiteadress             = $request->input('websiteadress');
        $file = $request->file('file');
        $destination_path = base_path() . '/public/uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $result = $file->move( $destination_path, $filename);
        $result = str_replace(base_path() . '/public/uploads/', '', $result);
        $products->mainimage = $result;
        $products->images = $result;
        $brochure_upload = $request->file('brochure_upload');
        $destination_path = base_path() . '/public/uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $result_up = $brochure_upload->move( $destination_path, $filename);
        $result_up = str_replace(base_path() . '/public/uploads/', '', $result_up);
        $products->brochureupload = $result_up;
        $products->save();
        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



    public function featured()
    {
        $products = \DB::table('products')->where('featured', '1')->get();
         return view('products.product_featured', ['products'=> $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.product_edit', ['products'=> $products]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title            = $request->input('title');
        $product->location             = $request->input('location');
        $product->type       = $request->input('type');
        $product->price        = $request->input('price');
        $product->description            = $request->input('description');
        $product->yield             = $request->input('yield');
        $product->strategy       = $request->input('strategy');
        $product->launchdate        = $request->input('launchdate');
        $product->country            = $request->input('country');
        $product->contactname             = $request->input('contactname');
        $product->contactnumber       = $request->input('contactnumber');
        $product->contactemail        = $request->input('contactemail');
        $product->companyname            = $request->input('companyname');
        $product->websiteadress             = $request->input('websiteadress');
        $file = $request->file('file');
        $destination_path = base_path() . '/public/uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $result = $file->move( $destination_path, $filename);
        $result = str_replace(base_path() . '/public/uploads/', '', $result);
        $product->mainimage = $result;
        $product->images = $result;
        $brochure_upload = $request->file('brochure_upload');
        $destination_path = base_path() . '/public/uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $result_up = $brochure_upload->move( $destination_path, $filename);
        $result_up = str_replace(base_path() . '/public/uploads/', '', $result_up);
        $product->brochureupload = $result_up;
        $product->save();
        return redirect()->action('ProductController@edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function callupdate(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->save();
    }

    public function destroy(Request $request)
    {
        // $products = Product::find($id);
        $id = $request->input('id');
        $product = Product::find($id);
        $product->delete();
    }

    public function stat()
    {
        $products = Product::get();
        return view('products.product_status', ['products'=> $products]);
    }
    public function stat_remove(Request $request)
    {
        $id = $request->input('id');
        $product = Product::find($id);
        $product->visitor = '0';
        $product->enquire = '0';
        $product->save();
    }

     public function main()
    {
        $products = \DB::table('products')->where('featured', '1')->get();
        $banners = banner::get();
        return view('index', [
            'products'=> $products,
            'banners'=>  $banners         
            ]
        );
    }

    public function productdetail($id)
    {
        $product = Product::find($id);
        $products = \DB::table('products')->where('featured', '0')->get();
        // $banners = banner::get();
        return view('products.product-detail', [
            'product'=> $product,
            'products'=>  $products         
            ]
        );
    }

    public function products()
    {
        $products = \DB::table('products')->where('featured', '1')->get();
        return view('products.product', [
            'products'=> $products
            ]
        );
    }


}
