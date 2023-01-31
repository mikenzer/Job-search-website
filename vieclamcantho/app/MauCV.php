<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MauCV extends Model
{
    public $timestamps = false;
    protected $fillable = [
       'maucv_ten', 'maucv_des', 'maucv_img', 'maucv_status', 'maucv_code'
    ];
    protected $primaryKey = 'maucv_id';
    protected $table = 'tbl_mau_cv';
}
