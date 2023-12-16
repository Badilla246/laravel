<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performances extends Model
{
    use HasFactory;

    protected $fillable = [
        'bands_id', 'venues_id', 'Date', 'Time', 'TicketPrice'
    ];

    public function bands()
    {
        return $this->belongsTo(Bands::class, 'bands_id');
    }

    public function venues()
    {
        return $this->belongsTo(Venues::class, 'venues_id');
    }

    public function attendees()
    {
        return $this->hasMany(Attendees::class, 'performances_id');
    }

    public static function list()
    {
        $performances = Performances::orderByRaw('BandName')->get();
        $list = [];
        foreach ($performances as $performances) {
            $list[$performances->id] =$performances->BandName;
        }

        return $list;
    }
}
