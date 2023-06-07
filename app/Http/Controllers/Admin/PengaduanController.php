<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('pengaduan/pengaduan', compact('pengaduans')); {
            $user = Auth::user();
            $isAdmin = $user->detailKedudukan->kedudukan === 'Admin';

            if ($isAdmin) {
                $perumahan = $user->detailKedudukan->nama_perumahan;
                $rt = $user->detailKedudukan->rt;
                $rw = $user->detailKedudukan->rw;
                $kabupaten = $user->detailKedudukan->kabupaten;

                $pengaduan = Pengaduan::whereHas('user', function ($query) use ($perumahan, $rt, $rw, $kabupaten) {
                    $query->whereHas('detailKedudukan', function ($query) use ($perumahan, $rt, $rw, $kabupaten) {
                        $query->where([
                            ['kedudukan', 'Admin'],
                            ['nama_perumahan', $perumahan],
                            ['rt', $rt],
                            ['rw', $rw],
                            ['kabupaten', $kabupaten]
                        ]);
                    });
                })->get();

                $validatedData = $request->validate([
                    'status' => 'required|in:Ditolak,Diterima',
                ]);

                return redirect()->route('pengaduan.index')->with('success', 'Pengaduan status updated successfully.');

                $pengaduan->status = $validatedData['status'];
                $pengaduan->save();

            } else {
                $pengaduan = Pengaduan::where('id_user', $user->id)->get();
            }

            return view('pengaduan/pengaduan', compact('pengaduan'));
        }
    }

    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'judul_pengaduan' => 'required',
            'deskripsi' => 'required',
            'detail_isi' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'kategori' => 'required',
        ]);

        // Create a new pengaduan
        $pengaduan = new Pengaduan();
        $pengaduan->judul_pengaduan = $validatedData['judul_pengaduan'];
        $pengaduan->deskripsi = $validatedData['deskripsi'];
        $pengaduan->detail_isi = $validatedData['detail_isi'];
        $pengaduan->lokasi = $validatedData['lokasi'];
        $pengaduan->status = $validatedData['status'];
        $pengaduan->kategori = $validatedData['kategori'];
        $pengaduan->save();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan created successfully.');
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('pengaduan.show', compact('pengaduan'));
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('pengaduan.edit', compact('pengaduan'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'judul_pengaduan' => 'required',
            'deskripsi' => 'required',
            'detail_isi' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'kategori' => 'required',
        ]);

        // Find the pengaduan by ID
        $pengaduan = Pengaduan::findOrFail($id);

        // Update the pengaduan with the validated data
        $pengaduan->judul_pengaduan = $validatedData['judul_pengaduan'];
        $pengaduan->deskripsi = $validatedData['deskripsi'];
        $pengaduan->detail_isi = $validatedData['detail_isi'];
        $pengaduan->lokasi = $validatedData['lokasi'];
        $pengaduan->status = $validatedData['status'];
        $pengaduan->kategori = $validatedData['kategori'];
        $pengaduan->save();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan updated successfully.');
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan deleted successfully.');
    }

}