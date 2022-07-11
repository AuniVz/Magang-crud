<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index',['mahasiswa' => Mahasiswa::all()]);
    }
    public function create()
    {
        return view('mahasiswa.form');

    }
    public function store(Request $request)
    {
        $request->validate([
            "nama" => ["required"],
            "nim" => ["required"],
            "no_telp" => ["required"],
            "umur" => ["required"],
            "alamat" => ["required"],
            "tanggal_lahir" => ["required"],
            "jenis_kelamin" => ["required"],
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->withSucces('data mahasiswa berhasil ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit',[
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            "nama" => ["required"],
            "nim" => ["required"],
            "no_telp" => ["required"],
            "umur" => ["required"],
            "alamat" => ["required"],
            "tanggal_lahir" => ["required"],
            "jenis_kelamin" => ["required"],
        ]);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->withSucces('data mahasiswa berhasil diedit');


    }

    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->back()->withSucces('data mahasiswa berhasil dihapus');
    }
}
