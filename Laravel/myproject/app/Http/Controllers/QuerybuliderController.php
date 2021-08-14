<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class QuerybuliderController extends Controller
{
    public function customerform(){
    	return view('custform');
    }
    public function insertdata(Request $req){
    	$name       = $req->post('name');
        $location   = $req->post('location');
        $phone      = $req->post('phone');
        $success    = DB::table('customers')->insert(['name'=>$name, 'location' =>$location, 'phone' => $phone]);
        if($success){
        return redirect(route('custform'));
        }
    }
    public function display(){
    	$customers = DB::table('customers')->get();
    	return view('custdetails',['customers'=>$customers]);
    }
    public function editdata($id){
    	$custdata = DB::table('customers')->where('id',$id)->get();
    	return view('custedit',['custdatas'=>$custdata]);
    }
    public function updatedata(Request $request){
   		$id         = $request->input('id');
    	$name       = $request->post('name');
    	$location   = $request->post('location');
        $phone      = $request->post('phone');
    	DB::table('customers')->where('id',$id)->update(['name'=>$name, 'location'=>$location, 'phone'=>$phone]);
    	return redirect(route('customers'));
    }
    public function deletedata($id){
    	DB::table('customers')->where('id',$id)->delete();
    	return redirect(route('customers'));
    }
}
