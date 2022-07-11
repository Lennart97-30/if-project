<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessagesController extends Controller
{
    public function store()
    {
        Mail::to('lmm300997@gmail.com')->send(new MessageReceived);
    }
}
