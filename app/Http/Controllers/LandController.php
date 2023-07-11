<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\User;
use Illuminate\Http\Request;

class LandController extends Controller
{
    public function land_change_owner(Request $request)
    {
        $land = Land::where('id',$request->land_id);
        $land->update([
            'user_id' => $request->user_id
        ]);
        $user = User::where('id',auth()->user()->id);
        $user->update([
            'soil'=> (auth()->user()->soil - $land->first()->price)
        ]);
        return true;

        // FIXME bayad buy owner pool kam kone na change owner

    }
    public function land_change_price(Request $request)
    {
        $land = Land::where('id',$request->land_id);
        $land->update([
            'price' => $request->price
        ]);
        return true;
    }
}
