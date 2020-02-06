<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\Messenger;

class FlashController extends Controller
{
    
    public function success(Request $req){
    	$req->session()->flash(Messenger::SUCCESS, 'Task was successful!');
    	return redirect()->route('home');
    }

    public function warning(Request $req){
    	$req->session()->flash(Messenger::WARNING, 'Warning! You got it!');
    	return redirect()->route('home');
    }

    public function error(Request $req){
    	$req->session()->flash(Messenger::ERROR, 'There was an error in the task! :(');
    	return redirect()->route('home');
    }

    // Toast Mensagens Materialize

    public function t_success(Request $req){
    	$req->session()->flash('t_'.Messenger::SUCCESS, 'Task was successful!');
    	return redirect()->route('home');
    }

    public function t_warning(Request $req){
    	$req->session()->flash('t_'.Messenger::WARNING, 'Warning! You got it!');
    	return redirect()->route('home');
    }

    public function t_error(Request $req){
    	$req->session()->flash('t_'.Messenger::ERROR, 'There was an error in the task! :(');
    	return redirect()->route('home');
    }
}
