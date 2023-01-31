<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnhUV extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'ha_id_uv', 'ha_hinh'
    ];
    protected $primaryKey = 'ha_id';
    protected $table = 'tbl_hinhanh_uv';
}
