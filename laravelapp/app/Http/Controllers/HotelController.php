<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HotelController extends Controller
{
    public function home(Request $request)
    {
        return view('hotel.home');
    }

}
