<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;
use App\Message;

class RoomController extends Controller
{
    public function __construct()
    {
        
    }  
    public function getIndex(){   
		$title='Социалка';
		$rooms=Room::where('showhile','show')->orderBy('id','DESC')->get();
		return view('rooms')->with('title',$title)->with('rooms',$rooms);
	}
	public function getNum($id){
		$title='Социалка';
		$room=Room::find($id);
		$messages=Message::where('chat_id',$id)->orderBy('id','DESC')->limit(40)->get();
		return view('thisroom')->with('room',$room)->with('id',$id)->with('title',$title)->with('messages',$messages);
	}
}
