<?php

namespace App\Http\Controllers;

use App\Models\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        // ambil semua data dari database
        $facilities = Facility::all();

        // kirim ke view facility.blade.php
        return view('facility', compact('facilities'));
    }
}
