<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\detail_pengumuman;
use Illuminate\Http\Request;

class DetailPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumans = PengumumanController::all();
        return view('detail_pengumuman/detail_pengumuman', compact('pengumumans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_pengumuman  $detail_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(detail_pengumuman $detail_pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail_pengumuman  $detail_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_pengumuman $detail_pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detail_pengumuman  $detail_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'judul_pengumuman' => 'required',
            'deskripsi' => 'required',
            'detail_isi' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'kategori' => 'required',
            'image' => 'nullable',
        ]);

        // Find the pengumuman by ID
        $pengumuman = Pengumuman::findOrFail($id);

        // Update the pengumuman with the validated data
        $pengumuman->judul_pengumuman = $validatedData['judul_pengumuman'];
        $pengumuman->deskripsi = $validatedData['deskripsi'];
        $pengumuman->detail_isi = $validatedData['detail_isi'];
        $pengumuman->lokasi = $validatedData['lokasi'];
        $pengumuman->status = $validatedData['status'];
        $pengumuman->kategori = $validatedData['kategori'];
        $pengumuman->save();

        // Redirect the user back to the index page with a success message
        return redirect()->route('pengumuman/pengumuman')->with('success', 'Pengumuman updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_pengumuman  $detail_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();

        return redirect()->route('pengumuman/pengumuman')->with('success', 'Pengumuman deleted successfully.');
    }
}