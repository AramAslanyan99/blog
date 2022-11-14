<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $country = DB::table('countries')
            ->where('region_name', '=', 'Africa')->first();
        echo "<pre>";
        print_r($country);
        echo "</pre>";
        // return view('greeting', ["countries" => $country]);
    }
}
