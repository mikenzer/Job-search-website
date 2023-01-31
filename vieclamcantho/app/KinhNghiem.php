<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KinhNghiem extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'kn_ten'
    ];
    protected $primaryKey = 'kn_id';
    protected $table = 'tbl_kinhnghiem';
}
