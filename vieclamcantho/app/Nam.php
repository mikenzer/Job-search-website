<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nam extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nam_nam'
    ];
    protected $primaryKey = 'nam_id';
    protected $table = 'tbl_nam';
}
