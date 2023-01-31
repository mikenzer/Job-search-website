<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thang extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'thang_thang'
    ];
    protected $primaryKey = 'thang_id';
    protected $table = 'tbl_thang';
}
