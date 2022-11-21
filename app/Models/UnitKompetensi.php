<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKompetensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jenis_standar()
    {
        return $this->belongsTo(JenisStandar::class);
    }

    public function sub_unit_kompetensi()
    {
        return $this->hasMany(SubUnitKompetensi::class);
    }

    public function getRouteKeyName()
    {
        return 'kode_unit';
    }
}