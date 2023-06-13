<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class ClientRecordController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Record::where('type' , '=', 'old client')->get();
        return view('AMS.backend.admin-layouts.record.index', compact('records'));
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
            Record::create([
                'name' => $request->name,

            ]);
            return redirect()->back()->with('successToast', 'Subject Added Successfully!');
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
            Record::where('id', $id)->update([
                'name' => $request->name,

            ]);
            return redirect()->back()->with('successToast', 'Subject Updated Successfully!');
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
            Record::where('id', $id)->delete();
            return redirect()->back()->with('successToast', 'Subject Deleted Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorAlert', $th->getMessage());
        }
    }
}
