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
                <li class="active">
                    <a data-type="bangcap" class="bangcap" href="{{URL::to('/hocvan-bangcap/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <p>Học vấn bằng cấp</p>
                        
                    </a>
                </li>
                <li class="">
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
            <div class="panel-heading">
                <?php
                    $message = Session::get('message');
                    if($message){
                    echo '<span class="text-success">'.$message.'</span>';
                     Session::put('message',null);
                    }
                    ?><br>
                <span>Học vấn bằng cấp</span>
            </div>
            <div class="panel-body">
                <form id="frmSortTD">
                    <div class="row">
                        @foreach($all_bangcap as $key => $bangcap)
                        @if($bangcap->bangcap_id_uv == $detail->taikhoan_id)
                        <div id="divTD">
                            <div class="col-md-4 col-sm-6 mb10">
                                <div class="itemTD">
                                    <input type="hidden" name="key[]" value="0">
                                    <div class="handle">
                                        <i class="fa fa-arrows-alt"></i>
                                    </div>
                                    <div class="toolBoxTD">
                                        <a class="btn btn-primary btn-block btn-xs" href="{{URL::to('/sua-hocvan-bangcap/'.$detail->taikhoan_id.'/'.$bangcap->bangcap_id)}}" title="Sửa thông tin" >
                                        <i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-danger btn-block btn-xs btnDelTrinhDo" href="{{URL::to('/xoa-hocvan-bangcap/'.$detail->taikhoan_id.'/'.$bangcap->bangcap_id)}}" title="Xóa thông tin" >
                                        <i class="fa fa-trash-alt"></i>
                                        </a>
                                    </div>
                                    <div class="mb5" style="font-weight: 500">{{$bangcap->bangcap_ten}}</div>
                                    <div class="mb5">{{$bangcap->bangcap_dvi_daotao}}</div>
                                    <div style="font-size: 12px">Từ
                                        tháng {{$bangcap->bangcap_thangbd}}/{{$bangcap->bangcap_nambd}}                                        đến tháng {{$bangcap->bangcap_thangkt}}/{{$bangcap->bangcap_namkt}}                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="col-md-4 col-sm-6 mb10">
                            <div class="itemTD">
                                <div style="text-align: center;padding: 15px;">
                                    <a class="btnTrinhDo add-education" href="{{URL::to('/them-hocvan-bangcap/'.$detail->taikhoan_id)}}"><i class="fa fa-plus"></i> Thêm học vấn/bằng cấp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       <!--  <div class="panel">
    <div class="panel-body">
        <div id="dZUpload" class="dropzone ">
            <div class="dz-default dz-message" style="display: block">
                <div id="desk_desc">

                    <img  id="desk_light" src="https://vieclamcantho.com.vn/public/upload/icon/_thumb_16656.png" alt="" title="">
                    <p id="desk_desc_title"></p>
                    <p id="desk_desc_content">- Upload ảnh cá nhân hoặc bằng cấp nếu có</p>

                </div>
            </div>
                                
                                        
                            </div>
    </div>
</div>
 -->
       
    </div>
</div>
</div>
@endforeach
@endsection