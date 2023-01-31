<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapBac extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'capbac_ten'
    ];
    protected $primaryKey = 'capbac_id';
    protected $table = 'tbl_capbac';
}
