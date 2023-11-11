<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    public function artist()
    {
        #eloquent relationship
        return $this->belongsTo(Artist::class);
    }

    public function service()
    {
        #eloquent relationship
        return $this->belongsTo(Service::class);
    }

    public function appointment()
    {
        #eloquent relationship
        return $this->belongsTo(Appointment::class);
    }
}
