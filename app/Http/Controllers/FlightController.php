<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    //

    public function index()
    {
        // $flight = Flight::where('number', 'r6-561')->first();
        // $flight->number = 'FR 456';
        // // $flight->refresh();
        // echo $flight->number; // "FR 900"
        // $flight->save();

        // $max = Flight::orderBy('price', 'desc')->first();
        // dd('max');
        //all-veradardznum e flights table-i bolor toxern   DB::table('flights)->get()


        // $flight = Flight::updateOrCreate(
        //     ['name' => 'Flight 10'],
        //     ['price' => 99, 'number' => 'Af-10']
        // );

        // $flight = Flight::find(7);
        // $flight->delete();


        $flights = Flight::all();
        dd($flights);
    }
}
