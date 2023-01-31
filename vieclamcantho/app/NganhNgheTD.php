<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NganhNgheTD extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nntd_ten'
    ];
    protected $primaryKey = 'nntd_id';
    protected $table = 'tbl_nganhnghe_td';
}
