<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\NewLeadMarkdownMessage;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        // validiamo i dati "a mano" per poter gestire la risposta
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                // la funzione errors() della classe Validator resituisce un array
                // in cui la chiave è il campo soggetto a validazione
                // e il valore è un array di messaggi di errore
                'errors' => $validator->errors()
            ]);
        }

        // salviamo a db i dati inseriti nel form di contatto
        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        // qui presumo vada messa la propria email
        Mail::to('priviteraluca01@gmail.com')->send(new NewLeadMarkdownMessage($new_lead));

        return response()->json([
            'success' => true,
        ]);
    }
}
