<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Profile;
use App\Models\News;
use App\Models\TempDeposit;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'currency',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Profile(){
        return $this->hasOne(Profile::class)->orderBy('created_at','ASC');
    }

    public function TempDeposit(){
        return $this->hasOne(TempDeposit::class)->orderBy('created_at','ASC');
    }
    public function validDeposit(){
        return $this->hasOne(validDeposit::class)->orderBy('id','DESC');
    }

    public function withdrawal(){
        return $this->hasOne(withdrawal::class)->orderBy('created_at','ASC');
    }
    public function Charges(){
        return $this->hasMany(Charges::class)->orderBy('created_at','ASC');
    }
    public function currency(){
        return $this->hasMany(currency::class)->orderBy('created_at','ASC');
    }
    public function News(){
        return $this->hasMany(News::class)->orderBy('created_at','ASC');
    }
}
