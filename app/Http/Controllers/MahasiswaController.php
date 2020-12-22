<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\Jurusan;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mahasiswa = DB::table('students')->get();
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('mahasiswa.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|size:9',
            'email' => 'required|email',
            'id_jurusan' => 'required'
        ]);
        Mahasiswa::create($request->all());
        return redirect('/mahasiswas')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $jurusan = Jurusan::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|size:9',
            'email' => 'required|email',
            'id_jurusan' => 'required'
        ]);
        Mahasiswa::where('nis', $mahasiswa->nis)
                    ->update([
                        'nama' => $request->nama,
                        'nis' => $request->nis,
                        'email' => $request->email,
                        'id_jurusan' => $request->id_jurusan,
                    ]);
        return redirect('/mahasiswas')->with('status', 'Data Mahasiswa Berhasil Fiubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->nis);
        return redirect('/mahasiswas')->with('status', 'Data Mahasiswa Berhasil Dihapus'); 
    }
}
