<?php

namespace App\Models;
use Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class validDeposit extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
