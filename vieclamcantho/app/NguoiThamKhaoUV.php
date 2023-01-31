<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiThamKhaoUV extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'thamkhao_id_uv','thamkhao_ten', 'thamkhao_congty', 'thamkhao_chucdanh','thamkhao_email', 'thamkhao_sdt'
    ];
    protected $primaryKey = 'thamkhao_id';
    protected $table = 'tbl_nguoi_thamkhao';
}
