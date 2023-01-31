<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrinhDoNNUV extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'tdnn_id_uv', 'tdnn_ten', 'tdnn_nghe', 'tdnn_noi', 'tdnn_doc', 'tdnn_viet'
    ];
    protected $primaryKey = 'tdnn_id';
    protected $table = 'tbl_trinhdo_nn_uv';
}
