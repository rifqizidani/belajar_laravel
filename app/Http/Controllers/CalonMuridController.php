<?php

namespace App\Http\Controllers;

use App\Models\CalonMurid;
use Illuminate\Http\Request;

class CalonMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calon_murid = [
            'nama' => 'Donald Trump',
            'alamat' => 'United States',
        ];
        return view('CalonMurid.index', $calon_murid);
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
    public function show(CalonMurid $calonMurid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalonMurid $calonMurid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalonMurid $calonMurid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalonMurid $calonMurid)
    {
        //
    }
}
