<?php
namespace App\Http\Controllers;

use App\Models\abonnes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function enregistrement()
    {
        return view ('enregistrement');
    }
    public function enregistrementbase(Request $request)
    {
        $abonnes=new abonnes();

        $abonnes->nom=$request->nom;
        $abonnes->prenom=$request->prenom;
        $abonnes->date_naissance=$request->naissance;
        $abonnes->email=$request->mail;
        $abonnes->numero=$request->numb;
        $abonnes->date_de_debut=$request->debut;

        $abonnes->save();

        return redirect()->route('regist');
    }
    public function liste ()
    {
        $listings=abonnes::get();

        return view ('liste',compact('listings'));

    }
}
