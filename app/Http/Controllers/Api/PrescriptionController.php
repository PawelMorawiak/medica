<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        return Prescription::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required',
            'medication' => 'required'
        ]);

        return Prescription::create($request->all());
    }

    public function show($id)
    {
        return Prescription::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $prescription = Prescription::findOrFail($id);
        $prescription->update($request->all());
        return $prescription;
    }

    public function destroy($id)
    {
        return Prescription::destroy($id);
    }
}