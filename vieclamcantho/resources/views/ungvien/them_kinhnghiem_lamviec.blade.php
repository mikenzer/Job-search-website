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
    
    <h4 class="modal-title" style="text-align: center;">Cập nhật kinh nghiệm</h4>
</div>
<div class="modal-body">
    <form id="frmEditKN" class="form-horizontal" action="{{URL::to('/add-kinhnghiem-lamviec/'.$detail->taikhoan_id)}}" method="post">
        @csrf

        <div class="form-group">
            <label class="col-sm-2 control-label">Tên công ty</label>
            <div class="col-sm-10">
                <input type="text" name="tencty" class="form-control" value="" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Chức danh</label>
            <div class="col-sm-10">
                <input type="text" name="chucdanh" class="form-control" value="" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">
                Thời gian
            </label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-2 col-xs-2 text-right" style="line-height: 34px">từ</div>
                    <div class="col-sm-5 col-xs-5">
                        <select data-placeholder="Tháng" class="form-control" name="thangFrom" required="">
                            <option value="">Tháng</option>
                                                            @foreach($thang as $key => $th)
                                                            <option value="{{$th->thang_thang}}">
                                    Tháng {{$th->thang_thang}}                                </option>
                            @endforeach
                                                           
                                                        </select>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <select data-placeholder="Năm" class="form-control" name="namFrom" required="">
                            <option value="">Năm</option>
                                                           @foreach($nam as $key => $na)
                                                            <option value="{{$na->nam_nam}}">
                                    Năm {{$na->nam_nam}}                                </option>
                            @endforeach
                                                        </select>
                    </div>
                </div>
                <div class="row mt5" id="tgTo">
                    <div class="col-sm-2 col-xs-2 text-right" style="line-height: 34px">đến</div>
                    <div class="col-sm-5 col-xs-5">
                        <select data-placeholder="Tháng" class="form-control" name="thangTo" id="thangTo" required="">
                            <option value="">Tháng</option>
                                                            @foreach($thang as $key => $th)
                                                            <option value="{{$th->thang_thang}}">
                                    Tháng {{$th->thang_thang}}                                </option>
                            @endforeach
                                                        </select>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <select data-placeholder="Năm" class="form-control" name="namTo" id="namTo" required="">
                            <option value="">Năm</option>
                                                           @foreach($nam as $key => $na)
                                                            <option value="{{$na->nam_nam}}">
                                    Năm {{$na->nam_nam}}                                </option>
                            @endforeach
                                                        </select>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">
                Mô tả
            </label>
            <div class="col-sm-10">
                <textarea class="form-control" cols="2" style="width: 100%" maxlength="500" name="mota"></textarea>
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
    <a type="button" class="btn btn-default" data-dismiss="modal" href="{{URL::to('/kinhnghiem-lamviec/'.$detail->taikhoan_id)}}">Đóng</a>
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