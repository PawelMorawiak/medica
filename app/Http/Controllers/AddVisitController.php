<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddVisitController extends Controller
{
    public function AddVisit(Request $request) {

        $incomingFields = $request->validate([
            'add-doctor-for-appointment' => 'required',
            'add-location-for-appointment' => 'required',
            'add-time-for-appointment' => 'required'
        ]);

            // zapis do bazy danych - znaki specjalne (strip_tags)
        $incomingFields['add-doctor-for-appointment'] = strip_tags($incomingFields['add-doctor-for-appointment']);
        $incomingFields['add-location-for-appointment'] = strip_tags($incomingFields['add-location-for-appointment']);
        $incomingFields['add-time-for-appointment'] = strip_tags($incomingFields['add-time-for-appointment']);

    }
}

