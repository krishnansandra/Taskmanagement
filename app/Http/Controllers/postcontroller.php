<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $post=posts::all();
        if(!$post)
        {
          abort(404);
        }
        $data=array(
          "post"=>$post
        );
        return view('posts',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createposts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       request()->validate(
        ['title'=>'required',
        'description'=>'required']);  
       $post= new posts();
       $post->title=request("title");
       $post->description=request("description");
       $post->save();
       return redirect("/posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $post=posts::find($id);
        
        return view('show',["post"=>$post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $post=posts::find($id);
        return view('editposts',["post"=>$post]);

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
        
        $post=posts::find($id);
        $post->title=request("title");
        $post->description=request("description");
        $post->save();
        return redirect("/posts");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function del($id)
     {
         $post=posts::find($id);
         return view('showposts',["post"=>$post]);
     }

    public function destroy($id)
    {
        
        $post=posts::find($id);
        $post->delete();
        return redirect("/posts");

    }

    public function list()
   {
        
    $post=posts::all();
        
       return view('list');

   }

}
