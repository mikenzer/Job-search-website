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
    
    <h4 class="modal-title" style="text-align: center;">Thông tin người tham khảo</h4>
</div>
<div class="modal-body">
    <form id="frmEditTK" class="form-horizontal" action="{{URL::to('/add-nguoi-thamkhao/'.$detail->taikhoan_id)}}" method="post">
    	@csrf
        <div class="form-group">
            <label class="col-sm-2 control-label">Họ tên</label>
            <div class="col-sm-10">
                <input type="text" name="hoten" class="form-control" value="" placeholder="Nhập tên người tham khảo" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Chức danh</label>
            <div class="col-sm-10">
                <input type="text" name="chucdanh" class="form-control" value="" placeholder="Chức danh/vị trí" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Công ty</label>
            <div class="col-sm-10">
                <input type="text" name="tencty" class="form-control" value="" placeholder="Nhập tên công ty" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" value="" placeholder="Địa chỉ email liên hệ">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">SDT</label>
            <div class="col-sm-10">
                <input type="number" name="sdt" class="form-control" value="" placeholder="Số điện thoại liên hệ">
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
</div>
</div>
</div>
</div>
@endforeach
@endsection