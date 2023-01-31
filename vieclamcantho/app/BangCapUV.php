<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BangCapUV extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'bangcap_id_uv', 'bangcap_ten', 'bangcap_dvi_daotao', 'bangcap_thangbd', 'bangcap_nambd', 'bangcap_thangkt', 'bangcap_namkt', 'bangcap_loai'
    ];
    protected $primaryKey = 'bangcap_id';
    protected $table = 'tbl_bangcap_uv';
}
