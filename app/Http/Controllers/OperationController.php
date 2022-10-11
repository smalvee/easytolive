<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Createlisting;

class OperationController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    /**
     * Customize.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function owner_history()
    {
        return view('admin.owner_history');
    }

    public function renter_history()
    {
        return view('admin.renter_history');
    }

    public function user_profile($id)
    {
        return view('admin.user_profile_view', compact('id'));
    }

    public function all_properties()
    {
        return view('admin.all_properties_list');
    }

    public function review($id)
    {
        return view('admin.review', compact('id'));
    }

    public function status_update(Request $request, Createlisting $status_updation)
    {
        $status_updation = Createlisting::where('id', $request->listing_id)->first();


        $status_updation->status      = $request->input('status');
        $status_updation->save();
        return redirect()->back()->with('status', 'Property Status Updated seccessfully');
    }

    public function pending_properties()
    {
        return view('admin.pending_properties');
    }

    public function rejected_properties()
    {
        return view('admin.rejected_properties');
    }
    
}
