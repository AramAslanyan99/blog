<?php

namespace App\Http\Controllers;

use App\Models\TestForm;
use Illuminate\Http\Request;



class TestFormController extends Controller
{
    //
    public function index()
    {
        return view('testForm');
    }
    public function test(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha',
            'email' => 'required|email:rfc,dns',
            'address' => 'alpha_num',
            'password' => 'required|min:8|max:30'
        ]
    );
    $testForm = new TestForm;
    $testForm->name = $request->name;
    $testForm->email = $request->email;
    $testForm->address = $request->address;
    $testForm->password = $request->password;
    $testForm->save();

    return redirect('testForm')->with('status', 'Blog Post Form Data Has Been inserted');



}
}
