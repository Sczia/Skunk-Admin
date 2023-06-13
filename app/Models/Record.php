<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function recordType()
    {
        return $this->belongsTo(RecordType::class, 'record_id');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
    public function client()
    {
        return $this->belongsTo(Clients::class, 'client_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
