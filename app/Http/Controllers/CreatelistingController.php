<?php

namespace App\Http\Controllers;

use App\Models\Createlisting;
use Illuminate\Http\Request;

class CreatelistingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('owner.listings', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Createlisting  $createlisting
     * @return \Illuminate\Http\Response
     */
    public function show(Createlisting $createlisting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Createlisting  $createlisting
     * @return \Illuminate\Http\Response
     */
    public function edit(Createlisting $createlisting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Createlisting  $createlisting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Createlisting $createlisting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Createlisting  $createlisting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Createlisting $createlisting)
    {
        //
    }
}
