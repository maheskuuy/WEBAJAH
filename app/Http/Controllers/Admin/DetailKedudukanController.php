<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailKedudukan;
use Illuminate\Http\Request;

class DetailKedudukanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $user = auth()->user();
        return view('detail_kedudukan.create', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailKedudukan  $detailKedudukan
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(DetailKedudukan $detailKedudukan)
    {
        return view('detail_kedudukan.edit', compact('detailKedudukan/detail_kedudukan'));
    }

    // Metode lain...

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nama_perumahan' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'negara' => 'required',
        ]);

        // Create a new detail kedudukan
        $detailKedudukan = new DetailKedudukan();
        $detailKedudukan->nama_perumahan = $validatedData['nama_perumahan'];
        $detailKedudukan->RT = $validatedData['RT'];
        $detailKedudukan->RW = $validatedData['RW'];
        $detailKedudukan->kabupaten = $validatedData['kabupaten'];
        $detailKedudukan->provinsi = $validatedData['provinsi'];
        $detailKedudukan->negara = $validatedData['negara'];

        // Associate the detail kedudukan with the authenticated user
        $user = auth()->user();
        $user->detailKedudukan()->save($detailKedudukan);

        // Redirect the user to the dashboard or any other desired page
        return redirect()->route('dashboard/dashboard')->with('success', 'Detail kedudukan anda telah disimpan, selamat menjelajah:).');
    }
}