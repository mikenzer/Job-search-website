<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenKyNang extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'tenkn_teni'
    ];
    protected $primaryKey = 'tenkn_id';
    protected $table = 'tbl_ten_knmem';
}
