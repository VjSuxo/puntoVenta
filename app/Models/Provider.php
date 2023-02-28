<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable=[
        'name','email','ruc_number','addres','phone',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
