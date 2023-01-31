<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiBangCap extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'loai_ten'
    ];
    protected $primaryKey = 'loai_id';
    protected $table = 'tbl_loai_bangcap_uv';
}
