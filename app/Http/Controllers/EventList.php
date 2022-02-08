<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventList extends Controller
{
    public function index(){

        $events = Event::all();
        return view('eventListAvailable', ['events'=>$events]);
    }
}
