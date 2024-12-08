<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\liststuff;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   {
       $services = Service::with('liststuffs')->get();
       return view('home_admin.service', compact('services'));
   }

   public function create()
   {
       
   }

   public function store(Request $request)
   {
       $service = Service::create($request->validate([
           'title' => 'nullable|string',
           'description' => 'nullable|string|max:1000',
           'image1' => 'nullable|image',
           'image2' => 'nullable|image', 
           'kategori' => 'required|in:hardware,software,maintenance,networking'
       ]));

       if($request->hasFile('image1')) {
           $service->image1 = $request->file('image1')->store('services1','public');
       }
       if($request->hasFile('image2')) {
           $service->image2 = $request->file('image2')->store('services2','public');
       }
       $service->save();

       if($request->has('descriptions')) {
           foreach($request->descriptions as $key => $description) {
               if($request->hasFile("images.$key")) {
                   $image = $request->file("images.$key")->store('liststuffs','public');
                   Liststuff::create([
                       'service_id' => $service->id,
                       'description' => $description,
                       'image_list' => $image
                   ]);
               }
           }
       }

       return redirect()->route('services.index');
   }

   public function show(Service $service)
   {
   }

   public function edit(Service $service)
   {
       return view('home_admin.edit_service', compact('service'));
   }

   public function update(Request $request, Service $service)
   {
       $service->update($request->validate([
           'title' => 'nullable|string',
           'description' => 'nullable|string|max:1000',
           'image1' => 'nullable|image',
           'image2' => 'nullable|image',
           'kategori' => 'required|in:hardware,software,maintenance,networking'
       ]));

       if($request->hasFile('image1')) {
           Storage::delete($service->image1);
           $service->image1 = $request->file('image1')->store('services1','public');
       }
       if($request->hasFile('image2')) {
           Storage::delete($service->image2);
           $service->image2 = $request->file('image2')->store('services2','public');
       }
       $service->save();

       // Handle existing liststuffs updates
       if($request->has('existing_descriptions')) {
           foreach($request->existing_descriptions as $id => $description) {
               $liststuff = Liststuff::find($id);
               if($liststuff) {
                   $liststuff->description = $description;
                   if($request->hasFile("existing_images.$id")) {
                       Storage::delete($liststuff->image_list);
                       $liststuff->image_list = $request->file("existing_images.$id")->store('liststuffs','public');
                   }
                   $liststuff->save();
               }
           }
       }

       // Handle new liststuffs
       if($request->has('descriptions')) {
           foreach($request->descriptions as $key => $description) {
               if($request->hasFile("images.$key")) {
                   $image = $request->file("images.$key")->store('liststuffs','public');
                   Liststuff::create([
                       'service_id' => $service->id,
                       'description' => $description,
                       'image_list' => $image
                   ]);
               }
           }
       }

       return redirect('/services');
   }

   public function destroy(Service $service)
   {
       Storage::delete([$service->image1, $service->image2]);
       foreach($service->liststuffs as $liststuff) {
           Storage::delete($liststuff->image_list);
       }
       $service->delete();
       return redirect('/services');
   }

   public function deleteListstuff(Liststuff $liststuff)
   {
       Storage::delete($liststuff->image_list);
       $liststuff->delete();
       return back();
   }
}

