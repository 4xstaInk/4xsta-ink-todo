<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

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
     //print_r($request->input());
     $name = $request->input('name');
     $email = $request->input('email');
     $password = $request->input('password');

     echo DB::insert('insert into users(id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);
     return redirect('/login');
    }

    public function profile()
    {
        $todos = Todo::latest()->get();
        return view('/profile')->with('todos',$todos);
    }
    
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userController  $userController
     * @return \Illuminate\Http\Response
     */
    public function show(userController $userController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userController  $userController
     * @return \Illuminate\Http\Response
     */
    public function edit(userController $userController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userController  $userController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userController $userController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userController  $userController
     * @return \Illuminate\Http\Response
     */
    public function destroy(userController $userController)
    {
        //
    }
}
