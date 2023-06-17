<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\Record;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type = null)
    {
        $totalExpenses = Expense::whereDate('created_at', now())->sum('price');
        if ($type != null) {
            switch ($type) {
                case 'weekly':
                    $totalExpenses = Expense::whereBetween('created_at', [now()->subDays(8), now()->addDay()])->sum('price');
                    break;
                case 'monthly':
                    $totalExpenses = Expense::whereBetween('created_at', [now()->startOfMonth()->subDay(), now()->endOfMonth()->addDay()])->sum('price');
                    break;
            }
        }

        $latestRecords = Record::with('car', 'service', 'client', 'size')->latest()->paginate(5);
        return view('AMS.backend.admin-layouts.dashboard.index', compact('totalExpenses', 'latestRecords','type'));
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
