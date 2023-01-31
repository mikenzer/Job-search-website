<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiKhoanNTD extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'ntd_email', 'ntd_matkhau', 'ntd_tencongty', 'ntd_masothue', 'taikhona_sdt', 'taikhoan_diachi', 'ntd_logo', 'ntd_khuvuc', 'ntd_quymo', 'ntd_khuvuc_kd', 'ntd_loaihinh_dn', 'ntd_website', 'ntd_youtube', 'ntd_banner', 'ntd_mota'
    ];
    protected $primaryKey = 'ntd_id';
    protected $table = 'tbl_taikhoan_ntd';
}
