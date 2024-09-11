<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::whereNull('deleted_at')->get();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.level.index', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.level.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_level' => 'required|string'
        ]);
        Level::create($request->all());
        Alert::success('Success','Data berhasil ditambah');
        return redirect()->route('level.index')->with('success', 'data created successfully');

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
        $levels = Level::findOrFail($id);
        return view('admin.level.edit', compact('levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $levels = Level::findOrFail($id);
        $request->validate([
            'nama_level'=> 'required|string'
        ]);
        $levels->update($request->all());
        Alert::success('Success','Data berhasil diupdate');
        return redirect()->route('level.index')->with('success','data updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $levels = Level::findOrFail($id);
        $levels->deleted_at = now(); // Set the deleted_at timestamp to the current time
        $levels->save(); // Save the changes
        Alert::success('Success','Data berhasil dihapus sementara');
        return redirect()->route('level.index')->with('success', 'Data Berhasil Dihapus sementara');
    }
}
