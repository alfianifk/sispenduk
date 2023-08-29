<?php

namespace App\Http\Controllers;

//import PendudukModel
use App\Models\Penduduk;
use App\Models\KK;
use App\Models\Dusun;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

//return type view
use Illuminate\View\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {
        $penduduk = Penduduk::all();
        $title = "Dashboard";
        $pendudukCount = Penduduk::count();
        $kkCount = KK::count();
        $dusunCount = Dusun::count();
        $artikelCount = Article::count();

        return view('admin.dashboard', compact('penduduk', 'title', 'pendudukCount', 'kkCount', 'dusunCount', 'artikelCount'));
        
    }

    public function inputData() {
        $dusun = Dusun::all();
        $title = "Input Data";
        return view('admin.inputdata', compact('title', 'dusun'));
    }

    public function edit($id) {
        $penduduk = Penduduk::find($id);
        $title = "Edit Data";
        return view('admin.editpenduduk', compact('penduduk', 'title'));
    }

    public function update(Request $request, $id) {
        $penduduk = Penduduk::find($id);
        $penduduk->update([
            'nik' => $request->input('nik'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'agama' => $request->input('agama'),
            'pendidikan' => $request->input('pendidikan'),
            'pekerjaan' => $request->input('pekerjaan'),
            'goldar' => $request->input('goldar'),
            'status_perkawinan' => $request->input('status_perkawinan'),
            'tanggal_perkawinan' => $request->input('tanggal_perkawinan'),
            'status_hubungan' => $request->input('status_hubungan'),
            'kewarganegaraan' => $request->input('kewarganegaraan'),
            'no_paspor' => $request->input('no_paspor'),
            'no_kitap' => $request->input('no_kitap'),
            'nama_orang_tua' => $request->input('nama_orang_tua')
        ]);
        $penduduk->save();
        //return to dashboard
        return redirect()->route('dashboard-admin')->with('success', 'Data berhasil diupdate');
    }
    
    public function store(Request $request) {
        // dd($request);
        DB::beginTransaction();
        try {
           $kk = KK::create([
            'no_kk' => $request->input('no_kk'),
            'nik_kk' => $request->input('nik_kk'),
            'nama_kk' => $request->input('nama_kk'),
            'jumlah_anggota_keluarga' => $request->input('jumlah_anggota_keluarga'),
            'dusun_id' => $request->input('dusun_id'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw')
           ]);
              $kk->save();
                DB::commit();
        for ($i=0; $i < count($request->input('nik')); $i++) {
            $penduduk = Penduduk::create([
                'kk_id' => $kk->id,
                'nik' => $request->input('nik')[$i],
                'nama_lengkap' => $request->input('nama_lengkap')[$i],
                'jenis_kelamin' => $request->input('jenis_kelamin')[$i],
                'tempat_lahir' => $request->input('tempat_lahir')[$i],
                'tanggal_lahir' => $request->input('tanggal_lahir')[$i],
                'agama' => $request->input('agama')[$i],
                'pendidikan' => $request->input('pendidikan')[$i],
                'pekerjaan' => $request->input('pekerjaan')[$i],
                'goldar' => $request->input('goldar')[$i],
                'status_perkawinan' => $request->input('status_perkawinan')[$i],
                'tanggal_perkawinan' => $request->input('tanggal_perkawinan')[$i],
                'status_hubungan' => $request->input('status_hubungan')[$i],
                'kewarganegaraan' => $request->input('kewarganegaraan')[$i],
                'no_paspor' => $request->input('no_paspor')[$i],
                'no_kitap' => $request->input('no_kitap')[$i],
                'nama_orang_tua' => $request->input('nama_orang_tua')[$i]   
            ]);
        }
        $penduduk->save();
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan: '. $e->getMessage());
        }
    }

    public function delete($id) {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function artikel() {
        $articles = Article::all();
        $title = "Artikel";
        return view('admin.artikel', compact('title', 'articles'));
    }

    public function tambahArtikel() {
        $title = "Artikel";
        return view('admin.tambah-artikel-baru', compact('title'));
    }

    public function storeArticle(Request $request) {
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'author' => 'required',
        'content' => 'required'
    ]);

    Article::create($validatedData);

    return redirect()->route('artikel')->with('success', 'Artikel berhasil disimpan.');
    }


    public function deleteArtikel($id) {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
