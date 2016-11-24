<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Requests;
use App\Message;
use App\User;
use App\Room;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
    public function getIndex(){   
		$title='Социалка';
		$room='main';
		$messages=Message::where('chat_id',1)->orderBy('id','DESC')->limit(40)->get();
		$rooms=Room::where('showhile','show')->orderBy('id','DESC')->get();
		//$users=user->orderBy('user_id','DESC');
		//$
		// {{}}
		return view('index')->with('room',$room)->with('title',$title)->with('messages',$messages);
	}
	
}
                                   