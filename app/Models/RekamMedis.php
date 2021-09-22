<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = "rekam_medis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','layanan_berobat_id','hewan_id','customer_id','penyakit_id','status_op_id','tglobat','biayaobat'
    ];

    public function layanan_berobat()
    {
        return $this->belongsTo(LayananBerobat::class);
    }

    public function hewan()
    {
        return $this->belongsTo(Hewan::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    public function status_op()
    {
        return $this->belongsTo(Status_OP::class);
    }
}
