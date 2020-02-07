<?php

namespace App\Helpers;

use Illuminate\Http\Request;

final class MessengerHelper
{

	public static function addMessage(Request $request, string $message, int $mode, int $type){
		$request->session()->flash('flash_message', 
			(object)[
				'mode'=>$mode, 
				'type'=>$type,
				'msg'=>$message
			]
		);
	}
	
}