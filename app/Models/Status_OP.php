<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_OP extends Model
{
    protected $table = "status_op";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','status'
    ];

    public function layanan_berobat()
    {
        return $this->hasMany(LayananBerobat::class);
    }

    public function rekam_medis()
    {
        return $this->hasMany(RekamMedis::class);
    }
}
