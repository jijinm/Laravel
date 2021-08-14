<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
class Ratingcontroller extends Controller
{
    public function insertdata(Request $req)
    {    
    $obj = new Rating();
    $obj->name = $req->post('name');
    $obj->email = $req->post('email');
    $obj->rating = $req->post('rating');
    $obj->favactor = $req->post('favactor');
    $obj->favmovie = $req->post('favmovie');
    	
    $mailcheck = Rating::where('email',$obj->email)->get();
    if ( $mailcheck->isNotEmpty() ) {
    /*$alert = 'You have already participated in this game.';*/
    $req->session()->flash('alert','You have already participated in this game.');
    return back();
    /*return back()->with(['alert' => $alert]);*/
    }
    $obj->save();
    $docs = Rating::groupBy('favactor')->selectRaw('sum(rating) as sum, favactor')->get();
    $topact = Rating::groupBy('favactor')->selectRaw('sum(rating) as sum, favactor')->orderBy('sum','DESC')->take(1)->get();
    foreach ($topact as $data) {
    $favactor = $data->favactor;
    }
    if ($obj->favactor == $favactor) {
    $msg = 'Congrats. You have won the free ticket.';
    }
    else{
    $msg = 'Sorry. Better luck next time.';
    }
    return view('ratingresults',['docs'=>$docs, 'message'=> $msg]);
    }
}
