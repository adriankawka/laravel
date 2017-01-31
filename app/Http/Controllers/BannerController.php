<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;

use App\Http\Requests;
use Image;
class BannerController extends Controller
{
     
    public function index()
    {
        $banners = banner::get();
        return view('products.product_scroller', ['banners'=> $banners]);
    }

	public function update_avatar(Request $request, $id){

		// Handle the user upload of avatar
     
        //$input = $request->all();
        // uploads image
        
        if( $request->hasFile('avatar')){

            $banner = banner::find($id);

            $file = $request->file('avatar');
            $destination_path = base_path() . '/public/uploads/';
            
            $filename = str_random(6).'_'.$file->getClientOriginalName();

            $result = $file->move( $destination_path, $filename);
            $result = str_replace(base_path() . '/public/uploads/', '', $result);
            $banner->avatar = $result;
            $banner->save();
        }
        return redirect()->action('BannerController@index');
	}

	public function scrolleredit(Request $request)
    {
        $id = $request->input('id');
        $banner = banner::find($id);
        // return Response::json(array('products' => $products));
        return response()->json(['banner' => $banner]);
    }

    public function scrollerupdate(Request $request, $id)
	{
        $banner = banner::find($id);
        $banner->title = $request->input('title');
        $banner->smalltext = $request->input('smalltext');
        $banner->save();
	}

}
	

