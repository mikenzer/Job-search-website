<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HosoUV extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'hoso_id_uv', 'hoso_hinhanh_uv', 'hoso_tinhtranghonnhan_uv', 'hoso_vitri', 'hoso_capbac', 'hoso_trangthai_timviec', 'hoso_mucluong', 'hoso_kinhnghiem', 'hoso_trinhdo', 'hoso_gioithieu', 'hoso_muctieu', 'hoso_nganhnghe', 'hoso_diadiem', 'hoso_cv_code'
    ];
    protected $primaryKey = 'hoso_id';
    protected $table = 'tbl_hoso_uv';
}
