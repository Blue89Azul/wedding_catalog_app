<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_last',
        'name_first',
        'name_last_kana',
        'name_first_kana',
        'email',
        'password',
        'address_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function insert(array $insert_data): void
    {
        $this::create([
            'name_last'      => $insert_data['name_last'],
            'name_first'     => $insert_data['name_first'],
            'name_last_kana' => $insert_data['name_last_kana'],
            'name_fist_kana' => $insert_data['name_fist_kana'],
            'email'          => $insert_data['email'],
            'password'       => Hash::make($insert_data['password']),
            'address_id'     => $insert_data['address_id'],
        ]);

        $this->save();
    }
}
