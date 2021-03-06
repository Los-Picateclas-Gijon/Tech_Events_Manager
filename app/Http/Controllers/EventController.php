<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('admin', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createEvent');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $event=Event::create([
                'title'=>$request->input('title'),
                'image'=>$request->input('image'),
                'description'=>$request->input('description'),
                'date'=>$request->input('date'),
                'hour'=>$request->input('hour'),
                'max_capacity'=>$request->input('max_capacity'),
                'current_capacity'=> 0,
                'location_id'=>1,
                 
             ]);
            $event->save();
            return redirect()->route('admin.index'); 


        /*$data = new Event;
        $data = $request->all();
        $data ->save();
        return view('admin');*/
       
      /*  $request->validate([
            'title' => 'required',
            'image' => 'required',
            'date' => 'required',
            'hour' => 'required',
            'current_capacity' => 'required',
            'max_capacity' => 'required',
            'location_id' => 'required',

        ]);
        
        Event::create($request->all());
        
        return redirect()->route('admin');
        $event= new Event;
        $event->title=$request->input('title');
        $event->image=$request->input('image');
        $event->date=$request->input('date');
        $event->hour=$request->input('hour');
        $event->max_capacity=$request->input('max_capacity');
        $event->location_id=$request->input('location_id');
        $event->save();
        return redirect()->route('admin');*/
      
        
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event, $id)
    {
        $event = Event::where('id', $id)->update($request->all());
        return view('admin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event, $id)
    {
        $event = Event::findOrFail($id)->delete();

        return view('admin');
    }
}
