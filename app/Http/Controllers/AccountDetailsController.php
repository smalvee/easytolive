<?php

namespace App\Http\Controllers;

use App\Models\AccountDetails;
use Illuminate\Http\Request;

class AccountDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('owner.profile', compact('id'));
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
        $accountDetails = new AccountDetails;

        $accountDetails->main_id            = $request->input('main_id');
        $accountDetails->title              = $request->input('title');
        $accountDetails->first_name         = $request->input('first_name');
        $accountDetails->last_name          = $request->input('last_name');
        $accountDetails->country_code       = $request->input('country_code');
        $accountDetails->mobile_number      = $request->input('mobile_number');
        $accountDetails->alt_number         = $request->input('alt_number');
        $accountDetails->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountDetails  $accountDetails
     * @return \Illuminate\Http\Response
     */
    public function show(AccountDetails $accountDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountDetails  $accountDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('owner.editprofile', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccountDetails  $accountDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountDetails $accountDetails)
    {

        $accountDetails = AccountDetails::where('main_id',$request->main_id)->first();

        // dd( AccountDetails::all(), $request->main_id);
        $accountDetails->title              = $request->input('title');
        $accountDetails->first_name         = $request->input('first_name');
        $accountDetails->last_name          = $request->input('last_name');
        $accountDetails->country_code       = $request->input('country_code');
        $accountDetails->mobile_number      = $request->input('mobile_number');
        $accountDetails->alt_number         = $request->input('alt_number');
        $accountDetails->save();
        return redirect()->back()->with('status', 'Add seccessfully');

    }


    public function profile_photo_update(Request $request, AccountDetails $accountDetails)
    {
        $accountDetails = AccountDetails::where('main_id',$request->main_id)->first();

        if ($request->hasfile('profile_picture')) {

            $file = $request->file('profile_picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profile/', $filename);
            $accountDetails->profile_picture = $filename;
        }
        $accountDetails->save();
        return redirect()->back()->with('status', 'Add seccessfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountDetails  $accountDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountDetails $accountDetails)
    {
        //
    }
}
