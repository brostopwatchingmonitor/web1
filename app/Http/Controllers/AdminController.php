<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home_admin.post_page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        date_default_timezone_set('Asia/Jakarta');
        $user= Auth()->user();
        $user_id=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;

        $post=new Admin;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';
        $post->topic =$request->topic;

        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;
        ///
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename; 
        }
        
        $post->save() ;
        return redirect()->back()->with('message', 'Post added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        $post = Admin::all();

        return view('home_admin.showpost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin,string $id)
    {
        $post = Admin::find($id);
           
        return view('home_admin.edit_page',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin,string $id)
    {   
        date_default_timezone_set('Asia/Jakarta');
        $data = Admin::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->topic =$request->topic;
        $image=$request->image;
        if ($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $data->image = $imagename; 
        }
        $data->save();
        return redirect('/show_post')->with('message1', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin,$id)
    {
        $post = Admin::find($id);
        $post->delete();
        return redirect()->back()->with('message', 'Post Delete successfully');
    }
}
