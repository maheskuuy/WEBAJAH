<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailKedudukan extends Model
{
    protected $fillable = [
        'nama_perumahan',
        'RT',
        'RW',
        'kabupaten',
        'provinsi',
        'negara',
    ];

    /**
     * Get the user associated with the detail kedudukan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}