<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinHocUV extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'tinhoc_id_uv', 'tinhoc_word', 'tinhoc_excel', 'tinhoc_pp', 'tinhoc_ps'
    ];
    protected $primaryKey = 'tinhoc_id';
    protected $table = 'tbl_tinhoc';
}
