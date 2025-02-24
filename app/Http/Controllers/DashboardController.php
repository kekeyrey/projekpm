<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; // Pastikan Model Service dipanggil

class DashboardController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Ambil data dari database
        return view('dashboard', compact('services')); // Kirim ke view
    }
}
