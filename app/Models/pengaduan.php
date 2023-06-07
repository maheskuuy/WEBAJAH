<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->getKey() == null) {
                $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }
    protected $table = 'pengaduan';

    protected $fillable = [
        'judul_pengaduan',
        'deskripsi',
        'detail_isi',
        'lokasi',
        'status',
        'kategori',
    ];

    public function toSearchableArray(): array
    {
        return [
            'judul_pengaduan' => $this->name,
        ];
    }

    public function pengaduan(): HasMany
    {
        return $this->hasMany(pengaduan::class);
    }
}