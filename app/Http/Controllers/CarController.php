<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index(){
        $cars = DB::table('cars')->get();
        foreach ($cars as $car) {
            echo $car->brand ." " .$car->year ." " . $car->mileage ." " .  $car->color ." " . $car->price ;
            echo "<br>";
        }
    }

}
