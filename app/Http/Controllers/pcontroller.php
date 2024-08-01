<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
class pcontroller extends Controller
{
    
public function index($id)
{
$post=posts::where("id",$id)->first();
if(!$post)
{

 abort(404);
}
$data=array(
 "Number"=>$post
);
return view('posts',$data);
}

}
