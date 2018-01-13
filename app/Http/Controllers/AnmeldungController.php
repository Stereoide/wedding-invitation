<?php

namespace App\Http\Controllers;

use App\Mail\Anmeldung;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AnmeldungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function anmeldung(Request $request)
    {
        $input = $request->all();

        $name = $request->input('name');
        $teilnahmestatus = $request->teilnahmestatus;
        $anzahlErwachsene = $request->erwachsene;
        $anzahlKinder = $request->kinder;
        $kommentar = $request->kommentar;

        Mail::to('Stereoide@gmail.com')->send(new Anmeldung($name, $teilnahmestatus, (string)$kommentar, $anzahlErwachsene, $anzahlKinder));

        echo json_encode(['status' => 'ok', 'input' => $input]);
        exit;
    }
}
