<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiHinhCT extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'lhct_ten'
    ];
    protected $primaryKey = 'lhct_id';
    protected $table = 'tbl_loaihinh_cty';
}
