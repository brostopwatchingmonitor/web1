<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = Faq::all();
        return view('home_admin.faq', compact('faq'));
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
        

        $faq=new Faq;
        $faq->title = $request->title;
        $faq->description = $request->description;

        ///
        
        $faq->save() ;
        return redirect()->back()->with('message', 'faq added successfully');
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
        $faq = Faq::find($id);
           
        return view('home_admin.edit_faq',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $faq = Faq::find($id);
        $faq->title = $request->title;
        $faq->description = $request->description;
        
        $faq->save();
        return redirect('/faq')->with('message1', 'faq Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->back()->with('message', 'faq Delete successfully');
    }
}
