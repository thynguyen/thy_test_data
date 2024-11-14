<?php
namespace App\Models;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    public static $TOTAL = 20; // PPAGINATION

    protected $fillable = [
        'full_name', 'username', 'email', 'password',
    ];
    //Hidden Fields (Password) for protecting your admin's data
    protected $hidden = [
        'password',
    ];

    protected $table = "admins";
}