<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;

class RegistrasiController extends Controller
{
    public function showForm()
    {
        return view('registrasi');
    }

    public function prosesRegistrasi(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:registrations',
            'password' => 'required|string',
        ]);

        // Simpan data ke database
        Registrasi::create($data);

        return redirect('/sukses')->with('success', 'Registrasi berhasil!');
    }

    public function showSuccessPage()
    {
    return view('success');
    }

}


