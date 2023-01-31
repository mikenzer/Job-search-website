<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KyNangMem extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'knmem_id_uv', 'knmem_giaiquyetvande', 'knmem_lamviecnhom', 'knmem_tuduysangtao', 'knmem_hocvatuhoc', 'knmem_thuyettrinh', 'knmem_giaotiep', 'knmem_hoatdong', 'knmem_thanhtich'
    ];
    protected $primaryKey = 'knmem_id';
    protected $table = 'tbl_kynangmem';
}
