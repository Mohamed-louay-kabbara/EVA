<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = ['user_id' ,'type_delivery','shose_id','address'];
    use HasFactory;
    public function shose(){
        return $this->belongsTo(shoes::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
