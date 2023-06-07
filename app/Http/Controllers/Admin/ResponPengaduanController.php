<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\respon_pengaduan;
use Illuminate\Http\Request;

class ResponPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('respon_pengaduan/respon_pengaduan');
        $pengaduan = Pengaduan::findOrFail($id);

        // Load jumlah komen terbanyak dan respon pengaduan
        $komentarTerbanyak = $pengaduan->komentar()->withCount('replies')->orderBy('replies_count', 'desc')->first();
        $respon = $komentarTerbanyak ? $komentarTerbanyak->respon : null;

        return view('respon_pengaduan.respon', compact('pengaduan', 'respon'));
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
     * @param  \App\Models\respon_pengaduan  $respon_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(respon_pengaduan $respon_pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\respon_pengaduan  $respon_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(respon_pengaduan $respon_pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\respon_pengaduan  $respon_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, respon_pengaduan $respon_pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\respon_pengaduan  $respon_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(respon_pengaduan $respon_pengaduan)
    {
        //
    }
}