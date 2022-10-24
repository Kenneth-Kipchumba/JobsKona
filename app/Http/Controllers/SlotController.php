<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreslotRequest;
use App\Http\Requests\UpdateslotRequest;
use App\Models\slot;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreslotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreslotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function show(slot $slot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function edit(slot $slot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateslotRequest  $request
     * @param  \App\Models\slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateslotRequest $request, slot $slot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function destroy(slot $slot)
    {
        //
    }
}
