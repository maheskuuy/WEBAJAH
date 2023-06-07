<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        return view('pengumuman/pengumuman');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Pengumuman::create([
            "judul_pengumuman" => $request->input('judul_pengumuman'),
            "kategori" => $request->input('kategori'),
            "deskripsi" => $request->input('deskripsi'),
            "detail_isi" => $request->input('detail_isi'),
            "lokasi" => $request->input('lokasi'),
            "image" => $request->file('image')->store('images'),
            "stats" => $request->input('status')
        ]);

        return redirect()->route('pengumuman/pengumuman');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman): View
    {
        return view('pengumuman/pengumuman');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman): View
    {
        return view('pengumuman/pengumuman');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman): RedirectResponse
    {
        $pengumuman->update([
            "judul_pengumuman" => $request->input('judul_pengumuman'),
            "kategori" => $request->input('kategori'),
            "deskripsi" => $request->input('deskripsi'),
            "detail_isi" => $request->input('detail_isi'),
            "detail_lokasi" => $request->input('detail_lokasi'),
            "image" => $request->file('image')->store('images'),
            "stats" => $request->input('status')
        ]);

        return redirect()->route('pengumuman/pengumuman');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman): RedirectResponse
    {
        $pengumuman->delete();

        return redirect()->route('pengumuman/pengumuman');
    }
}