<?php

namespace App\Http\Controllers;

use App\Models\userLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([

            'email'=>'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/');
        }
        return redirect('/login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logs(Request $request)
    {
     //print_r($request->input());
     
     $email = $request->input('email');
    
     $password = $request->input('password');

     $data=DB::select('SELECT id from users where email=? and password=?',[$email,$password]);

     if(count($data))
     {
        return redirect('/profile');
    }
    else{
        return redirect('/login');
    }}

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userLogin  $userLogin
     * @return \Illuminate\Http\Response
     */
    public function show(userLogin $userLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userLogin  $userLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(userLogin $userLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userLogin  $userLogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userLogin $userLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userLogin  $userLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(userLogin $userLogin)
    {
        //
    }
}
