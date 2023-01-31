<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KinhNghiemUV extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'kinhnghiem_id_uv', 'kinhnghiem_congty', 'kinhnghiem_chucdanh', 'kinhnghiem_thangbd', 'kinhnghiem_nambd', 'kinhnghiem_thangkt', 'kinhnghiem_namkt', 'kinhnghiem_loai'
    ];
    protected $primaryKey = 'kinhnghiem_id';
    protected $table = 'tbl_kinhnghiem_lamviec';
}
