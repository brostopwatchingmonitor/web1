<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liststuff extends Model
{
    use HasFactory;
    protected $fillable = ['service_id', 'description', 'image_list'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
