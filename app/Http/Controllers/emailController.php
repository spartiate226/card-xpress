<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Mail\mailling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    function store(Request $request){
        $element=[
            'objet'=>$request->objet,
            'message'=>$request->message
        ];
        if ($request->id!='all'){
            $etudiant=Etudiant::find($request->id);
            mail::to($etudiant->email)->send(new mailling($element));
        }else{
            $etudiants=Etudiant::all();
            foreach ($etudiants as $etudiant){
                mail::to($etudiant->email)->send(new mailling($element));
            }
        }
    }
    function create($id){
        return view('pages.mail',['id'=>$id]);
    }
    //
}
