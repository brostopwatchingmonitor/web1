<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\liststuff;

class ServiceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        // Ambil data service berdasarkan ID
        $service = Service::with('liststuffs')->findOrFail($id);
        return view('home_page.service_details', compact('service'));
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
