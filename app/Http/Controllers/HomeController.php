<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Faq;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth::id()) {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {   
                $faq=Faq::all();
                $post = Admin::all();
                $service = Service::all();
                return view('home_page.index', compact('post', 'service', 'faq'));
            }
            else if($usertype=='admin')  {
                $users = User::all();
                return view('home_admin.homepage',compact('users'));
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function homepage() {
        $faq=Faq::all();
        $post = Admin::all();
        $software = Service::where('kategori', 'software')->get();
        $hardware = Service::where('kategori', 'hardware')->get();
        $maintenance = Service::where('kategori', 'maintenance')->get();
        $networking = Service::where('kategori', 'networking')->get();

        return view("home_page.index", compact('post','faq','software','hardware', 'maintenance', 'networking'));
    }
    public function homepage1() {
        $post = Admin::all();

        return view("home_page.news", compact('post'));
    }
    public function post_details(string $id, Request $request) {
        $post = Admin::find($id);
        
        return view('home_page.postdetails', compact('post'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
