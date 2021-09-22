<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananPenitipan extends Model
{
    protected $table = "layanan_penitipan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','hewan_id','customer_id','tglin','tglout','biayatitip'
    ];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
