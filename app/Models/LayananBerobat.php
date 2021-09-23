<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananBerobat extends Model
{
    protected $table = "layanan_berobat";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','hewan_id','customer_id','keluhan_berobat','penyakit_id','status_op_id','tglobat','biayaobat'
    ];

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
