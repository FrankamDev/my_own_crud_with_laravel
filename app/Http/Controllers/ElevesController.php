<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class ElevesController extends Controller
{

    public function index(){
        // $eleves = Eleve::orderBy('created_at', 'desc')->paginate(5);
        $eleves = Eleve::orderByDesc('created_at')->paginate(5);
        return view('eleves.index', compact('eleves'));
    }
    public function create(){
        return view('eleves.create');
    }
    public function store(Request $request){

        //valider les donnees

        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:eleves,email',
            'phone' => 'required|digits:10|unique:eleves,phone',
        ]);
        //enregistrer les donnees

        Eleve::create($request->all());
        return redirect()->route('eleves.index')->with('success', 'Élève créé avec succès !');
    }
}
