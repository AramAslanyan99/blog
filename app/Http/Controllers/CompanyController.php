<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    //
    public function index(Request $request,$id)
    {
        $user = User::with(['company'])->find($id);
        dd($user->toArray());
    }
}
