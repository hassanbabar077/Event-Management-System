<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'eventType_id',
        'discription',
        'main_image',
        'status',
        'price',
        'totaltickets',
        'startDate',
        'endDate',
        'time',
    ];
    public function eventType(){
        return $this->belongsTo(EventType::class);
    }
}
