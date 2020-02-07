<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\TypeMessenger;
use App\Enums\ModeMessage;
use App\Helpers\MessengerHelper;

class FlashController extends Controller
{
    
    public function success(Request $req){
    	MessengerHelper::addMessage($req, 'Task was successful!', ModeMessage::FIXE, TypeMessenger::SUCCESS);
    	return redirect()->route('home');
    }

    public function warning(Request $req){
    	MessengerHelper::addMessage($req, 'Warning! You got it!', ModeMessage::FIXE, TypeMessenger::WARNING);
    	return redirect()->route('home');
    }

    public function error(Request $req){
    	MessengerHelper::addMessage($req, 'There was an error in the task! :(', ModeMessage::FIXE, TypeMessenger::ERROR);
    	return redirect()->route('home');
    }

    // Toast Mensagens Materialize

    public function t_success(Request $req){
    	MessengerHelper::addMessage($req, 'Task was successful!',  ModeMessage::TOAST, TypeMessenger::SUCCESS);
    	return redirect()->route('home');
    }

    public function t_warning(Request $req){
    	MessengerHelper::addMessage($req, 'Warning! You got it!',  ModeMessage::TOAST, TypeMessenger::WARNING);
    	return redirect()->route('home');
    }

    public function t_error(Request $req){
    	MessengerHelper::addMessage($req, 'There was an error in the task! :(', ModeMessage::TOAST, TypeMessenger::ERROR);
    	return redirect()->route('home');
    }
}
