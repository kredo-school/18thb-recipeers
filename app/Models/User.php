<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
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

    public function gender(){
        return $this->belongsTo(User::class, "gender_id");
    }

    public function eating_pref(){
        return $this->belongsTo(User::class, "eating_pref_id");
    }

    public function nationality(){
        return $this->belongsTo(User::class, "nationality_id");
    }

    public function residence_city(){
        return $this->belongsTo(User::class, "residence_city_id");
    }

    public function job_status(){
        return $this->belongsTo(User::class, "job_status_id");
    }

    public function recipes(){
        return $this->hasMany(Recipe::class);
    }
}
