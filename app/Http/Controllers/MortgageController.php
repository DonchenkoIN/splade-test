<?php

namespace App\Http\Controllers;

use App\Models\Mortgage;
use App\Tables\Mortgages;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class MortgageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $mortgage = Mortgage::get();

        /*return view('dashboard', [
            'mortgage' => SpladeTable::for($mortgage)
        ]);*/

        return view('dashboard', ['mortgage' => Mortgages::class]);
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
    public function show(Mortgage $mortgage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mortgage $mortgage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mortgage $mortgage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mortgage $mortgage)
    {
        //
    }
}
