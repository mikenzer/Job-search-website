<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DangtinTuyendung extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'dangtin_id_ntd', 'dangtin_chucdanh', 'dangtin_capbac', 'dangtin_loaihinhcv', 'dangtin_mucluong', 'dangtin_diadiem', 'dangtin_nganhnghe', 'dangtin_sltuyen', 'dangtin_hannop_hs', 'dangtin_mota_cv', 'dangtin_kinhnghiem', 'dangtin_bangcap', 'dangtin_gioitinh', 'dangtin_yeucau_td', 'dangtin_chedo_phucloi', 'dangtin_hoso_yeucau', 'dangtin_nophs_mail', 'dangtin_nophs_hotline', 'dangtin_nguoilienhe', 'dangtin_daichi', 'dangtin_status'
    ];
    protected $primaryKey = 'dangtin_id';
    protected $table = 'tbl_dangtin';
}
