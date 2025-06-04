<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddVisitController extends Controller
{
    public function AddVisit(Request $request) {
    $incomingFields = $request->validate([
        'specialisation' => 'required',
        'doctor' => 'required',
        'avaliable_date' => 'required',
        'location' => 'required',
        'avaibaility' => 'required',
        'user' => ''
    ]);

    foreach ($incomingFields as $key => $value) {
        $incomingFields[$key] = strip_tags($value);
    }
        $incomingFields['user_id'] = auth()->id();
    \App\Models\Visit::create($incomingFields);
    return redirect('/appointed-visits')->with('success', 'Wizyta dodana');
}
public function appointedVisits() {
    $visits = \App\Models\Visit::where('user_id', auth()->id())->get();
    return view('appointed-visits', compact('visits'));
}

public function edit($id)
{
    $visit = \App\Models\Visit::findOrFail($id);
    return view('visits.edit', compact('visit'));
}

public function update(Request $request, $id)
{
    $visit = \App\Models\Visit::findOrFail($id);
    $visit->update($request->validate([
        'specialisation' => 'required',
        'doctor' => 'required',
        'avaliable_date' => 'required',
        'location' => 'required',
        'avaibaility' => 'required',
    ]));
    return redirect()->route('visits.appointed')->with('success', 'Wizyta zaktualizowana.');
}

public function destroy($id)
{
    $visit = \App\Models\Visit::findOrFail($id);
    $visit->avaibaility = 'wolna';
    $visit->user_id = null; // opcjonalnie: usunięcie przypisania użytkownika
    $visit->save();

    return redirect()->route('visits.appointed')->with('success', 'Wizyta została oznaczona jako wolna.');
}
    public function release($id)
    {
        $visit = \App\Models\Visit::findOrFail($id);
        $visit->avaibaility = 'wolna';
        $visit->user_id = null;
        $visit->save();

        return redirect()->route('visits.appointed')->with('success', 'Wizyta została oznaczona jako wolna.');
    }

}

