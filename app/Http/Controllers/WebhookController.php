<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submissions;

class WebhookController extends Controller
{
    public function submission(Request $request) {
        $submission = new Submissions();
        $submission->name = $request->name;
        $submission->email = $request->email;
        $submission->prog_lang = $request->prog_lang;
        $submission->tv_show = $request->tv_show;
        $submission->save();
    }
}
