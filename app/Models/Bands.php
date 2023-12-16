<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bands extends Model
{
    use HasFactory;

    protected $fillable = [
        'BandName', 'Genre', 'CountryOfOrigin', 'FormationYear', 'AlbumsReleased',
    ];

    public function performances()
    {
        return $this->hasMany(Performance::class, 'bands_id');
    }
}
