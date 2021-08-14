<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Databasecontroller extends Controller
{
    public function employeeform(){
    	return view('empform');
    }
    public function insertdata(Request $req){
    $name        = $req->post('empname');
    $designation = $req->post('designation');
    /*DB::beginTransaction();
try {
    DB::insert('insert into employees (name,designation) values (?,?)',[$name,$designation]);
    DB::commit();
    return redirect(route('empform'));
    } 
catch (\Exception $e) {
    DB::rollback();
    }*/
    $success = DB::insert('insert into employees (name,designation) values (?,?)',[$name,$designation]);
    if($success){
    return redirect(route('empform'));
    }
    }
    public function display(){
    $employees = DB::select('select * from employees');
    return view('empdetails',['employees'=>$employees]);
    }
    public function editdata($id){
    $empdata = DB::select('select * from employees where id=?',[$id]);
    return view('empedit',['empdatas'=>$empdata]);
    }
    public function updatedata(Request $request){
    $id    = $request->input('id');
    $name  = $request->input('empname');
    $desig = $request->input('designation');
    DB::update('update employees set name = ?, designation = ? where id = ?',[$name,$desig,$id]);
    return redirect(route('employees'));
    }
    public function deletedata($id){
    DB::delete('delete from employees where id=?',[$id]);
    return redirect(route('employees'));
    }
}
