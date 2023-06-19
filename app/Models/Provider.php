<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'name',
        'phone'
    ];

    public function productos(){
        return $this->hasMany(Coche::class);
    }
}
