<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapBacTD extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'cbtd_ten'
    ];
    protected $primaryKey = 'cbtd_id';
    protected $table = 'tbl_capbac_tuyendung';
}
