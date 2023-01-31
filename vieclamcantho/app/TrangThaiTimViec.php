<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrangThaiTimViec extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'tttv_ten'
    ];
    protected $primaryKey = 'tttv_id';
    protected $table = 'tbl_trangthai_timviec';
}
