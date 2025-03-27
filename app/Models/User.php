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


    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
//        'password' => 'hashed',
    ];

    static public function getSingle($id)
    {
        return User::find($id);
    }


    static public function getRecord()
    {
        return User::select('users.*', 'roles.name as role_name')
            ->leftJoin('roles', 'roles.id', '=', 'users.role_id')
            ->orderBy('users.id', 'desc')
            ->get();

    }
}
