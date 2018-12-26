<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submissions;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function submission(Request $request) {
        Log::info('INFO:'.json_encode($request->all()));
        
        $submission = new Submissions();
        $submission->name = $request->name;
        $submission->email = $request->email;
        $submission->prog_lang = $request->prog_lang;
        $submission->tv_show = $request->tv_show;
        $submission->save();
    }
}
