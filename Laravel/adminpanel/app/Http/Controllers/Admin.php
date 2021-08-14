<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminuser;
class Admin extends Controller
{
    public function insertdata(Request $req)
    {    
    	$req->validate([
        'name'      => 'required|alpha|min:3',
        'email'     => 'required',
        'mobile'    => 'required|integer|regex:/[0-9]{10}/',
        'city'      => 'required',
        'password'  => 'required|min:5',
        'interests' => 'required',
        'image'     => 'required|image|mimes:jpeg,png,jpg|max:2048']);
    	$obj = new Adminuser();
    	$obj->name = $req->post('name');
    	$obj->email = $req->post('email');
    	$obj->mobile = $req->post('mobile');
    	$obj->city = $req->post('city');
    	$obj->password = md5($req->post('password'));
    	$obj->interests = json_encode($req->post('interests'));
        $mailcheck = Adminuser::where('email',$obj->email)->get();
        if ( $mailcheck->isNotEmpty() ) {
        $alert = 'Email Already Exists.';
        return back()->with(['alert' => $alert]);
        }
        if ($image = $req->file('image')) {
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $obj->image = "$profileImage";
        }
    	$obj->save();
        $msg = 'Registration successful.';
    	return back()->with(['msg' => $msg]);
    }
    public function loginwithdata(Request $request){
        $validatedata = $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);
        $data     = $request->input();
        $pwd      = md5($data['password']);
        $userdata = Adminuser::where([
                            ["email", "=", $data['email']],
                            ["password", "=", $pwd]
                        ])->get();
        if ( $userdata->isEmpty() ) {
        $msg = 'Record not found.';
        return back()->with(['msg' => $msg]);
        }
        foreach ($userdata as $udata) {
            $id = $udata->id;
        }
        $request->session()->put('userid',$id);
        return redirect(route('home'));
    }
    public function profile(){
        if (session()->has('userid')) {
           $id = session('userid');
        }
        $userdata = Adminuser::findOrFail($id);
        $interests = json_decode($userdata->interests);
        return view('profile',['userdata'=>$userdata,'interests'=>$interests]);
    }
    public function updatedata(Request $request){
        $request->validate([
        'name'      => 'required|alpha|min:3',
        'email'     => 'required',
        'mobile'    => 'required|integer|regex:/[0-9]{10}/',
        'city'      => 'required',
        'interests' => 'required',
        'image'     => 'image|mimes:jpeg,png,jpg|max:2048']);
        if (session()->has('userid')) {
           $id = session('userid');
        }
        $input  = $request->input();
        $data   = Adminuser::find($id);
        $data->name  = $input['name'];
        $data->email = $input['email'];
        $data->mobile = $input['mobile'];
        $data->city = $input['city'];
        $data->interests = json_encode($input['interests']);
        if ($image = $request->file('image')) {
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
        if(file_exists(public_path('images/'.$data->image))){
        unlink(public_path('images/'.$data->image));
        }
        $data->image = $input['image'];
        }
        $data->save();
        $msg = 'Profile updated successfully.';
        return back()->with(['msg' => $msg]);
    }
    public function changepwd(Request $req){
        $validation = $req->validate([
            'password'              => 'required|min:5|confirmed',
            'password_confirmation' => 'required'
        ]);
        if (session()->has('userid')) {
           $id = session('userid');
        }
        $input  = $req->input();
        $pwd    = md5($input['password']);
        $data   = Adminuser::find($id);
        $data->password = $pwd;
        $data->save();
        $msg = 'Password changed successfully.';
        return back()->with(['msg' => $msg]);
    }
    public function logout(){
        if (session()->has('userid')) {
           session()->pull('userid');
        }
        return redirect(route('home'));
    }

}
