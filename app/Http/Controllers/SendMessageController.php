<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    public function send_message(Request $request)
    {
    
        event(new Message($request->username, $request->message));

        return ['sucess' => 'true'];
    }
}
