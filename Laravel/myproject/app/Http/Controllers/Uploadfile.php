<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Image;
class Uploadfile extends Controller
{
    public function uploadform()
    {    
    	$data = Image::all();
    	return view('fileupload',['details'=>$data]);
    }
    public function uploaddata(Request $request)
    {
    	$obj = new Image();
    	$imagedata       = $request->file('image');
    	$destinationpath = "uploads/";
    	$filename        = $imagedata->getClientOriginalName();
    	$imagedata->move($destinationpath,$filename);
    	$obj->image = "$filename";
    	$obj->save();
    	$data = Image::all();
    	return view('fileupload',['details'=>$data]);
    }

}
