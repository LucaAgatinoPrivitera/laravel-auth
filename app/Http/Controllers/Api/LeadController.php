<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\NewLeadMarkdownMessage;
use Illuminate\Support\Facades\Mail;
class LeadController extends Controller
{
    public function store (Request $request)
    {
        dd($request->all());
        
        Mail::to('info@bollean.com')->send(new NewLeadMarkdownMessage($lead));

    }
}
