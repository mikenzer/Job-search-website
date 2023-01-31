<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NganhNghe extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nn_ten'
    ];
    protected $primaryKey = 'nn_id';
    protected $table = 'tbl_nganhnghe';
}
