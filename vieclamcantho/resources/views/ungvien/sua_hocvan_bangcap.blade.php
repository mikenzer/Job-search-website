@extends('ungvien.trang_quan_ly')
@section('content1')
@foreach($detail_uv as $key => $detail)
<div class="main-content">
    <div class="panel">
        <div class="panel-body">
            <div class="modal-content">
                <style>
                    .control-label {
                    padding-right: 0;
                    }
                    .select2-container {
                    z-index: 2020;
                    }
                </style>
                <div class="modal-header">
                    <h4 class="modal-title" style="text-align: center;">Cập nhật học vấn bằng cấp</h4>
                </div>
                <div class="modal-body">
                    <form id="frmEditTD" class="form-horizontal" action="{{URL::to('/update-hocvan-bangcap/'.$detail->taikhoan_id.'/'.$detail->bangcap_id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tên bằng cấp</label>
                            <div class="col-sm-10">
                                <input type="text" name="bangcap" class="form-control" value="{{$detail->bangcap_ten}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Đ.vị đào tạo</label>
                            <div class="col-sm-10">
                                <input type="text" name="truong" class="form-control" value="{{$detail->bangcap_dvi_daotao}}" required="">
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
                                             @if($th->thang_thang == $detail->bangcap_thangbd)
                                                            <option value="{{$th->thang_thang}}" selected>
                                    Tháng {{$th->thang_thang}}                                </option>
                                            @else
                                            <option value="{{$th->thang_thang}}" >
                                    Tháng {{$th->thang_thang}}                                </option>
                                            @endif
                            @endforeach
                                                           
                                        </select>
                                    </div>
                                    <div class="col-sm-5 col-xs-5">
                                        <select data-placeholder="Năm" class="form-control" name="namFrom" required="">
                                            <option value="">Năm</option>
                                             @foreach($nam as $key => $na)
                                             @if($na->nam_nam == $detail->bangcap_nambd)
                                                            <option value="{{$na->nam_nam}}" selected>
                                    Năm {{$na->nam_nam}}                                </option>
                                            @else
                                            <option value="{{$na->nam_nam}}" >
                                    Năm {{$na->nam_nam}}                                </option>
                                            @endif
                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt5">
                                    <div class="col-sm-2 col-xs-2 text-right" style="line-height: 34px">đến</div>
                                    <div class="col-sm-5 col-xs-5">
                                        <select data-placeholder="Tháng" class="form-control" name="thangTo" id="thangTo" required="">
                                            <option value="">Tháng</option>
                                            @foreach($thang as $key => $th)
                                             @if($th->thang_thang == $detail->bangcap_thangkt)
                                                            <option value="{{$th->thang_thang}}" selected>
                                    Tháng {{$th->thang_thang}}                                </option>
                                            @else
                                            <option value="{{$th->thang_thang}}" >
                                    Tháng {{$th->thang_thang}}                                </option>
                                            @endif
                                    @endforeach                               
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5 col-xs-5">
                                        <select data-placeholder="Năm" class="form-control" name="namTo" id="namTo" required="">
                                            <option value="">Năm</option>
                                             @foreach($nam as $key => $na)
                                             @if($na->nam_nam == $detail->bangcap_namkt)
                                                            <option value="{{$na->nam_nam}}" selected>
                                    Năm {{$na->nam_nam}}                                </option>
                                            @else
                                            <option value="{{$na->nam_nam}}" >
                                    Năm {{$na->nam_nam}}                                </option>
                                            @endif
                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                            Xếp loại
                            </label>
                            <div class="col-sm-10">
                                <select class="form-control" name="loai" required="">
                                    <option value="">Xếp loại</option>
                                    @foreach($xeploai as $key => $loai)
                                             @if($loai->loai_ten == $detail->bangcap_loai)
                                                            <option value="{{$loai->loai_ten}}" selected>
                                    {{$loai->loai_ten}}                                </option>
                                            @else
                                            <option value="{{$na->nam_nam}}" >
                                    {{$loai->loai_ten}}                                  </option>
                                            @endif
                            @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" >
                            Cập nhật
                            </button>
                        </div>
                        <!-- <input type="hidden" name="key" value="-1"> -->
                    </form>
                </div>
                <div class="modal-footer" >
                    <a type="button" class="btn btn-default" data-dismiss="modal" href="{{URL::to('/hocvan-bangcap/'.$detail->taikhoan_id)}}">Đóng</a>
                </div>
                <!-- <script>
                    $('#frmEditTD').submit(function () {
                        btnlinkload($('#btnSub'));
                        $.post(URL_ROOT + "ung-vien/taikhoan/updateTD", $(this).serializeArray(), function (r) {
                            btnlinkthanhcong($('#btnSub'), 'Cập nhật');
                            if (r.status == 1) {
                                refeshTD(r.data);
                                updateDiem(r.diem);
                                $('#modalGeneralHoSo').modal('hide');
                                                $('.wizard-nav a[data-type="bangcap"] .notYet').remove();
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
                    </script> -->
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection