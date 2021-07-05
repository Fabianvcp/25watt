<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

public function adminlte_image()
{
//        si photo es distinto a null salga la photo de perfil, en caso contrario llamara una imagen del siguiente link

    return 'https://picsum.photos/300/300';

}

public function adminlte_desc()
{
    //descripción de panel
    return optional(auth()->user()->created_at)->locale('es')->translatedFormat('l d \d\e F \d\e\l\ Y');
}

}
