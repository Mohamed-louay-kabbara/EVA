<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opinion extends Model
{
    protected $fillable = ['user_id' ,'number'];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
