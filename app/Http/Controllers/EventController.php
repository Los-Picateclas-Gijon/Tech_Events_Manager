<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use GuzzleHttp\Psr7\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::paginate(5);
        return view('events')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event=new Event();

        $event->name=$request->get('title');
        $event->image=$request->get('image');
        $event->description=$request->get('description');
        $event->date=$request->get('date');
        $event->hour=$request->get('hour');
        $event->current_capacity=$request->get('home');
        $event->max_capacity=$request->get('max_capacity');
        $event->location_id=$request->get('home');

        $event->save();
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=Event::find($id);
        return view('event.show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=Event::find($id);
        return view('event.edit')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event,$id)
    {
        $event=Event::find($id);
        
        $event->name=$request->get('title');
        $event->image=$request->get('image');
        $event->description=$request->get('description');
        $event->date=$request->get('date');
        $event->hour=$request->get('hour');
        $event->current_capacity=$request->get('home');
        $event->max_capacity=$request->get('max_capacity');
        $event->location_id=$request->get('home');

        $event->save();
        return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::find($id);
        $event->delete();
        return redirect('/events');
    }
}
