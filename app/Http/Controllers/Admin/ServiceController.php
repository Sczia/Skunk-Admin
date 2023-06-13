<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('AMS.backend.admin-layouts.service.index', compact('services'));
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
        try {
            Service::create([
                'service' => $request->service,
            ]);
            
            return back()->with('successToast', 'Service Created Successfully.');
        } catch (\Throwable $th) {
            return back()->with('errorAlert', $th->getMessage());
        }
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
        try {
            $service = Service::findOrFail($id);
            $service->update([
                'service' => $request->service,
                'price' => $request->price
            ]);
            return back()->with('successToast', 'Service Updated Successfully.');
        } catch (\Throwable $th) {
            return back()->with('errorAlert', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $service = Service::findOrFail($id);
            $service->delete();
            return back()->with('successToast', 'Service Deleted Successfully.');
        } catch (\Throwable $th) {
            return back()->with('errorAlert', $th->getMessage());
        }
    }
}
