@extends('ungvien.trang_quan_ly') 
@section('content1')
@foreach($detail_uv as $key => $detail)
<div class="main-content">
          <div class="panel">
        <div class="panel-body">
<div class="modal-content"><style>
    .control-label {
        padding-right: 0;
    }

    .select2-container {
        z-index: 2020;
    }
</style>
<div class="modal-header">
    
    <h4 class="modal-title" style="text-align: center;">Thêm kỹ năng chuyên môn</h4>
</div>
<div class="modal-body">
    <form id="frmEditKN" class="form-horizontal" action="{{URL::to('/add-kncm/'.$detail->taikhoan_id)}}" method="post">
        @csrf

        <div class="form-group">
            <label class="col-sm-2 control-label">Tên kỹ năng</label>
            <div class="col-sm-7">
                <input type="text" name="tenkncm" class="form-control" value="" required="">
            </div>
            <div class="col-sm-3">
                        <select class="form-control" name="loaikncm" required="">
                           <option value="">
                                ----Chọn----
                            </option>
                            
                            @foreach($loai_kynang as $key => $loaikn)
                            
                            <option value="{{$loaikn->loaikynang_loai}}">
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                           
                            @endforeach
                        </select>
                    </div>
        </div>
        
        <div class="text-center">
            <button class="btn btn-primary" id="btnSub">
                Cập nhật
            </button>
        </div>
        <input type="hidden" name="key" value="-1">
    </form>
</div>
<div class="modal-footer">
    <a type="button" class="btn btn-default" data-dismiss="modal" href="{{URL::to('/kynang/'.$detail->taikhoan_id)}}">Đóng</a>
</div>
<!-- <script>
    $('#cvhientai').change(function () {
        if ($(this).is(":checked")) {
            $('#thangTo').removeAttr('name');
            $('#namTo').removeAttr('name');
            $('#thangTo').removeAttr('required');
            $('#namTo').removeAttr('required');
            $('#tgTo').fadeOut();
        } else {
            $('#thangTo').attr('name', 'thangTo');
            $('#namTo').attr('name', 'namTo');
            $('#thangTo').prop('required', true);
            $('#namTo').prop('required', true);
            $('#tgTo').fadeIn();
        }
    });
    $('#cvhientai').trigger('change');
    $('#frmEditKN').submit(function () {
        btnlinkload($('#btnSub'));
        $.post(URL_ROOT + "ung-vien/taikhoan/updateKN", $(this).serializeArray(), function (r) {
            btnlinkthanhcong($('#btnSub'), 'Cập nhật');
            if (r.status == 1) {
                refeshKN(r.data);
                updateDiem(r.diem);
                $('#modalGeneralHoSo').modal('hide');
                                $('.wizard-nav a[data-type="kinhnghiem"] .notYet').remove();
                            } else {
                Swal.fire({
                    title: 'Cập nhật thất bại',
                    text: r.message + '\nVui lòng liên hệ quản trị viên để biết thêm.',
                    icon: 'error',
                    showCancelButton: false,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'OK'
                }).then(function (resSwal) {
                    if (resSwal.isConfirmed) {
                        location.reload();
                    }
                });
            }
        }, 'JSON');
        return false;
    });
</script> --></div>
</div>
</div>
</div>
@endforeach
@endsection