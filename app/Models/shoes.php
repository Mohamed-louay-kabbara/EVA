<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoes extends Model
{
    protected $fillable = ['price' ,'color','size','cont','model','CategoryId','image'];

    public function category(){
        return $this->hasMany(category::class);
    }

    public function orders(){
        return $this->hasMany(orders::class);
    }
}
