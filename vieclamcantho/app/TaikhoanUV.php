<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaikhoanUV extends Model
{
     public $timestamps = false;
    protected $fillable = [
        'taikhoan_email', 'taikhoan_matkhau', 'taikhoan_ten', 'taikhoan_ngaysinh', 'taikhoan_gioitinh', 'taikhona_sdt', 'taikhoan_diachi'
    ];
    protected $primaryKey = 'taikhoan_id';
    protected $table = 'tbl_taikhoan_uv';
}
