<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mymodel;
use App\Models\Students;
use App\Models\Collegestudent;
class Check extends Controller
{
    public function myfunction()
    {
    	$data = ['name'=>'Jijin','course'=>'B Tech','interests'=>'Sports,Fitness'];
    	return view('new',$data);
    }

    public function getusers(){
    	$datas = Mymodel::all();
    	$users['data'] = json_decode($datas);
    	return view('users',$users);
    }

    public function myform()
    {    
    	return view('myform');
    }
    public function insertdetails(Request $req)
    {    
    	$validated = $req->validate([
        'username' => 'required|alpha']);
    	$obj = new Mymodel();
    	$obj->name = $req->post('username');
    	$obj->save();
    	return back();
    	/*return redirect('/myform');*/
    }
    public function registration()
    {    
    	return view('stud_register');
    }
    public function insertdata(Request $request)
    {    
    	$validated = $request->validate([
        'studname' => 'required|alpha|min:3',
        'course' => 'required',
        'place'  => 'required|alpha',
        'phone'  => 'required|integer|regex:/[0-9]{10}/',
    ]);
        Students::create($validated);
    	return back();
    }
    public function collegestudregister()
    {    
    	return view('collegestudentregister');
    }
    public function registerdata(Request $request)
    {    
    	$validate = $request->validate([
        'name' => 'required|alpha|min:3',
        'branch' => 'required|alpha',
        'totalmarks'  => 'required|integer',
    ]);
        Collegestudent::create($validate);
    	return back();
    }
    public function viewallstudents(){
    	$data = Collegestudent::all();
    	return view('students',['details'=>$data]);
    }
    public function viewtoppers(){
    	$civmax = Collegestudent::where('branch','Civil')->max('totalmarks');
    	$data['civil']= Collegestudent::where([
                            ["branch", "=", 'Civil'],
                            ["totalmarks", "=", $civmax]
                        ])->get();
    	$mecmax = Collegestudent::where('branch','Mechanical')->max('totalmarks');
    	$data['mechanical']= Collegestudent::where([
                            ["branch", "=", 'Mechanical'],
                            ["totalmarks", "=", $mecmax]
                        ])->get();
    	$elemax = Collegestudent::where('branch','Electrical')->max('totalmarks');
    	$data['electrical']= Collegestudent::where([
                            ["branch", "=", 'Electrical'],
                            ["totalmarks", "=", $elemax]
                        ])->get();
    	return view('toppers',$data);
    }
    public function viewcount(){
    	$civcount = Collegestudent::where('branch','Civil')->count();
    	$meccount = Collegestudent::where('branch','Mechanical')->count();
    	$elecount = Collegestudent::where('branch','Electrical')->count();
    	$count = ['civil'=>$civcount,'mechanical'=>$meccount,'electrical'=>$elecount];
    	return view('count',$count);
    }
    public function calculator(){
        return view('calculator');
    }
    public function getresult(Request $request){
       $mark1 = $request->post('num1');
       $mark2 = $request->post('num2');
       if (isset($_POST['add'])) {
       $sum = $mark1+$mark2;
       $result = ['add'=>$sum ];
       return view('result',$result);
       }
       else if (isset($_POST['subtract'])) {
       $diff = $mark1-$mark2;
       $result = ['sub'=>$diff ];
       return view('result',$result);
       }
       else if (isset($_POST['multiply'])) {
       $mul = $mark1*$mark2;
       $result = ['mul'=>$mul ];
       return view('result',$result);
       }
       else if (isset($_POST['divide'])) {
       $div = $mark1/$mark2;
       $result = ['div'=>$div ];
       return view('result',$result);
       }
    }
}
