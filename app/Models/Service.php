<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image1', 'image2', 'kategori'];

    public function liststuffs()
    {
        return $this->hasMany(Liststuff::class);
    }
}
