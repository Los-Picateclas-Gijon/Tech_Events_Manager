<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventListNotAvaible extends Controller
{
    public function index(){

        $events = Event::all();
        return view('eventListNotAvailable', ['events'=>$events]);

}
}
