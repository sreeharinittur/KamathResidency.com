<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function showMessages()
    {
        // Fetch all messages from the database
        $messages = DB::table('messages')->get();

        // Pass messages to the view
        return view('admin.messages', compact('messages'));
    }
}
