<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;

class ContactController extends Controller {
    
    function send(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'email|required',
            'message' => 'string'
        ]);

        notify("Incoming Message from - {$request->name}")
            ->line("A new message has been recieved from {$request->name}")
            ->line(new HtmlString("Message: <br/> {$request->message}"))
            ->replyTo($request->email)
            ->send(User::isAdmin()->get(), ['mail']);

        return back()->with('success', 'Your message has been submitted successfully!');
    }

}
