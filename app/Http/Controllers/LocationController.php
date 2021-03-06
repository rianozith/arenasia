<?php

namespace App\Http\Controllers;

use App\location;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use Session;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "index location";
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
     * @param  \App\location  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $data = [
            'location' => location::findOrFail($id),
        ];

        return view('admin.location.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\location  $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\location  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, location $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\location  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        //
    }
}
