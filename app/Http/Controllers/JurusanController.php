<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::whereNull('deleted_at')->get();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|string'
        ]);
        Jurusan::create($request->all());
        Alert::success('Success', 'Data berhasil ditambah');
        return redirect()->route('jurusan.index')->with('Data created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $request->validate([
            'nama_jurusan' => 'required|string'
        ]);
        $jurusan->update($request->all());
        Alert::success('Success', 'Data berhasil diupdate');
        return redirect()->route('jurusan.index')->with('Data updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->deleted_at = now(); // Set the deleted_at timestamp to the current time
        $jurusan->save(); // Save the changes
        Alert::success('Success', 'Data berhasil dihapus sementara');
        return redirect()->route('jurusan.index')->with('success', 'Data Berhasil Dihapus sementara');
    }
}
