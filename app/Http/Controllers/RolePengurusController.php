<?php

namespace App\Http\Controllers;

use App\Models\RolePengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolePengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rolePengurus = DB::table('rolePengurus')->get();
        $rolePengurus = RolePengurus::all();
        return view('register', compact('role_pengurus'));
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
     * @param  \App\Models\RolePengurus  $rolePengurus
     * @return \Illuminate\Http\Response
     */
    public function show(RolePengurus $rolePengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RolePengurus  $rolePengurus
     * @return \Illuminate\Http\Response
     */
    public function edit(RolePengurus $rolePengurus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RolePengurus  $rolePengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RolePengurus $rolePengurus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RolePengurus  $rolePengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolePengurus $rolePengurus)
    {
        //
    }
}
