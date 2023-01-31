<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhThucNopHS extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'htnhs_id_tintuyendung', 'htnhs_mail', 'htnhs_tructiep', 'htnhs_hotline'
    ];
    protected $primaryKey = 'htnhs_id';
    protected $table = 'tbl_hinhthucnop_hoso';
}
