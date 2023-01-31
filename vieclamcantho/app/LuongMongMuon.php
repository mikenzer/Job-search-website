<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuongMongMuon extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'lmm_ten'
    ];
    protected $primaryKey = 'lmm_id';
    protected $table = 'tbl_luongmongmuon';
}
