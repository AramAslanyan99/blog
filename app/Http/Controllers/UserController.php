<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(Request $request,$id)
    {
        // $users = DB::table('users')
        //     ->leftJoin('companies', 'users.company_id', '=', 'companies.id')
        //     ->select(['name', 'title as company_id'])
        //     ->get();
        // foreach ($users as $user) {
        //     echo $user->name . " " . $user->company_id . "<br>";
        // }

        //     DB::table('companies')->insert([
        //         ['title' => 'Twitter'],
        //         ['title' => 'TikTok'],
        // ]);

        // DB::table('users')
        //     ->updateOrInsert(
        //         ['email' => 'john@example.com', 'name' => 'John'],
        //         ['password' => '123']
        //     );

        //     DB::table('users')
        //         ->whereNull("company_id")->delete();
        // }

        // $Armenia = DB::table('countries')
        //     ->where("name", "Armenia")->get();
        // $Artsakh = $Armenia[0];
        // $Artsakh->name = "Artsakh";
        // $new = json_encode($Artsakh);
        // $Artsakh = json_decode($new, true);
        // unset($Artsakh["id"]);
        // DB::table('countries')
        //     ->insert(
        //         $Artsakh
        //     );

        // DB::table('countries')
        //     ->updateOrInsert(
        //         $Artsakh
        //     );

        // $user = Auth::user();
        // echo $user?->name;

        // $param = $request->all();
        // dd($request->fullUrl());
        // dd($request->method());
        // dd($request->isMethod('get'));

        $user = User::with(['company'])->find($id);
        dd($user->toArray());

        // foreach($user as $val){
        // //   echo "<pre>"  ;print_r($val->toArray()); echo "</pre>";
        //   echo '<b>User Name</b> : '. $val->name.'<br />';
        //   echo '<b>Identity Number </b> : '. $val->identity?->identity_number .'<br />';
        //   echo '--------------------------------------------- <br/>';
        }

    }

