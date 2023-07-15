<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // jalanin fungsi getAllProduk
        $produk = Produk::getAllProduk();

        // kirim data
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // isi nya data dari tabel kategori
        $kategori_produk = KategoriProduk::all();
        // isinya data dari tabel produk
        $produk = Produk::all();
        // kirim data ke view
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat fitur tambah data
        $produk = new Produk;
        // ngakses data kode didatabase = inputan dari user
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        // untuk menyimpan data yang user inputin ke database
        $produk->save();
        // alihin ke halaman tabel produk
        return redirect('produk');
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
        //arahkan ke halaman edit
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::where('id', $id)->get();
        return view('admin.produk.edit', compact(
            'produk',
            'kategori_produk'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // cari data berdasarkan id trs kita simpen ke variabel produk
        $produk = Produk::find($id);
        // apus data nya
        $produk->delete();
        // balikin ke halaman tabel produk
        return redirect('produk');
    }
}
