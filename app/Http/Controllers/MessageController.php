<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Events\MessageSent;

class MessageController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    /**
     * Show messages
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('messages.message');
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages()
    {
    return Message::with('user')->get();
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
    $user = Auth::user();

    $message = $user->messages()->create([
        'message' => $request->input('message')
    ]);

    return ['status' => 'Message Sent!'];

    // $request->validate([
    //     'firstName' => 'required',
    //     'lastName' => 'required',
    //     'accounts' => 'required',
    //     'email' => 'required|email',
    //     // 'addEmail' => 'required|email',
    //     'phone' => 'required|digits:10|numeric',
    //     'message' => 'required',
    // ]);
    // Contact::create(
    //     $request->all()
    // );
    //  $request->all();
    // return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
   
}
