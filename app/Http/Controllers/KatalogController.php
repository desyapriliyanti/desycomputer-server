<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Katalog::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $katalog = new Katalog();
        $katalog->merk = $request->merk;
        $katalog->spesifikasi = $request->spesifikasi;
        $katalog->harga = $request->harga;
        $katalog->save();

        return "Data berhasil di ditambahkan";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $merk = $request->merk;
        $spesifikasi = $request->spesifikasi;
        $harga = $request->harga;

        $katalog = Katalog::find($id);
        $katalog->merk = $request->merk;
        $katalog->spesifikasi = $request->spesifikasi;
        $katalog->harga = $request->harga;
        $katalog->save();

        return "Data berhasil diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $katalog = Katalog::find($id);
        $katalog->delete();

        return "Data berhasil dihapus";
    }
}
