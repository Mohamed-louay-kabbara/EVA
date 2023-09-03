<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name_ar' ,'name_en','image'];
    
    public function shoes(){
        return $this->belongsTo(shoes::class);
    }

}
