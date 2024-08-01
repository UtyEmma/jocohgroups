<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'email|required',
            'message' => 'string'
        ]);

        notify("Attention required: Incoming message from {$request->name}")
            ->line("A new message has been submitted through the website contact form from {$request->name}.")
            ->line("Please find the details of the message below:")
            ->line("Sender Name: {$request->name}")
            ->line("Sender Email Address: {$request->email}")
            ->line("Message: {$request->message}")
            ->send(User::isAdmin()->get(), ['mail']);

        return back()->with('success', 'Your message has been submitted successfully!');
    }
}
