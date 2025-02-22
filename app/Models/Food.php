<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = ['restaurant_id', 'name', 'price', 'description', 'img'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
