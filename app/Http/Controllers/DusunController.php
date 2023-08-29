<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dusun;
use App\Models\KK;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class DusunController extends Controller
{
    
    public function index()
    {
        $title = 'Dusun';
        $dusun = Dusun::all();
        return view('admin.dusun', compact('title', 'dusun'));
    }

    public function create()
    {
        $title = 'Dusun';
        return view ('admin.tambah-dusun', compact('title'));
    }

    public function store(Request $request)
    {
        Dusun::create($request->only('nama_dusun', 'kepala_dusun'));
        return redirect()->route('dusun.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy(Dusun $dusun)
    {
        $dusun->delete();
        return redirect()->route('dusun.index')->with('success', 'Data Berhasil Dihapus');

    }

    public function edit(Dusun $dusun)
    {
        $title = 'Dusun';
        return view('admin.edit-dusun', compact('dusun', 'title'));
    }

    public function update(Request $request, Dusun $dusun)
    {
        $dusun->update($request->all());
        return redirect()->route('dusun.index')->with('success', 'Data Berhasil Diubah');
    }   

    public function show(Dusun $dusun)
    {
        $kk = KK::all()->where('dusun_id', $dusun->id);

        
        // foreach ($kk as $k) {
        //     $penduduk = Penduduk::all()->where('kk_id', $k->id);
        //     dd($penduduk);
        // }
        $title = 'Lihat Data Dusun';
        return view('admin.lihat-dusun', compact('title', 'kk'));
        
    }


}
