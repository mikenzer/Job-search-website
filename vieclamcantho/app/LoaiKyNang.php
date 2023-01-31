<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiKyNang extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'loaikynang_loai'
    ];
    protected $primaryKey = 'loaikynang_id';
    protected $table = 'tbl_loai_kynang';

}
