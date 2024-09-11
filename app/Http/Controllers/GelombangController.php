<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombang = Gelombang::whereNull('deleted_at')->get();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.gelombang.index', compact('gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_gelombang' => 'required|string'
        ]);
        Gelombang::create($request->all());
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('gelombang.index')->with('Data created succesfully');
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
        $gelombang = Gelombang::findOrFail($id);
        return view('admin.gelombang.edit', compact('gelombang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gelombang = Gelombang::findOrFail($id);
        $request->validate([
            'nama_gelombang' => 'required|string',
            'aktif' => 'integer'
        ]);
        $gelombang->update($request->all());
        Alert::success('Success', 'Data berhasil diupdate');
        return redirect()->route('gelombang.index')->with('Data updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gelombang = Gelombang::findOrFail($id);
        $gelombang->deleted_at = now(); // Set the deleted_at timestamp to the current time
        $gelombang->save(); // Save the changes
        Alert::success('Success', 'Data berhasil dihapus sementara');
        return redirect()->route('gelombang.index')->with('success', 'Data Berhasil Dihapus sementara');
    }
}
