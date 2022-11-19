<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisStandar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function unit_kompetensi()
    {
        return $this->hasMany(UnitKompetensi::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}