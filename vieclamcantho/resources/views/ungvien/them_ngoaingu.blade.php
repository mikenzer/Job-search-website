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

    <h4 class="modal-title" style="text-align: center;">Cập nhật ngoại ngữ</h4>
</div>
<div class="modal-body">
    <form id="frmEditNN" class="form-horizontal" action="{{URL::to('/add-trinhdo-nn/'.$detail->taikhoan_id)}}" method="post">
        @csrf
        <div class="form-group">
            <label class="col-sm-3 control-label">Ngoại ngữ</label>
            <div class="col-sm-9">
                <select class="form-control" name="ngoaingu_type" required="" id="ngoaingu_type">
                    <option value="">
                        Ngoại ngữ
                    </option>
                    @foreach($all_ngoaingu as $key => $ngoaingu)

                                            <option value="{{$ngoaingu->nn_ten}}">
                            {{$ngoaingu->nn_ten}}                        </option>
                    @endforeach  
                                                <option value="10">
                            Ngoại ngữ khác                        </option>
                                        </select>
            </div>
        </div>
        <div class="form-group" id="ngoaingu_khac">
            <label class="col-sm-3 control-label">Ngôn ngữ khác</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" value="" disabled="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nghe</label>
            <div class="col-sm-9">
                @foreach($loai_kynang as $key => $loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_nghe" value="{{$loai->loaikynang_loai}}">{{$loai->loaikynang_loai}}</label>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nói</label>
            <div class="col-sm-9">
                @foreach($loai_kynang as $key => $loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_noi" value="{{$loai->loaikynang_loai}}">{{$loai->loaikynang_loai}}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Đọc</label>
            <div class="col-sm-9">
                @foreach($loai_kynang as $key => $loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_doc" value="{{$loai->loaikynang_loai}}">{{$loai->loaikynang_loai}}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Viết</label>
            <div class="col-sm-9">
                @foreach($loai_kynang as $key => $loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_viet" value="{{$loai->loaikynang_loai}}">{{$loai->loaikynang_loai}}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" id="btnSub">
                Cập nhật
            </button>
        </div>
            </form>
</div>
<div class="modal-footer">
    <a class="btn btn-default" data-dismiss="modal" href="{{URL::to('/tinhoc-ngoaingu/'.$detail->taikhoan_id)}}">Đóng</a>
</div>
<script>
   

    $('#ngoaingu_type').change(function () {
        if ($(this).val() == 10) {
            $('#ngoaingu_khac input').prop('disabled', false);
            $('#ngoaingu_khac input').attr('name', 'ngoaingu_khac');
            $('#ngoaingu_khac input').prop('required', true);
        } else {
            $('#ngoaingu_khac input').prop('disabled', true);
            $('#ngoaingu_khac input').removeAttr('name');
            $('#ngoaingu_khac input').removeAttr('required');
        }
    });
    $('#ngoaingu_type').change();
</script></div>
</div>
</div>
</div>
@endforeach
@endsection