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
    @if($detail->taikhoan_id == $detail->tdnn_id_uv)
    <form id="frmEditNN" class="form-horizontal" action="{{URL::to('/update-trinhdo-nn/'.$detail->taikhoan_id.'/'.$detail->tdnn_id)}}" method="post">
    @elseif($detail->taikhoan_id == $detail->nnk_id_uv)
    <form id="frmEditNN" class="form-horizontal" action="{{URL::to('/update-ngoaingu-khac/'.$detail->taikhoan_id.'/'.$detail->nnk_id)}}" method="post">
    @endif
        @csrf
        <div class="form-group">
            <label class="col-sm-3 control-label">Ngoại ngữ</label>
            <div class="col-sm-9">
                <select class="form-control" name="ngoaingu_type" required="" id="ngoaingu_type">
                    <option value="">
                        Ngoại ngữ
                    </option>
                    @foreach($all_ngoaingu as $key => $ngoaingu)
                    @if($ngoaingu->nn_ten == $detail->tdnn_ten)
                                            <option value="{{$ngoaingu->nn_ten}}" selected>
                            {{$ngoaingu->nn_ten}}                        </option>
                    @else
                        
                            <option value="{{$ngoaingu->nn_ten}}">
                            {{$ngoaingu->nn_ten}}                        </option>
                        
                   
                    
                    @endif

                    @endforeach 
                    
                    
                    @if($detail->nnk_id_uv == $detail->taikhoan_id )
                                            <option value="10" selected>
                            Ngoại ngữ khác                       </option>
                    
                     @else

                            <option value="10">
                            Ngoại ngữ khác                        </option>
                
                    @endif

                    
                                        </select>
            </div>
        </div>
        <div class="form-group" id="ngoaingu_khac">
            <label class="col-sm-3 control-label">Ngôn ngữ khác</label>
            
            @if($detail->nnk_id_uv == $detail->taikhoan_id )
            <div class="col-sm-9">
                <input type="text" class="form-control" value="{{$detail->nnk_ten}}" disabled="">
            </div>
             @else
             <div class="col-sm-9">
                <input type="text" class="form-control" value="" disabled="">
            </div>
            @endif
            
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nghe</label>
            <div class="col-sm-9">
                @foreach($loai_kynang as $key => $loai)
                @if($detail->nnk_nghe == $loai->loaikynang_loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_nghe" value="{{$loai->loaikynang_loai}}" checked>{{$loai->loaikynang_loai}}</label>
                </div>
                @elseif($detail->tdnn_nghe == $loai->loaikynang_loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_nghe" value="{{$loai->loaikynang_loai}}" checked>{{$loai->loaikynang_loai}}</label>
                </div>
                @else
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_nghe" value="{{$loai->loaikynang_loai}}" >{{$loai->loaikynang_loai}}</label>
                </div>
                @endif
                @endforeach
                
            </div>
        </div>
        <div class="form-group">

            <label class="col-sm-3 control-label">Nói</label>
            <div class="col-sm-9">
                @foreach($loai_kynang as $key => $loai)
                @if($detail->nnk_noi == $loai->loaikynang_loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_noi" value="{{$loai->loaikynang_loai}}" checked>{{$loai->loaikynang_loai}}</label>
                </div>
                @elseif($detail->tdnn_noi == $loai->loaikynang_loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_noi" value="{{$loai->loaikynang_loai}}" checked>{{$loai->loaikynang_loai}}</label>
                </div>
                @else
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_noi" value="{{$loai->loaikynang_loai}}" >{{$loai->loaikynang_loai}}</label>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Đọc</label>
            <div class="col-sm-9">
                @foreach($loai_kynang as $key => $loai)
                @if($detail->nnk_doc == $loai->loaikynang_loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_doc" value="{{$loai->loaikynang_loai}}" checked>{{$loai->loaikynang_loai}}</label>
                </div>
                @elseif($detail->tdnn_doc == $loai->loaikynang_loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_doc" value="{{$loai->loaikynang_loai}}" checked>{{$loai->loaikynang_loai}}</label>
                </div>
                @else
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_doc" value="{{$loai->loaikynang_loai}}" >{{$loai->loaikynang_loai}}</label>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Viết</label>
            <div class="col-sm-9">
                @foreach($loai_kynang as $key => $loai)
                @if($detail->nnk_viet == $loai->loaikynang_loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_viet" value="{{$loai->loaikynang_loai}}" checked>{{$loai->loaikynang_loai}}</label>
                </div>
                @elseif($detail->tdnn_viet == $loai->loaikynang_loai)
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_viet" value="{{$loai->loaikynang_loai}}" checked>{{$loai->loaikynang_loai}}</label>
                </div>
                @else
                <div class="radio">
                    <label>
                        <input required="" type="radio" name="ngoaingu_viet" value="{{$loai->loaikynang_loai}}" >{{$loai->loaikynang_loai}}</label>
                </div>
                @endif
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
    <a type="button" class="btn btn-default" data-dismiss="modal" href="{{URL::to('/tinhoc-ngoaingu/'.$detail->taikhoan_id)}}">Đóng</a>
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