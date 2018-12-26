<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submissions;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function submission(Request $request) {
        //logging post to find parameter names
        Log::info('INFO:'.json_encode($request->all()));

        $submission = new Submissions();
        $submission->name = $request->Name;
        $submission->email = $request->Email;
        $submission->prog_lang = $request->Preferred_Programming_Language;
        $submission->tv_show = $request->Favorite_TV_Show;
        $submission->save();
    }
}
