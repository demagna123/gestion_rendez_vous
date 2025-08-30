<?php

namespace App\Http\Controllers;

use App\Models\Consultation;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultations = Consultation::all();
        return view('consultations.index', [
            'consultations' => $consultations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consultations.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'heure' => 'required',
            'note' => 'required',

        ]);
        Consultation::create([
            'date' => $request->date,
            'heure' => $request->heure,
            'note' => $request->note,
            
        ]);

        return back()->with('success', "Consultation créée avec succès !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $consultation = Consultation::find($id);
        return view('consultations.show', [
            'consultation' => $consultation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consultation = Consultation::find($id);
        return view('consultations.edit', [
            'consultation' => $consultation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'date' => 'required',
            'heure' => 'required',
            'note' => 'required',
            
        ]);
        Consultation::find($id)->update([
            'date' => $request->date,
            'heure' => $request->heure,
            'note' => $request->note,
            
        ]);
        return back()->with('success', "Consultation ajoutée avec succès.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Consultation::find($id)->delete();
        return redirect()->route('consultations.index')->with('success', "Consultation supprimée avec succès.");
    }
}
