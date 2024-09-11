<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('level')->get();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = Level::all();
        return view('admin.user.create', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_level' => 'integer|required',
            'nama_lengkap' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        User::create($request->all());
        Alert::success('Success', 'Data Berhasil Ditambah');
        return redirect()->route('user.index')->with('success', 'User created successfully');
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
        // $edit = User::find($id);
        $users = User::findOrFail($id);
        $levels = Level::get();
        return view('admin.user.edit', compact('users', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        // Validate the request
        $request->validate([
            'id_level' => 'integer|required',
            'nama_lengkap' => 'required|string',
            'email' => 'required|email',
        ]);

        // Check if the old password is correct
        if ($request->filled('old_password') && $request->filled('new_password')) {
            if (!Hash::check($request->old_password, $user->password)) {
                Alert::warning('Password lama salah', 'Silahkan cek kembali password lama anda');
                return back()->withErrors(['old_password' => 'Password lama tidak sesuai']);
            }
        }

        // Update the user data
        $user->id_level = $request->id_level;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->email = $request->email;
        // Only update the password if the new password is filled
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }


        // Save the changes
        $user->save();
        Alert::success('Success', 'Data Berhasil Diupdate');
        // Redirect back with a success message
        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function softdelete(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus sementara');
    }
}
