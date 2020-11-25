<?php

namespace App\Http\Controllers;

use App\Models\welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(welcome $welcome)
    {
        //
    }
}
