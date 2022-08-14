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
        $createListing = new Createlisting();

        $createListing->user_id            = $request->input('user_id');
        $createListing->property_type      = $request->input('property_type');
        $createListing->estate             = $request->input('estate');
        $createListing->district           = $request->input('district');
        $createListing->property_name      = $request->input('property_name');
        $createListing->address            = $request->input('address');
        $createListing->postal_code        = $request->input('postal_code');
        $createListing->mrt                = $request->input('mrt');
        $createListing->school             = $request->input('school');
        $createListing->comm_structure     = $request->input('comm_structure');
        $createListing->comm_percentage    = $request->input('comm_percentage');
        $createListing->listing_type       = $request->input('listing_type');
        $createListing->price              = $request->input('price');
        $createListing->price_type         = $request->input('price_type');
        $createListing->maintenance_fee    = $request->input('maintenance_fee');
        $createListing->bedrooms           = $request->input('bedrooms');
        $createListing->bathrooms          = $request->input('bathrooms');
        $createListing->floor_size         = $request->input('floor_size');
        $createListing->floor_level        = $request->input('floor_level');
        $createListing->unit_number_unit   = $request->input('unit_number_unit');
        $createListing->currently_tenanted = $request->input('currently_tenanted');
        $createListing->furnishing         = $request->input('furnishing');

        // if(!empty($request->input('furnishing_material')))
        // {
        //     $createListing = join(',',$request->input('furnishing_material'));
        // }
        $createListing->furnishing_material      = join(',', $request->input('furnishing_material'));
        // $createListing->furnishing_material            = $request->input('furnishing_material');

        $createListing->headline           = $request->input('headline');
        $createListing->description        = $request->input('description');

        // if(!empty($request->input('unit_features')))
        // {
        //     $createListing = join(',',$request->input('unit_features'));
        // }

        $createListing->unit_features      = join(',', $request->input('unit_features'));

        $createListing->agent_name         = $request->input('agent_name');
        $createListing->agent_number       = $request->input('agent_number');


        $images = array();
        if ($files = $request->file('file')) {
            $i = 0;
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $fileNameExtract = explode('.', $name);
                $fileName = $fileNameExtract[0];
                $fileName .= time();
                $fileName .= $i;
                $fileName .= '.';
                $fileName .= $fileNameExtract[1];

                $file->move('uploads/property/', $fileName);
                $images[] = $fileName;
                $i++;
            }
            $createListing['image'] = implode("|", $images);

            $createListing->unique_id          = $request->input('unique_id');
            $createListing->created_at         = $request->input('created_at');
            $createListing->updated_at         = $request->input('updated_at');
            $createListing->save();
            return redirect()->back()->with('status', 'Save seccessfully');

            
        } else {
            echo "photo upload failed";
        }

       
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
