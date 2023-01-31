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
<div class="main-content">
    <div class="panel">
        <div class="panel-body">
            <div class="lineWizard"></div>
            <ul class="wizard-nav">
                <li class="">
                    <a data-type="info" class="info" href="{{URL::to('/thong-tin-ca-nhan/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-user"></i>
                        </div>
                        <p>Thông tin cá nhân</p>
                    </a>
                </li>
                <li class="">
                    <a href="{{URL::to('/thong-tin-ho-so/'.$detail->taikhoan_id)}}" data-type="hoso" class="hoso">
                        <div>
                            <i class="fa fa-info-circle"></i>
                        </div>
                        <p>Thông tin hồ sơ</p>
                    </a>
                </li>
                <li >
                    <a data-type="bangcap" class="bangcap" href="{{URL::to('/hocvan-bangcap/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <p>Học vấn bằng cấp</p>
                    </a>
                </li >
                <li class="active">
                    <a data-type="kinhnghiem" class="kinhnghiem" href="{{URL::to('/kinhnghiem-lamviec/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-calendar-day"></i>
                        </div>
                        <p>Kinh nghiệm làm việc</p>
                    </a>
                </li>
                <li class="">
                    <a data-type="kynang" class="kynang kynangchuyenmon" href="{{URL::to('/kynang/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-bolt"></i>
                        </div>
                        <p>Kỹ năng</p>
                        
                    </a>
                </li>
                <li class="">
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
                            <input id="ungvien_hienthihs" type="checkbox" name="">
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
                                    Xem <span id="num-cvht">2</span> nội dung cần làm</p>
                                <a href="javascript:void(0)" class="expanded-button expanded-divider">
                                    <span><i class="fas fa-angle-down"></i></span>
                                </a>
                            </div>
                            <ul class="content list-unstyled mb-0">
                                <li style="display: block;" class="hidden list-hths" data-key="kynangchuyenmon">Kỹ năng chuyên môn</li><li style="display: block;" class="hidden list-hths" data-key="ungvien_xacthucsdt">Xác thực SĐT</li>                            </ul>
                        </div>
                    </div>
                            </div> -->
        </div>
    </div>
    <div id="panelContent">
        <div class="panel">
            <div class="row">
                <div class="row">
                    
                </div>
                <div class="col-sm-6">
                    
                    <div class="panel-heading">
                        <?php
                        $message = Session::get('message');
                        if($message){
                        echo '<span class="text-success">'.$message.'</span>';
                         Session::put('message',null);
                        }
                        ?><br>
                        <span>Kinh nghiệm làm việc</span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach($all_kinhnghiem as $key => $kinhnghiem)
                            @if($kinhnghiem->kinhnghiem_id_uv == $detail->taikhoan_id)
                            <div id="divKN">
                                <div class="col-sm-12 mb10">
                                    <div class="itemKN">
                                        <div class="toolBoxKN">
                                            <a class="btn btn-primary btn-block btn-xs btnKinhNghiem" href="{{URL::to('/sua-kinhnghiem-lamviec/'.$detail->taikhoan_id.'/'.$kinhnghiem->kinhnghiem_id)}}" data-id="0">
                                            <i class="far fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-block btn-xs btnDelKinhNghiem" href="{{URL::to('/xoa-kinhnghiem-lamviec/'.$detail->taikhoan_id.'/'.$kinhnghiem->kinhnghiem_id)}}" data-id="0">
                                            <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                        <div class="mb5" style="font-weight: 500">{{$kinhnghiem->kinhnghiem_chucdanh}}</div>
                                        <div class="mb5">{{$kinhnghiem->kinhnghiem_congty}}</div>
                                        <div style="font-size: 12px">Từ
                                            tháng {{$kinhnghiem->kinhnghiem_thangbd}}/{{$kinhnghiem->kinhnghiem_nambd}}                                            đến tháng {{$kinhnghiem->kinhnghiem_thangkt}}/{{$kinhnghiem->kinhnghiem_namkt}}                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <div class="col-sm-12 mb10">
                                <div class="itemKN">
                                    <div style="text-align: center;padding: 15px;">
                                        <a class="btnKinhNghiem add-experience" href="{{URL::to('/them-kinhnghiem-lamviec/'.$detail->taikhoan_id)}}"><i class="fal fa-plus"></i> Thêm kinh nghiệm làm việc</a>
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
                        <span>Người tham khảo</span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach($all_nguoithamkhao as $key => $thamkhao)
                            @if($thamkhao->thamkhao_id_uv == $detail->taikhoan_id)
                            <div id="divTK">
                            <div class="col-sm-12 mb10">
                            <div class="itemTK">
                                            <div class="toolBoxTK">
                                                <a class="btn btn-primary btn-block btn-xs btnThamKhao" type="button" data-id="0" href="{{URL::to('/sua-nguoi-thamkhao/'.$detail->taikhoan_id.'/'.$thamkhao->thamkhao_id)}}">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-block btn-xs btnDelThamKhao" type="button" data-id="0" href="{{URL::to('/xoa-nguoi-thamkhao/'.$detail->taikhoan_id.'/'.$thamkhao->thamkhao_id)}}">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                            <div class="mb5" style="font-weight: 500">{{$thamkhao->thamkhao_ten}}</div>
                                            <div class="mb5">Công ty: {{$thamkhao->thamkhao_congty}}</div>
                                            <div style="font-size: 12px">Vị trí: {{$thamkhao->thamkhao_chucdanh}}</div>
                            </div>
                            </div>
                            </div>
                            @endif
                            @endforeach
                            <div class="col-sm-12 mb10">
                                <div class="itemTK">
                                    <div style="text-align: center;padding: 15px;">
                                        <a class="btnThamKhao add-reference" href="{{URL::to('/them-nguoi-thamkhao/'.$detail->taikhoan_id)}}"><i class="fal fa-plus"></i> Thêm người tham khảo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="panel">
        <div class="panel-body">
            <div id="dZUpload" class="dropzone dz-clickable">
                <div class="dz-default dz-message" style="display: block">
                    <div id="desk_desc">
                        <img id="desk_light" src="https:vieclamcantho.com.vn/public/upload/icon/_thumb_16656.png" alt="" title="" style="align: center;">
                        <p id="desk_desc_title"></p>
                        <p id="desk_desc_content">- Upload ảnh cá nhân hoặc bằng cấp nếu có</p>
                    </div>
                </div>
                        </div>
        </div>
        </div> -->
    <!--  -->
</div>
</div>
</div>
@endforeach
@endsection