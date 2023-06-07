<?php

namespace App\Services;

use App\Models\Pengumuman;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class DataPGMService
{
    /**
     * Get all DataPGM
     *
     * @param  string  $query
     */
    public static function findAllByStatus(?string $query): Collection
    {
        $DataPGM = Pengumuman::search($query)->query(function ($builder) {
            $builder->with(['judul_pengumuman', 'lokasi', 'kategori', 'status',])->withCount(['status']);
        })->orderBy('created_at', 'desc')->get();

        return $DataPGM;
    }
    /**
     * Create a user's DataPGM
     *
     * @param  UploadedFile  $image
     */
    public static function addPengumuman(array $request, ?UploadedFile $image): Pengumuman
    {
        if ($image) {
            $request['image'] = $image->store('image');
        }

        $DataPGM = Pengumuman::create([
            'judul_pengumuman' => $request['judul_pengumuman'],
            'kategori' => $request['kategori'],
            'status' => $request['status'],
            'image' => $request['image'],
            'deskripsi' => $request['deskripsi'],
            'detail_isi' => $request['detail_isi'],
            'lokasi' => $request['lokasi'],
        ]);

        $DataPGM->load('pengumuman');

        return $DataPGM;
    }


    /**
     * Delete a DataPGM
     */
    public static function deleteStory(Pengumuman $DataPGM): bool
    {
        Storage::delete($DataPGM->image);

        return $DataPGM->deleteOrFail();
    }
}