<?php

namespace App\View\Components;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;


class EventList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $events = DB::select('select * from events');
        dd($events);
        return view('components.event-list', ['events'=>$events]);
        
    }
}
