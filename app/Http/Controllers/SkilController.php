<?php

namespace App\Http\Controllers;

use App\Models\Skil;
use Illuminate\Http\Request;

class SkilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("skil.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skil = new Skil();
        $request->validate([
            "langue" => "required",
            "pourcentage" => "required"
        ]);
        $skil->pourcentage = $request->pourcentage;
        $skil->langue = $request->langue;
        $skil->save();
        return redirect()->route("admin");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skil  $skil
     * @return \Illuminate\Http\Response
     */
    public function show(Skil $skil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skil  $skil
     * @return \Illuminate\Http\Response
     */
    public function edit(Skil $skil)
    {
        return view("skil.edit",compact("skil"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skil  $skil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skil $skil)
    {
        $request->validate([
            "langue" => "required",
            "pourcentage" => "required"
        ]);
        $skil->pourcentage = $request->pourcentage;
        $skil->langue = $request->langue;
        $skil->save();
        return redirect()->route("admin");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skil  $skil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skil $skil)
    {
        $skil->delete();
        return redirect()->back();
    }
}
