<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriProduk = KategoriProduk::all();

        // Mengirim data kategori produk ke view
        return view('admin.kategori.kategori', compact('kategoriProduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriProduk = KategoriProduk::all();

        return view('admin.kategori.create', compact('kategoriProduk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat fitur tambah data
        $kategoriProduk = new KategoriProduk();
        $kategoriProduk->nama = $request->nama;
        $kategoriProduk->save();
        // alihin ke halaman tabel kategori
        return redirect('kategori');
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
        $kategoriProduk = KategoriProduk::where('id', $id)->get();
        return view('admin.kategori.edit', compact('kategoriProduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategoriProduk = KategoriProduk::find($request->id);
        $kategoriProduk->nama = $request->nama;
        $kategoriProduk->save();
        // alihin ke halaman tabel kategori
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoriProduk = KategoriProduk::find($id);
        $kategoriProduk->delete();

        return redirect('kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
