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
        'name',
        'username',
        'email',
        'password',
        'role',
        'phone_number',
        'gender',
        'address',
        'dob',
        'image',
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

    // Phương thức kiểm tra vai trò admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // app/Models/User.php

    // public function getRoleTextAttribute()
    // {
    //     switch ($this->role) {
    //         case 1:
    //             return 'Admin';
    //         case 2:
    //             return 'Admin1';
    //         case 3:
    //             return 'Admin2';
    //         case 4:
    //             return 'Admin3';
    //         case 5:
    //             return 'User';
    //         default:
    //             return 'Không Có Quyền';
    //     }
    // }
}
