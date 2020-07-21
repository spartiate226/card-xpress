<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.list',['etudiants'=>Etudiant::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('pages.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Etudiant::create([
            "matricule"=>$request->matricule,
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "email" =>$request->email,
            "niveau"=>$request->niveau,
            "cycle" =>$request->cycle,
            "annee_ac" =>$request->annee_ac,
            "photo" =>$request->photo->store('images_etudiant','public')
        ]);

        return redirect()->route('Etudiant.create')->with(['reponse'=>"Etudiant bien enregistre"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($etudiant)
    {
        $etud=Etudiant::find($etudiant);
        return  view('pages.impression',compact('etud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($etudiant)
    {
      $etud=Etudiant::find($etudiant);
      return view('pages.modifier',compact('etud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$etudiant)
    {
        $etud=Etudiant::find($etudiant);
        $etud->update([
            "matricule"=>$request->matricule,
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "email" =>$request->email,
            "niveau"=>$request->niveau,
            "cycle" =>$request->cycle,
            "annee_ac" =>$request->annee_ac,
        ]);

        return redirect()->route('Etudiant.edit',[$etudiant])->with(['reponse'=>"Etudiant mis a jour!!"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($etudiant)
    {
        $etudiant=Etudiant::find($etudiant);
        $etudiant->delete();
        return redirect()->route('Etudiant.index')->with(['reponse'=>"Etudiant supprimer"]);
    }
}
