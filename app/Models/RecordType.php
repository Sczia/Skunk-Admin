<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function records(){
        return $this->hasMany(Record::class,'type_id');
    }
}
