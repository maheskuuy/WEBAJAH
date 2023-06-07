<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('detail_pengaduan/detail_pengaduan');
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
     * @param  \App\Models\detail_pengaduan  $detail_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);

        if (!$pengaduan) {
            return redirect()->route('pengaduan/pengaduan')->with('error', 'Pengaduan not found.');
        }

        return view('pengaduan/pengaduan', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail_pengaduan  $detail_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_pengaduan $detail_pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detail_pengaduan  $detail_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail_pengaduan $detail_pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_pengaduan  $detail_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_pengaduan $detail_pengaduan)
    {
        //
    }
}