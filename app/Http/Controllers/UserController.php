<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function store(Request $request)
    {



        if (User::where('wallet', $request->wallet)->count() == 0) {
            $user = User::create([
                "wallet" => $request->wallet,
                'avatar' => 'http://localhost:8000/img/avatar/A1592.png',
                'name' => fake()->name(),
                'username' => "airDrop",
                'coordinate' => json_encode([51.3380, 51.3380]),
                'email' => fake()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'soil' => rand(15000, 20000),
                'mrg' => rand(10, 15),
                'remember_token' => Str::random(10),
            ]);
        } else {
            $user = User::where('wallet', $request->wallet)->first();
        }

        if ($user) {
            Auth::login($user);
        }
        return redirect()->route('game');
    }
    public function get(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        return $user;
    }

    public function update(Request $request)
    {
        // $user = auth()->user();
        $user = User::find(auth()->user()->id);
        $user->update([
            'username' => $request->username ?? ($user->username ?? ''),
            'avatar' => $request->avatar ?? $user->avatar,
            'coordinate' => $request->coordinate ?? $user->coordinate,
        ]);
        return $user;
    }
}
