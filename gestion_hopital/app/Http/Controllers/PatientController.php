<?php

namespace App\Http\Controllers;


use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', [
            'patients' => $patients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'contact' => 'required|integer',

        ]);
        Patient::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'contact' => $request->contact,
            
        ]);

        return back()->with('success', "Patient créé avec succès !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::find($id);
        return view('patients.show', [
            'patient' => $patient,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::find($id);
        return view('patients.edit', [
            'patient' => $patient,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'contact' => 'required|integer',
            
        ]);
        Patient::find($id)->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'contact' => $request->contact,
            
        ]);
        return back()->with('success', "Patient ajouté avec succès.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Patient::find($id)->delete();
        return redirect()->route('patients.index')->with('success', "Patients supprimé avec succès.");
    }
}
