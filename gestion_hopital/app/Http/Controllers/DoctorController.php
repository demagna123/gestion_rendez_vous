<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', [
            'doctors' => $doctors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = Patient::all();
        $consultations = Consultation::all();
        return view('doctors.create', [
            'patients' => $patients,
            'consultations' => $consultations,
        ]);
        
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
            'spécialité' => 'required',
            'disponibilité' => 'required|date',
        ]);
        Doctor::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'contact' => $request->contact,
            'spécialité' => $request->spécialité,
            'disponibilité' => $request->disponibilité,
            'patient_id' => $request->patient_id,
            'consultation_id' => $request->consultation_id,

            
        ]);

        return back()->with('success', "Médécin créé avec succès !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.show', [
            'doctor' => $doctor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.edit', [
            'doctor' => $doctor,
            'patients' => Patient::all(),
            'consultations' => Consultation::all(),
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
            'spécialité' => 'required',
            'disponibilité' => 'required|date',
        ]);
        Doctor::find($id)->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'contact' => $request->contact,
            'spécialité' => $request->spécialité,
            'disponibilité' => $request->disponibilité,
            'patient_id' => $request->patient_id,
            'consultation_id' => $request->consultation_id,

            
        ]);
        return back()->with('success', "Médécin ajouté avec succès.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Doctor::find($id)->delete();
        return redirect()->route('doctors.index')->with('success', "Médécin supprimé avec succès.");
    }
}
