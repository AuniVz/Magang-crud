<?php

namespace App\Http\Controllers;

use App\Models\Universitas;
use Illuminate\Http\Request;

class UniversitasController extends Controller
{
    public function index()
    {
        return view('universitas.index', ['universitas' => Universitas::all()]);
    }
   public function create()
   {
       return view('universitas.form');
   }
   public function store(Request $request)
   {
       $request->validate([
           "nama" => ["required"],
           "alamat" => ["required"],
           "no_telp" => ["required"],
           "email" => ["required"],
           "akreditas" => ["required"],
       ]);

       Universitas::create($request->all());

       return redirect()->route('universitas.index')->withSucces('data universitas berhasil ditambahkan');
   }

   public function edit(Universitas $universitas)
   {
       return view('universitas.edit', [
           'universitas' => $universitas
       ]);
   }

   public function update(Request $request, Universitas $universitas)
   {
       $request->validate([
           "nama" => ["required"],
           "alamat" => ["required"],
           "no_telp" => ["required"],
           "email" => ["required"],
           "akreditas" => ["required"],
       ]);
       $universitas->update($request->all());

       return redirect()->route('universitas.index')->withSucces('data universitas berhasil diedit');
   }

   public function delete(Universitas $universitas)
   {
       $universitas->delete();
       return redirect()->back()->withSucces('data universitas berhasil dihapus');
   }
}
