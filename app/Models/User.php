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
        'role_id',
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

    public function roles(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

//    static public function getUserId($id)
//    {
//        return User::find($id);
//    }
//
//
//    static public function getUserData()
//    {
//        return User::select('users.*', 'roles.name as role_name')
//            ->leftJoin('roles', 'roles.id', '=', 'users.role_id')
//            ->orderBy('users.id', 'desc')
//            ->get();
//
//    }
}
