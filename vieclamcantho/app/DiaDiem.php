<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'diadiem_ten'
    ];
    protected $primaryKey = 'diadiem_id';
    protected $table = 'tbl_diadiem';
}
