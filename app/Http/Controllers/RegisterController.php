<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Models\Register;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Register::with('gelombang', 'jurusan')->orderBy('id', 'desc')->get();
        return view('admin.peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gelombang = Gelombang::where('aktif', '1')->get();
        $jurusan = Jurusan::whereNull('deleted_at')->get();
        return view('register', compact('gelombang', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_gelombang' => 'required',
            'id_jurusan' => 'required',
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'nomor_hp' => 'required|numeric',
            'nik' => 'required|numeric',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'kartu_keluarga' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'pendidikan_terakhir' => 'required',
            'nama_sekolah' => 'required',
            'kejuruan' => 'required',
            'aktivitas_saat_ini' => 'required',
        ]);



        // Simpan data ke database
        $pendaftaran = new Register();
        $pendaftaran->id_gelombang = $request->id_gelombang;
        $pendaftaran->id_jurusan = $request->id_jurusan;
        $pendaftaran->nama_lengkap = $request->nama_lengkap;
        $pendaftaran->email = $request->email;
        $pendaftaran->nomor_hp = $request->nomor_hp;
        $pendaftaran->nik = $request->nik;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pendaftaran->nama_sekolah = $request->nama_sekolah;
        $pendaftaran->kejuruan = $request->kejuruan;
        $pendaftaran->aktivitas_saat_ini = $request->aktivitas_saat_ini;

        if ($request->hasFile('kartu_keluarga')) {
            $pendaftaran->kartu_keluarga = $request->kartu_keluarga->storeAs('public/kartu_keluarga', $request->kartu_keluarga->getClientOriginalName());
        }
        $pendaftaran->save();

        // Redirect ke halaman sukses
        Alert::success('Success', 'Data telah berhasil disimpan, mohon tunggu konfirmasi dari panitia');
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peserta = Register::with('gelombang', 'jurusan')->findOrFail($id);
        return view('admin.peserta.detail', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $register =  Register::findOrFail($id);
        $request->validate([
            'status' => 'integer|required'
        ]);
        $register->status = $request->status;
        $register->save();
        Alert::success('Success', 'Status Peserta Berhasil Diupdate');
        return redirect()->route('data-peserta.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
