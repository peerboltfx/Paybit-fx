<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class withdrawal extends Model
{
    protected $guarded=[];

    public function user() {
       return $this->belongsTo(User::class);
    }
    use HasFactory;
}
