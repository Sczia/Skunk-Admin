<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'client_id');
    }
    public function records()
    {
        return $this->hasMany(Record::class, 'client_id');
    }
    public function recordCount()
    {
        $records = Record::where('client_id', $this->id)->where('type', 'new')->get();
        if ($records->count() > 12) {
            foreach ($records as $key => $record) {
                $record->type = "old";
                $record->save();
            }
            return 0;
        }
        return $records->count();
    }
}
