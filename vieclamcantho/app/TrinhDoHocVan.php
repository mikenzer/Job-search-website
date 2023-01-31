<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrinhDoHocVan extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'tdhv_ten'
    ];
    protected $primaryKey = 'tdhv_id';
    protected $table = 'tbl_trinhdo_hocvan';
}
