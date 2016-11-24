<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Message;

class MessageController extends Controller
{
    //
	public function postIndex(Requests\MessageRequest $r){
		//dd($r->all());
		//dd(Auth::user()->id);
		$r['user_id'] = Auth::user()->id;
		$r['chat_id'] = 1;
		message::create($r->all());
		return redirect('/');
		
	}
	public function getIndex(){
		
	}
}
