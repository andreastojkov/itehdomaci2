<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentRating;
use App\Models\Provider;
use App\Models\Service;
use App\Http\Resources\AppointmentRatingResource;
use App\Http\Resources\AppointmentRatingCollection;

class AppointmentRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new AppointmentRatingCollection(AppointmentRating::all());
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
     * @param  \App\Models\AppointmentRating  $apprat
     * @return \Illuminate\Http\Response
     */
    public function show(AppointmentRating $apprat)
    {
        return new AppointmentRatingResource($apprat);
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppointmentRating  $appointmentRating
     * @return \Illuminate\Http\Response
     */
    public function edit(AppointmentRating $appointmentRating)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
