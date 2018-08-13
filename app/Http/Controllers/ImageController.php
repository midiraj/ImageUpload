<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(ImageRequest $request){
    	if ($request->hasFile('image')) {
    		$imageName = $request->image->getClientOriginalName();
    		$request->image->storeAs('/public',$imageName);
    	}
    		$request->user()->avatar = $imageName;
    		$request->user()->save();
    		return back();
    }
}
