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
                <li>
                    <a href="{{URL::to('/thong-tin-ca-nhan/'.$detail->taikhoan_id)}}" class="info">
                        <div>
                            <i class="fa fa-user"></i>
                        </div>
                        <p>Thông tin cá nhân</p>
                        @if($detail->hoso_tinhtranghonnhan_uv == NULL)
                        <span class="notYet">chưa hoàn thành</span>
                        @endif
                    </a>
                </li>
                <li  class="active">
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
        <span>Thông tin hồ sơ</span>
    </div>
    <div class="panel-body">
        <div class="row">
            <form id="frmEditTQ" action="{{URL::to('/update-thongtinhoso/'.$detail->taikhoan_id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Vị trí mong muốn</label>
                    <div class="">
                        <input type="text" name="ungvien_vitri" class="form-control" value="{{$detail->hoso_vitri}}" required="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Cấp bậc</label>
                    <div class="">
                        
                        <select class="form-control" name="ungvien_capbac" required="">
                            <option value="">
                                Chọn cấp bậc mong muốn
                            </option>
                            @foreach($all_capbac as $key => $capbac)
                            @if($capbac->capbac_ten == $detail->hoso_capbac )
                            <option value="{{$capbac->capbac_ten}}" selected="">
                                {{$capbac->capbac_ten}}                              
                            </option>
                            @else
                            <option value="{{$capbac->capbac_ten}}" >
                                {{$capbac->capbac_ten}}                           
                            </option>
                            @endif
                            @endforeach
                        </select>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Trạng thái tìm việc</label>
                    <div class="">
                        <select class="form-control" name="ungvien_trangthai_timviec" required="">
                            <option value="">
                                Chọn trạng thái tìm việc
                            </option>
                            @foreach($all_tttv as $key => $tttv)
                            @if(metaphone($detail->hoso_trangthai_timviec) == metaphone($tttv->tttv_ten))
                            <option value="{{$tttv->tttv_ten}}" selected="">
                                {{$tttv->tttv_ten}}                                
                            </option>
                            @else

                            <option value="{{$tttv->tttv_ten}}">
                                {{$tttv->tttv_ten}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Mức lương</label>
                    <div class="">
                        <select class="form-control" name="ungvien_mucluong" required="">
                            
                            <option value="">
                                Chọn mức lương mong muốn
                            </option>
                            @foreach($all_lmm as $key => $lmm)
                            @if($detail->hoso_mucluong == $lmm->lmm_ten)
                            <option value="{{$lmm->lmm_ten}}" selected="">
                                {{$lmm->lmm_ten}}                                
                            </option>
                            @else
                            <option value="{{$lmm->lmm_ten}}">
                                {{$lmm->lmm_ten}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Kinh nghiệm</label>
                    <div class="">
                        <select class="form-control" name="ungvien_kinhnghiem" required="">
                            <option value="">
                                Chọn kinh nghiệm làm việc
                            </option>
                            @foreach($all_kn as $key => $kn)
                            @if($detail->hoso_kinhnghiem == $kn->kn_ten)
                            <option value="{{$kn->kn_ten}}" selected="">
                                {{$kn->kn_ten}}                                
                            </option>
                            @else
                            <option value="{{$kn->kn_ten}}">
                                {{$kn->kn_ten}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Trình độ học vấn</label>
                    <div class="">
                        <select class="form-control" name="ungvien_trinhdo" required="">
                            <option value="">
                                Chọn trình độ học vấn
                            </option>
                            @foreach($all_tdhv as $key => $tdhv)
                            @if($detail->hoso_trinhdo == $tdhv->tdhv_ten)
                            <option value="{{$tdhv->tdhv_ten}}" selected="">
                                {{$tdhv->tdhv_ten}}                                
                            </option>
                            @else
                            <option value="{{$tdhv->tdhv_ten}}">
                                {{$tdhv->tdhv_ten}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 mb20">
                    <label class="control-label"> Giới thiệu về bản thân</label>
                    <div class="">
                        <textarea name="ungvien_gioithieu" id="ungvien_gioithieu" class="form-control" rows="3" maxlength="500" placeholder="Nhập giới thiệu bản thân">{{$detail->hoso_gioithieu}}</textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 mb20 checkbo" id="divMucTieu">
                    <label class="control-label"><span>*</span> Mục tiêu nghề nghiệp</label>
                    <div class="">
                        <textarea class="form-control" style="width: 100%" rows="4" minlength="20" maxlength="1000" placeholder="Bạn có những mục tiêu gì hãy nhập tại đây (mỗi mục tiêu một dòng)" id="muctieumota" name="ungvien_muctieu" required>{{$detail->hoso_muctieu}}</textarea>
                        <!-- <div class="checkbox">
                            <label class="cb-checkbox cb-sm ">
                            <span ><input type="checkbox" value="1" name="ungvien_muctieu[1]"></span> Tìm công việc lương cao, chế độ tốt                                </label>
                        </div>
                        <div class="checkbox">
                            <label class="cb-checkbox cb-sm checked">
                            <span ><input type="checkbox" value="2" checked="" name="ungvien_muctieu[2]"></span>Công việc ổn định và lâu dài                                </label>
                        </div>
                        <div class="checkbox">
                            <label class="cb-checkbox cb-sm checked">
                            <span ><input type="checkbox" value="3" checked="" name="ungvien_muctieu[3]"></span>Nơi làm có cơ hội thăng tiến cao                                </label>
                        </div>
                        <div class="checkbox">
                            <label class="cb-checkbox cb-sm checked">
                            <span ><input type="checkbox" value="4" checked="" name="ungvien_muctieu[4]"></span>Môi trường &amp; văn hóa công ty tốt                                </label>
                        </div>
                        <div class="checkbox">
                            <label class="cb-checkbox cb-sm checked">
                            <span ><input type="checkbox" value="5" checked="" name="ungvien_muctieu[5]"></span>Có thể học hỏi thêm kinh nghiệm, nâng cao trình độ                                </label>
                        </div>
                    </div> -->
                </div><br>
                <div class="col-sm-12 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Ngành nghề</label>
                    <div class="">
                        <select class="form-control" name="ungvien_nganhnghe" required="">
                           
                            <option value="">
                                Chọn ngành nghề mong muốn
                            </option>
                            @foreach($all_nn as $key => $nn)
                            @if($detail->hoso_nganhnghe == $nn->nn_ten)
                            <option value="{{$nn->nn_ten}}" selected="">
                                {{$nn->nn_ten}}                                
                            </option>
                            @else
                            <option value="{{$nn->nn_ten}}">
                                {{$nn->nn_ten}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                       
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Địa điểm</label>
                    <div class="">
                        <select class="form-control" name="ungvien_diadiem" required="">
                            <option class="option-items size-085rem" value="">
                                Chọn địa điểm mong muốn                              
                            </option>
                            @foreach($all_diadiem as $key => $diadiem)
                            @if($detail->hoso_diadiem == $diadiem->diadiem_ten)
                            <option class="option-items size-085rem" value="{{$diadiem->diadiem_ten}}" selected="">
                                {{$diadiem->diadiem_ten}}                                
                            </option>
                            @else

                            <option class="option-items size-085rem" value="{{$diadiem->diadiem_ten}}">
                                {{$diadiem->diadiem_ten}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 mb20">
                    <label class="control-label"><span></span> Hình ảnh đại diện</label>
                    <div class="form-group">
                        <input type="file" name="ungvien_ha" class="form-control" enctype="multipart/form-data" >
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" >
                    <i class="far fa-check-circle"></i> Cập nhật
                    </button>
                </div>
            </form>
        </div>
</div>
</div>
@endforeach
@endsection