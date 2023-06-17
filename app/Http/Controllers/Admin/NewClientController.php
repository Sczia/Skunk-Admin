<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\User;
use COM;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::where('type', '=', 'new client')->get();
        return view('AMS.backend.admin-layouts.client.new.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AMS.backend.admin-layouts.client.new.create');
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
    public function update(Request $request, $id)
    {
        try {

            $client = Clients::findOrFail($id);
            $client->update(['type' => 'old client']);
            User::create([
                'name' => $client->name,
                'email' => $client->email,
                'password' => Hash::make($request->password),
                'role_id' => 2,
                'client_id' => $client->id,
            ]);

            return redirect()->back()->with('successToast', 'Client Accepted Successfully!');
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

            $client = Clients::findOrFail($id);
            $client->delete();

            return redirect()->back()->with('successToast', 'Deleted Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorAlert', $th->getMessage());
        }
    }
}
