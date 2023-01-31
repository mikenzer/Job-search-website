<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVucHD extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'lvhd_ten'
    ];
    protected $primaryKey = 'lvhd_id';
    protected $table = 'tbl_linhvuc_hoatdong';
}
