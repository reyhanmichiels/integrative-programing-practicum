<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function home(Request $request)
    {
        $user = $request->user;
        return response()->json([
            'status' => 'Success',
            'message' => 'selamat datang ' . $user->name,
        ], 200);
    }
}
