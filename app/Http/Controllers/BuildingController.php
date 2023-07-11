<?php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function building_create(Request $request)
    {
        $building_id = $request->building_id;
        $land = Land::find($building_id);
        return view('building', compact('land'));
    }
    public function building_store(Request $request)
    {
        $land = Land::where('id', $request->land_id);
        $land->update([
            'picture' => $request->picture
        ]);
        return redirect()->route('game')->with('msg','Bulding updated');
        // dd($request);
        // Land::
    }
}
