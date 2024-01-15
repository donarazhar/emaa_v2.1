<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Karyawan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "tbl_user";
<<<<<<< HEAD
=======
    protected $primaryKey = "id_user";
>>>>>>> 0a4395a (Halaman Dashboard Karyawan)

    // Agar tanda string -," muncul di datatable
    // public $incrementing = false;

<<<<<<< HEAD
    protected $fillable = [];


    protected $hidden = [];
=======
    protected $fillable = [
        'email',
        'nama_user',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
>>>>>>> 0a4395a (Halaman Dashboard Karyawan)

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
<<<<<<< HEAD
    protected $casts = [];
=======
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
>>>>>>> 0a4395a (Halaman Dashboard Karyawan)
}
