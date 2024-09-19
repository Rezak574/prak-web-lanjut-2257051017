<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "") 
    { 
        $data = [ 
            'nama' => 'M. Reza Kurniawan', 
            'kelas' => 'C', 
            'npm' => '2257051017' 
        ];

        // Pastikan nama variabel konsisten
        return view('profile', $data);
    }
    
}

