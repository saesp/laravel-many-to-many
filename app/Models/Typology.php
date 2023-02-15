<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'code',
        'name',
        'digital',
    ];

    // ONE (typology) to MANY (products)
    public function products() {
        return $this -> hasMany(Product :: class);
    }
}
