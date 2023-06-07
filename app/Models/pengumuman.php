<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;


class Pengumuman extends Authenticatable
{
    use HasFactory, HasUuids;

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

    protected $table = 'pengumuman';
    protected $fillable = [
        'judul_pengumuman',
        'deskripsi',
        'detail_isi',
        'lokasi',
    ];

    public function toSearchableArray(): array
    {
        return [
            'judul_pengumuman' => $this->name,
        ];
    }

    public function pengumuman(): HasMany
    {
        return $this->hasMany(Pengumuman::class);
    }
}