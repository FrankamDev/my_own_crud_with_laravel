<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class ElevesController extends Controller
{

    public function edit($id)
    {
        $eleve = Eleve::findOrFail($id);
        return view('eleves.edit', compact('eleve'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:eleves,email,' . $id,
            'phone' => 'required|string|max:20',
        ]);

        $eleve = Eleve::findOrFail($id);
        $eleve->update([
            'name' => $request->nom,
            'email' => $request->email,
            'phone' => $request->telephone,
        ]);

        return redirect()->route('eleves.index')->with('success', 'Élève modifié avec succès.');
    }

    public function show($id)
    {
        $eleve = Eleve::findOrFail($id);

        return view('eleves.show', compact('eleve'));
    }
    public function index(){

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


        Eleve::create($request->all());
        return redirect()->route('eleves.index')->with('success', 'Élève créé avec succès !');
    }




    public function destroy($id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->delete();

        return redirect()->route('eleves.index')->with('success', 'Élève supprimé avec succès.');
    }
}
