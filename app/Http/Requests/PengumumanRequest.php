<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PengumumanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'judul_pengumuman' => ['required', 'string', 'max:50'],
            'deskripsi' => ['required', 'string', 'max:100'],
            'kategori' => ['required', 'string', 'max:100'],
            'status' => ['required', 'string', 'max:100'],
            'detail_isi' => ['required', 'string', 'max:255'],
            'lokasi' => ['required', 'string', 'max:100'],
            'image' => ['image', 'file', 'max:2048'],

        ];
    }
}