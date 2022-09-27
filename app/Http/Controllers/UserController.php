<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $pageName = "User Login Page";
        return view('home.login');
    }
    public function register()
    {
        return view('home.register');
    }
    public function UserRegistration(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'gender'=>'required',
            'password'=>'required',
            ]);
        //  if($validator->fails())
        //  {
        //     $error = array([
        //         'status' => 'error',
        //         'message' => 'all field required'
        //     ]);
        //     return json_encode($error);
        //  }
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'dob' => $request->birthday_day.'-'.$request->birthday_month.'-'.$request->birthday_year,
        ]);
        return json_encode(['data' => $user]);
    }
}
