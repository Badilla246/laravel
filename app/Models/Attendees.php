<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendees extends Model
{
    use HasFactory;

    protected $fillable = [
        'performances_id', 'TicketNumber', 'AttendeeName', 'Age', 'ContactInfo'
    ];

    public function performances()
    {
        return $this->belongsTo(Performances::class, 'performances_id');
    }
}
