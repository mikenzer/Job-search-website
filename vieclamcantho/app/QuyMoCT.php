<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuyMoCT extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'qmct_ten'
    ];
    protected $primaryKey = 'qmct_id';
    protected $table = 'tbl_quymo_congty';

}
