<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstansiController extends Controller
{
    // Menampilkan daftar instansi
    public function index()
    {
        $instansi = Instansi::all();
        return view('admin.instansi', compact('instansi'));
    }

    // Menampilkan form tambah instansi
    public function create()
    {
        return view('admin.instansi.create');
    }

    // Menyimpan instansi baru (Method untuk menambahkan instansi)
    public function store(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('instansi', 'public');
        }

        // Simpan data ke database
        Instansi::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('instansi.index')->with('success', 'Instansi berhasil ditambahkan');
    }

    // Menampilkan form edit instansi
    public function edit(Instansi $instansi)
    {
        return view('admin.instansi.edit', compact('instansi'));
    }

    // Mengupdate instansi (Method untuk mengedit instansi)
    public function update(Request $request, Instansi $instansi)
    {
        // Validasi input
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses update gambar
        if ($request->hasFile('gambar')) {
            if ($instansi->gambar) {
                // Hapus gambar lama
                Storage::delete('public/' . $instansi->gambar);
            }
            // Simpan gambar baru
            $data['gambar'] = $request->file('gambar')->store('instansi', 'public');
        }

        // Update data di database
        $instansi->update($data);

        // Redirect dengan pesan sukses
        return redirect()->route('instansi.index')->with('success', 'Instansi berhasil diubah');
    }

    // Menghapus instansi
    public function destroy(Instansi $instansi)
    {
        if ($instansi->gambar) {
            Storage::delete('public/' . $instansi->gambar);
        }

        $instansi->delete();

        return redirect()->route('instansi.index')->with('success', 'Instansi berhasil dihapus');
    }
}
