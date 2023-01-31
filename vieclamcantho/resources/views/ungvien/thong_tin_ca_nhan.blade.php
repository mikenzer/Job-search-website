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
                <li class="active">
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
                <li>
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
<div class="panel">
    <div class="panel-heading">
        <?php
            $message = Session::get('message');
            if($message){
            echo '<span class="text-success">'.$message.'</span>';
             Session::put('message',null);
            }
            ?><br>
        <span>Thông tin cá nhân</span>
    </div>
    <div class="panel-body">
        <div class="row">
            <form id="frmEditInfo" action="{{URL::to('/update-thongtincanhan/'.$detail->taikhoan_id)}}" method="post">
                {{csrf_field()}}
                <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Mã hồ sơ</label>
                    <div class="">
                        <input type="number" name="hoso_id" class="form-control" value="{{$detail->hoso_id}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Email</label>
                    <div class="">
                        <input type="email" name="taikhoan_email" class="form-control" value="{{$detail->taikhoan_email}}" >
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Họ tên</label>
                    <div class="">
                        <input type="text" name="taikhoan_ten" class="form-control" value="{{$detail->taikhoan_ten}}" required="" placeholder="Họ tên của bạn">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Số điện thoại</label>
                    <div class="">
                        <input type="text" name="taikhoan_sdt" id="phoneNumInfo" minlength="10" maxlength="10" class="form-control onlyNum" value="{{$detail->taikhoan_sdt}}" required="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Ngày sinh</label>
                    <div class="">
                        <input type="date" name="taikhoan_ngaysinh" class="form-control" value="{{$detail->taikhoan_ngaysinh}}" required="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Địa chỉ</label>
                    <div class="">
                        <input type="text" name="taikhoan_diachi" class="form-control" value="{{$detail->taikhoan_diachi}}" required="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mb20 checkbo">
                    <label class="control-label pt5" style="display: inline-block">
                    <span>*</span> Giới tính:
                    @if($detail->taikhoan_gioitinh == 1)
                    <label class="cb-radio cb-sm checked" style="padding: 0 0 0 15px; margin-bottom: 0; top: 2px; position: relative">
                    <input type="radio" name="taikhoan_gioitinh" required="" value="1" checked=""> Nam                                </label>
                    <label class="cb-radio cb-sm " style="padding: 0 0 0 20px; margin-bottom: 0; top: 2px; position: relative">
                    <input type="radio" name="taikhoan_gioitinh" required="" value="0"> Nữ                                </label>
                    </label>
                    @else
                    <label class="cb-radio cb-sm " style="padding: 0 0 0 20px; margin-bottom: 0; ">
                    <input type="radio" name="taikhoan_gioitinh" required="" value="1" > Nam                                </label>
                    <label class="cb-radio cb-sm checked" style="padding: 0 0 0 20px; margin-bottom: 0;">
                    <input type="radio" name="taikhoan_gioitinh" required="" value="0" checked=""> Nữ                                </label>
                    </label>
                    @endif
                </div>
                <!-- <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"> Ảnh đại diện</label>
                    @if($detail->hoso_hinhanh_uv != NULL)

                    <div class="">
                        <input type="file" name="hoso_hinhanh_uv" class="form-control"  enctype="multipart/form-data" value="{{$detail->hoso_hinhanh_uv}}">
                        <img src="{{URL::to('public/upload/ungvien/'.$detail->hoso_hinhanh_uv)}}" height="100" width="80">
                    </div>
                    @else
                    <div class="">
                        <input type="file" name="hoso_hinhanh_uv" class="form-control"  enctype="multipart/form-data" value="{{$detail->hoso_hinhanh_uv}}">
                        
                    </div>
                    @endif
                </div> -->
                <div class="col-md-6 col-sm-6 col-xs-12 mb20 checkbo">
                    <label class="control-label pt5" style="display: inline-block">
                    <span>*</span> Tình trạng hôn nhân:
                    @if($detail->hoso_tinhtranghonnhan_uv == 1)
                    <label class="cb-radio cb-sm checked" style="padding: 0 0 0 20px; margin-bottom: 0; top: 2px; position: relative">
                    <input type="radio" name="hoso_tinhtranghonnhan_uv" required="" value="1" checked=""> Độc thân                            </label>
                    <label class="cb-radio cb-sm " style="padding: 0 0 0 20px; margin-bottom: 0; top: 2px; position: relative">
                    <input type="radio" name="hoso_tinhtranghonnhan_uv" required="" value="2"> Đã kết hôn                            </label>
                    </label>
                    @elseif($detail->hoso_tinhtranghonnhan_uv == 2)   
                    <label class="cb-radio cb-sm " style="padding: 0 0 0 20px; margin-bottom: 0; top: 2px; position: relative">
                    <input type="radio" name="hoso_tinhtranghonnhan_uv" required="" value="1" checked=""> Độc thân                            </label>
                    <label class="cb-radio cb-sm checked" style="padding: 0 0 0 20px; margin-bottom: 0; top: 2px; position: relative">
                    <input type="radio" name="hoso_tinhtranghonnhan_uv" required="" value="2"> Đã kết hôn                            </label>
                    </label>
                    @else
                    <label class="cb-radio cb-sm " style="padding: 0 0 0 20px; margin-bottom: 0; top: 2px; position: relative">
                    <input type="radio" name="hoso_tinhtranghonnhan_uv" required="" value="1" > Độc thân                            </label>
                    <label class="cb-radio cb-sm " style="padding: 0 0 0 20px; margin-bottom: 0; top: 2px; position: relative">
                    <input type="radio" name="hoso_tinhtranghonnhan_uv" required="" value="2"> Đã kết hôn                            </label>
                    </label>
                    @endif
                </div>
                
                <div class="text-center">
                    <button class="btn btn-primary" id="btnSub">
                    <i class="far fa-check-circle"></i> Cập nhật
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endforeach
@endsection