<?php

namespace App\Http\Controllers;

use App\Models\Event_User;
use App\Http\Requests\StoreEvent_UserRequest;
use App\Http\Requests\UpdateEvent_UserRequest;

class EventUserController extends Controller
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
     * @param  \App\Http\Requests\StoreEvent_UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEvent_UserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event_User  $event_User
     * @return \Illuminate\Http\Response
     */
    public function show(Event_User $event_User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event_User  $event_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Event_User $event_User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEvent_UserRequest  $request
     * @param  \App\Models\Event_User  $event_User
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEvent_UserRequest $request, Event_User $event_User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event_User  $event_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event_User $event_User)
    {
        //
    }
}
