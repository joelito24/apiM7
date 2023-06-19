<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descr',
        'price',
        'cant',
        'prov_id'
    ];

    public function proveedors(){
        return $this->belongsTo(Provider::class);
    }
}
