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
        $submission->name = $request->Name;
        $submission->email = $request->Email;
        $submission->prog_lang = $request->Preferred_Programming_Language;
        $submission->tv_show = $request->What_is_your_favorite_TV_show;
        $submission->save();
    }
}
