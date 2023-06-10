<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NewClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::all();
        return view('AMS.backend.admin-layouts.client.index', compact('clients'));
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
            Clients::create([
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'address' => $request->address,
                'number' => $request->number,
            ]);
            return redirect()->back()->with('successToast', 'Information Added Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorAlert', $th->getMessage());
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
            Clients::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'address' => $request->address,
                'number' => $request->number,

            ]);
            return redirect()->back()->with('successToast', 'Information Updated Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorAlert', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Clients::where('id', $id)->delete();
            return redirect()->back()->with('successToast', 'Subject Deleted Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorAlert', $th->getMessage());
        }
    }
}
