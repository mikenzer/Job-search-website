@extends('ungvien.trang_quan_ly')
@section('content1')
@foreach($detail_uv as $key => $detail)
<link rel="stylesheet"
    href="https://vieclamcantho.com.vn/view/ungvien/assets/styles/bundle.css?ver=311">
<link rel="stylesheet" type="text/css"
    href="/view/ungvien/assets/vendor/dropzone/dropzone.css"/>
<link rel="stylesheet" type="text/css"
    href="https://vieclamcantho.com.vn/view/ungvien/hoso/css/capnhathoso.css?ver=311"/>
<script src="https://kit.fontawesome.com/c3d7e64cbd.js" crossorigin="anonymous"></script>
<script src="https://vieclamcantho.com.vn/view/ungvien/assets/vendor/jquery/dist/jquery.js"></script>
<script src="https://vieclamcantho.com.vn/view/public/assets/lib/sweetalert2/sweetalert2.min.js"></script>
<script src="https://vieclamcantho.com.vn/view/public/assets/js/function.js?ver=317"></script>
<!-- main area -->
<div class="main-content">
    <!--  <div class="alert alert-danger">
        <button class="btn btn-bitbucket mr10" id="btnXacThucSDT" type="button">
            XÁC THỰC SỐ ĐIỆN THOẠI
        </button>
        <i>* Tài khoản đã xác thực số điện thoại sẽ được đánh dấu ĐÃ XÁC THỰC</i>
        </div>   -->  
    <div class="panel">
        <div class="panel-body">
            <div class="lineWizard"></div>
            <ul class="wizard-nav">
                <li >
                    <a href="{{URL::to('/thong-tin-ca-nhan/'.$detail->taikhoan_id)}}" class="info">
                        <div>
                            <i class="fa fa-user"></i>
                        </div>
                        <p>Thông tin cá nhân</p>
                        
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/thong-tin-ho-so/'.$detail->taikhoan_id)}}" data-type="hoso" class="hoso">
                        <div>
                            <i class="fa fa-info-circle"></i>
                        </div>
                        <p>Thông tin hồ sơ</p>
                        
                    </a>
                </li>
                <li>
                    <a data-type="bangcap" class="bangcap" href="{{URL::to('/hocvan-bangcap/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <p>Học vấn bằng cấp</p>
                        
                    </a>
                </li>
                <li>
                    <a data-type="kinhnghiem" class="kinhnghiem" href="{{URL::to('/kinhnghiem-lamviec/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-calendar-day"></i>
                        </div>
                        <p>Kinh nghiệm làm việc</p>
                    </a>
                </li>
                <li>
                    <a data-type="kynang" class="kynang kynangchuyenmon" href="{{URL::to('/kynang/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-bolt"></i>
                        </div>
                        <p>Kỹ năng</p>

                    </a>
                </li>
                <li  class="active">
                    <a data-type="tinhoc" class="tinhoc ngoaingu" href="{{URL::to('/tinhoc-ngoaingu/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-computer"></i>
                        </div>
                        <p>Tin học - Ngoại ngữ</p>
                    </a>
                </li>
            </ul>
            <!--  <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="checkbox checbox-switch switch-primary">
                        <label>
                            <input id="ungvien_hienthihs" type="checkbox"
                                   name="" checked/>
                            <span></span>
                        </label>
                        <span style="font-weight: 500; color: #707070; font-size: 14px">Cho phép nhà tuyển dụng tìm kiếm</span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="checkbox">
                        <label id="hidden_info">
                            <i class="fa fa-eye-slash"></i>
                            <span style="font-weight: 500; color: #707070; font-size: 14px">Ẩn thông tin</span>
                        </label>
                    </div>
                </div>
                                    <div class="col-md-3 col-xs-6"></div>
                    <div class="col-md-3 col-xs-6 vieclam03 hidden">
                        <div class="vieclamBody">
                            <div class="text-center px-3 my-2">
                                <p class="mb-0 mt-3">
                                    Xem <span id="num-cvht">3</span> nội dung cần làm</p>
                                <a href="javascript:void(0)"
                                   class="expanded-button expanded-divider">
                                    <span><i class="fas fa-angle-down"></i></span>
                                </a>
                            </div>
                            <ul class="content list-unstyled mb-0">
                                <li style="display: block;" class="hidden list-hths" data-key="kynangchuyenmon">Kỹ năng chuyên môn</li><li style="display: block;" class="hidden list-hths" data-key="ungvien_image">Avatar</li><li style="display: block;" class="hidden list-hths" data-key="ungvien_xacthucsdt">Xác thực SĐT</li>                            </ul>
                        </div>
                    </div>
                            </div> -->
        </div>
    </div>
    <!--  <div id="panelContent">
        <div class="panel">
            <div class="panel-body">
                <div class="lds-ellipsis" style="margin: 0 auto">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        </div> -->

<!-- /main area -->
<div id="panelContent">
    <div class="panel">
        <form class="form-horizontal" id="frmTH" action="{{URL::to('/add-tinhoc-ngoaingu/'.$detail->taikhoan_id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel-heading">
                        <?php
                $message = Session::get('message');
                if($message){
                echo '<span class="text-success">'.$message.'</span>';
                 Session::put('message',null);
                }
            ?><br>
                        <span>Ngoại ngữ</span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div id="divNN">
                                @foreach($all_trinhdonn as $key => $tdnn)
                                @if($tdnn->tdnn_id_uv == $detail->taikhoan_id)
                                <div class="col-sm-12 mb10">
                                    <div class="itemNN">
                                        <div class="toolBoxNN">
                                            <a class="btn btn-primary btn-block btn-xs btnNgoaiNgu" type="button" title="Sửa thông tin" data-id="14148" href="{{URL::to('/sua-ngoaingu/'.$detail->taikhoan_id.'/'.$tdnn->tdnn_id)}}">
                                            <i class="far fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-block btn-xs btnDelNgoaiNgu" type="button" title="Xóa thông tin" data-id="14148" href="{{URL::to('/xoa-ngoaingu/'.$detail->taikhoan_id.'/'.$tdnn->tdnn_id)}}">
                                            <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                        <div class="mb5" style="font-weight: 500">{{$tdnn->tdnn_ten}}</div>
                                        <div style="font-size: 12px">
                                            Nghe: {{$tdnn->tdnn_nghe}} -
                                            Nói: {{$tdnn->tdnn_noi}} - Đọc: {{$tdnn->tdnn_doc}}                                                - Viết: {{$tdnn->tdnn_viet}}                                            
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                                @foreach($all_ngoaingukhac as $key => $nnk)
                                @if($nnk->nnk_id_uv == $detail->taikhoan_id)
                                <div class="col-sm-12 mb10">
                                    <div class="itemNN">
                                        <div class="toolBoxNN">
                                            <a class="btn btn-primary btn-block btn-xs btnNgoaiNgu" type="button" title="Sửa thông tin" data-id="14148" href="{{URL::to('/sua-ngoaingu-khac/'.$detail->taikhoan_id.'/'.$nnk->nnk_id)}}">
                                            <i class="far fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-block btn-xs btnDelNgoaiNgu" type="button" title="Xóa thông tin" data-id="14148" href="{{URL::to('/xoa-ngoaingu-khac/'.$detail->taikhoan_id.'/'.$nnk->nnk_id)}}">
                                            <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                        <div class="mb5" style="font-weight: 500">{{$nnk->nnk_ten}}</div>
                                        <div style="font-size: 12px">
                                            Nghe: {{$nnk->nnk_nghe}} -
                                            Nói: {{$nnk->nnk_noi}} - Đọc: {{$nnk->nnk_doc}}                                                - Viết: {{$nnk->nnk_viet}}                                            
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="col-sm-12 mb10">
                                <div class="itemNN">
                                    <div style="text-align: center;padding: 15px;">
                                        <a class="btnNgoaiNgu add-language" href="{{URL::to('/them-ngoaingu/'.$detail->taikhoan_id)}}"><i class="fal fa-plus"></i> Thêm ngoại
                                        ngữ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel-heading">
                        <?php
                $message1 = Session::get('message1');
                if($message1){
                echo '<span class="text-success">'.$message1.'</span>';
                 Session::put('message1',null);
                }
            ?><br>
                        <span>Tin học</span>
                    </div>
                     @foreach($all_tinhoc as $key => $tinhoc)
                     @if($tinhoc->tinhoc_id_uv == $detail->taikhoan_id)
                    <div class="panel-body checkbo">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">MS Word</label>

                            <div class="col-sm-9">
                               
                                @foreach($loai_kynang as $key => $loai)
                                @if($tinhoc->tinhoc_word == $loai->loaikynang_loai)
                                <div class="radio ml0">
                                    <label class="cb-radio cb-sm checked" style="padding: 0;">
                                    <span><input type="radio" name="ungvien_word" value="{{$loai->loaikynang_loai}}" checked></span>{{$loai->loaikynang_loai}}                                   </label>
                                </div>
                                @else
                                <div class="radio ml0">
                                    <label class="cb-radio cb-sm " style="padding: 0;">
                                    <span><input required="" type="radio" name="ungvien_word" value="{{$loai->loaikynang_loai}}" ></span>{{$loai->loaikynang_loai}}                                   </label>
                                </div>
                                @endif
                                @endforeach
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">MS Excel</label>
                            <div class="col-sm-9">
                                @foreach($loai_kynang as $key => $loai)
                                @if($tinhoc->tinhoc_excel == $loai->loaikynang_loai)
                                <div class="radio ml0">
                                    <label class="cb-radio cb-sm checked" style="padding: 0;">
                                    <span><input type="radio" name="ungvien_excel" value="{{$loai->loaikynang_loai}}" checked></span>{{$loai->loaikynang_loai}}                                   </label>
                                </div>
                                @else
                                <div class="radio ml0">
                                    <label class="cb-radio cb-sm " style="padding: 0;">
                                    <span><input required="" type="radio" name="ungvien_excel" value="{{$loai->loaikynang_loai}}" ></span>{{$loai->loaikynang_loai}}                                   </label>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">MS Power Point</label>
                            <div class="col-sm-9">
                                @foreach($loai_kynang as $key => $loai)
                                @if($tinhoc->tinhoc_pp == $loai->loaikynang_loai)
                                <div class="radio ml0">
                                    <label class="cb-radio cb-sm checked" style="padding: 0;">
                                    <span><input type="radio" name="ungvien_pp" value="{{$loai->loaikynang_loai}}" checked></span>{{$loai->loaikynang_loai}}                                   </label>
                                </div>
                                @else
                                <div class="radio ml0">
                                    <label class="cb-radio cb-sm " style="padding: 0;">
                                    <span><input required="" type="radio" name="ungvien_pp" value="{{$loai->loaikynang_loai}}" ></span>{{$loai->loaikynang_loai}}                                   </label>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Photoshop</label>
                            <div class="col-sm-9">
                                @foreach($loai_kynang as $key => $loai)
                                @if($tinhoc->tinhoc_ps == $loai->loaikynang_loai)
                                <div class="radio ml0">
                                    <label class="cb-radio cb-sm checked" style="padding: 0;">
                                    <span><input type="radio" name="ungvien_ps" value="{{$loai->loaikynang_loai}}" checked></span>{{$loai->loaikynang_loai}}                                   </label>
                                </div>
                                @else
                                <div class="radio ml0">
                                    <label class="cb-radio cb-sm " style="padding: 0;">
                                    <span><input required="" type="radio" name="ungvien_ps" value="{{$loai->loaikynang_loai}}" ></span>{{$loai->loaikynang_loai}}                                   </label>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                   @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btnSub" style="width: 150px">
                        <i class="far fa-check-circle"></i> Cập nhật
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        $('#frmTH .checkbo').checkBo();
        $('#frmTH').submit(function () {
            elm = $('#frmHD .btnSub');
            btnlinkload(elm);
            $.post(URL_ROOT + "ung-vien/taikhoan/updateTH", $(this).serializeArray(), function (r) {
                btnlinkthanhcong(elm, '<i class="far fa-check-circle"></i> Cập nhật');
                if (r.status == 1) {
                    call_noti('Cập nhật thành công', 'success');
                    updateDiem(r.diem);
                    $("html, body").animate({scrollTop: 0}, '150');
                    $('.wizard-nav a[data-type="tinhoc"] .notYet').remove();
                } else
                    call_noti(r.message, 'error');
            }, 'JSON');
            return false;
        });
    </script>
</div>
</div>
</div>
</div>
@endforeach 
@endsection