<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuyenLoi extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'quyenloi_id_tintuyendung', 'quyenloi_baohiem', 'quyenloi_nghiphep', 'quyenloi_dongphuc', 'quyenloi_tangluong', ' quyenloi_thuong', 'quyenloi_daotao', 'quyenloi_phucap', 'quyenloi_laptop', 'quyenloi_ctphi', 'quyenloi_dulich', 'quyenloi_phucaptn', 'quyenloi_chamsocsk', 'quyenloi_xe', 'quyenloi_clb', 'quyenloi_dlnuocngoai'
    ];
    protected $primaryKey = 'quyenloi_id';
    protected $table = 'tbl_quyenloi';
}
