<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class UserController extends Controller
{
    public function index()
    {
        $events=Event::paginate(5);
        return view('events',$events);
    }

    public function create(Request $request){
       
    
        $user=new Event();
        $user->name=$request('name');
        $user->email=$request('email');
        $user->password=$request('password');
        $user->role_id=$request('role_id');
        $user->email_verified_at=$request('email_verified_at');
        
        $user->saveOrFail();
    
    }
}
