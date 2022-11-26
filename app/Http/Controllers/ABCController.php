<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ABCController extends Controller
{
    //
    // public function __construct()
    // {
    //         $this->middleware('terminate');
    // }
    // public function index(Request $request) {
        // $request->session()->put('key', 1);
        // $request->session()->forget('key');
        // $request->session()->flush();
        // $request->session()->push('users', 'John');
        // $request->session()->push('users', 'Alex');
        // $request->session()->push('users', 'Carl');
        //  dd($request->session()->get('key'));
        //  dd($request->session()->all());

        public function __construct()
        {
            $this->middleware('second')->only('index');

        }
         public function index() {
            $countries = DB::table('countries')->paginate(15);
            return view(
            'countries.index',
            ['countries' => $countries]
            );
            }

        }


