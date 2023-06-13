<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function records()
    {
        return $this->hasMany(Record::class, 'type_id');
    }
    public function sizes()
    {
        return $this->hasMany(ServiceSize::class, 'service_id');
    }
}
