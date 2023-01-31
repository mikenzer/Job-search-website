<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NgoaiNguKhac extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nnk_id_uv', 'nnk_ten', 'nnk_nghe', 'nnk_noi', 'nnk_doc', 'nnk_viet'
    ];
    protected $primaryKey = 'nnk_id';
    protected $table = 'tbl_ngoaingu_khac';
}
