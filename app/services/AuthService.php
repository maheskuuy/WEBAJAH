<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\UploadedFile;

class AuthService
{
    /**
     * Login a user
     */
    public static function login(array $creadentials): bool
    {
        return auth()->attempt($creadentials);
    }

    /**
     * Register a new user
     *
     * @param  UploadedFile  $image
     */
    public static function registerAuthor(array $input, ?UploadedFile $image): User
    {
        if ($image) {
            $input['image'] = $image->store('image');
        }

        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'image' => $image ? $input['image'] : null,
            'role' => 'warga',
            'password' => bcrypt($input['password']),
        ]);

        return $user;
    }

    public static function registerAdmin(array $input, ?UploadedFile $image): User
    {
        if ($image) {
            $input['image'] = $image->store('image');
        }

        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'image' => $image ? $input['image'] : null,
            'role' => 'admin',
            'password' => bcrypt($input['password']),
        ]);

        return $user;
    }

    /**
     * Logout a user
     */
    public static function logout(Authenticatable $user): bool
    {
        return $user->currentAccessToken()->delete();
    }
}