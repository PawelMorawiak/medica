<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class VisitManagementController extends Controller
{
    public function index()
    {
        $visits = Visit::all();
        return view('visits.manage', compact('visits'));
    }

public function markAsOccupied($id)
{
    $visit = Visit::findOrFail($id);

    $visit->avaibaility = 'zajęta';
    $visit->user_id = auth()->id(); // <- przypisanie wizyty do zalogowanego użytkownika
    $visit->save();

    return redirect()->back()->with('success', 'Wizyta została przypisana do Ciebie.');
}
}
