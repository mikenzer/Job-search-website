<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KyNangChuyenMon extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'kncmn_id_uv', 'kncm_ten', 'kncm_loai'
    ];
    protected $primaryKey = 'kncm_id';
    protected $table = 'tbl_kynang_chuyenmon';

}
