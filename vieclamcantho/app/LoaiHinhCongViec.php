<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiHinhCongViec extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'lhcv_ten'
    ];
    protected $primaryKey = 'lhcv_id';
    protected $table = 'tbl_loaihinh_congviec';
}
