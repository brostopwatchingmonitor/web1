<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();
        return view('home_admin.service', compact('service'));
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


        $service=new Service;
        $service->title = $request->title;
        $service->description = $request->description;

        ///
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('serviceimage', $imagename);
            $service->image = $imagename;
        }

        $service->save() ;
        return redirect()->back()->with('message', 'Service added successfully');
    }

    /**
     * Display the specified resource. untuk detail services
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);

        return view('home_admin.edit_service',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $service = Service::find($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $image=$request->image;
        if ($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('serviceimage', $imagename);
            $service->image = $imagename;
        }
        $service->save();
        return redirect('/services')->with('message1', 'Service Updated Successfully');
    }
//
//
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('message', 'service Delete successfully');
    }
}
