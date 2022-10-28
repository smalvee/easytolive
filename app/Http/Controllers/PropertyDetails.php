<?php

namespace App\Http\Controllers;

use App\Models\Createlisting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyDetails extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('owner.propertydetails', compact('id'));
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
        return view('owner.editproperty', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \App\Models\Createlisting  $propertyDetails
     */
    public function photo_update(Request $request, Createlisting $propertyDetails)
    {
        $propertyDetails = Createlisting::where('id', $request->listing_id)->first();
        //dd( Createlisting::all(), $request->id);

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
            $propertyDetails['image'] = implode("|", $images);


            $propertyDetails->save();
            return redirect()->back()->with('status', 'Property Image Update seccessfully');
        }
    }


    public function info_update(Request $request, Createlisting $propertyDetails)
    {
        

        $propertyDetails = Createlisting::where('id', $request->listing_id)->first();


        $propertyDetails->property_type      = $request->input('property_type');

        $propertyDetails->estate             = $request->input('estate');

        // $propertyDetails->district           = $request->input('district');
        // $propertyDetails->property_name      = $request->input('property_name');
        // $propertyDetails->address            = $request->input('address');
        // $propertyDetails->postal_code        = $request->input('postal_code');
        $propertyDetails->mrt                = $request->input('mrt');
        $propertyDetails->school             = $request->input('school');
        // $propertyDetails->comm_structure     = $request->input('comm_structure');
        // $propertyDetails->comm_percentage    = $request->input('comm_percentage');
        $propertyDetails->listing_type       = $request->input('listing_type');
        $propertyDetails->price              = $request->input('price');
        $propertyDetails->price_type         = $request->input('price_type');
        $propertyDetails->maintenance_fee    = $request->input('maintenance_fee');
        $propertyDetails->bedrooms           = $request->input('bedrooms');
        $propertyDetails->bathrooms          = $request->input('bathrooms');
        $propertyDetails->floor_size         = $request->input('floor_size');
        $propertyDetails->floor_level        = $request->input('floor_level');
        // $propertyDetails->unit_number_unit   = $request->input('unit_number_unit');
        $propertyDetails->currently_tenanted = $request->input('currently_tenanted');
        $propertyDetails->furnishing         = $request->input('furnishing');

      
        $propertyDetails->furnishing_material      = join(',', $request->input('furnishing_material'));


        // $propertyDetails->headline           = $request->input('headline');
        // $propertyDetails->description        = $request->input('description');

       

        $propertyDetails->unit_features      = join(',', $request->input('unit_features'));

        // $propertyDetails->agent_name         = $request->input('agent_name');
        // $propertyDetails->agent_number       = $request->input('agent_number');      

        // $propertyDetails->unique_id          = $request->input('unique_id');
        // $propertyDetails->created_at         = $request->input('created_at');
        // $propertyDetails->updated_at         = $request->input('updated_at');
        $propertyDetails->save();
        return redirect()->back()->with('status', 'Property Information Updated seccessfully');

            
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from propertylisting where id = ?',[$id]);
        return redirect()->back()->with('status', 'Property Information Updated seccessfully');

    }
}
