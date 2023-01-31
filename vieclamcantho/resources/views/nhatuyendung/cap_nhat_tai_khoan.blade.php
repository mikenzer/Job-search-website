@extends('nhatuyendung.trang_quan_ly') 
@section('content2') 
<?php
                            $ntd_id = Session::get('ntd_id');
?>
@foreach($all_taikhoanntd as $key => $ntd)
@if($ntd->ntd_id == $ntd_id)
<div class="card-footer p-0 bg-white"> 
                        <div class="template-card_tab">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/nha-tuyen-dung/home')}}" role="tab">
                                        Home
                                    </a>
                                </li>
                                <!-- <li class="nav-item dropdown dropdownTheme">
                                    <a class="nav-link " data-toggle="dropdown" type="button" role="tab">
                                        Hồ sơ
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left">
                                        <a class="dropdown-item" href="/nha-tuyen-dung/ho-so#m">
                                            Hồ sơ ứng tuyển
                                        </a>
                                        <a class="dropdown-item" href="/nha-tuyen-dung/ho-so-da-luu#m">
                                            Hồ sơ đã lưu
                                        </a>
                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{URL::to('/nha-tuyen-dung/quan-ly-tin')}}" role="tab">
                                        Tuyển dụng
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/nha-tuyen-dung/dang-tin')}}" role="tab">
                                        Đăng tin
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{URL::to('/nha-tuyen-dung/cap-nhat-tai-khoan')}}" role="tab">
                                        Cập nhật tài khoản
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="https://vieclamcantho.com.vn/nhan-thong-tin-tuyen-dung-11555.html?t=news" role="tab">
                                        Bài viết
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item dropdown dropdownTheme">
                                    <button class="nav-link" data-toggle="dropdown" type="button" role="tab">
                                        <i class="far fa-ellipsis-h ml-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item openModalNapTien" href="javascript:void(0)">
                                            Nạp số dư
                                        </a>
                                        <a class="dropdown-item" href="/phi-dang-tin-vip">
                                            Nâng cấp vip
                                        </a>
                                        <a class="dropdown-item" href="/nha-tuyen-dung/doi-mat-khau#m">
                                            Đổi mật khẩu
                                        </a>
                                        <a class="dropdown-item" href="/nha-tuyen-dung/lich-su-giao-dich#m">
                                            Lịch sử giao dịch
                                        </a>
                                    </div>
                                </li> -->
                                <li class="nav-item ml-auto">
                                    <a class="nav-link" href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$ntd_id )}}" role="tab">
                                        Trang công ty
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
<div class="page-ntd">
    <div class="row">
        <div class="col-md-12">
            <form class="form-style" id="formedit" action="{{URL::to('/update-taikhoanntd/'.$ntd_id)}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="card card-ntd overflow-hidden">
                    <div class="card-header py-3 bg-white">
                        <div class="card-title h6 fw-600 mb-0">
                            Nhập thông tin tài khoản
                        </div>
                        <?php
                    $message = Session::get('message');
                    if($message){
                    echo '<span class="text-success">'.$message.'</span>';
                     Session::put('message',null);
                    }
                    ?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nhatuyendung_email">Địa chỉ email</label>
                                    <div class="input-group">
                                        <input id="nhatuyendung_email" type="text" name="taikhoan_email" class="form-control" value="{{$ntd->ntd_email}}" placeholder="Email đăng nhập">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="taikhoan_ten" class="required">Tên công ty</label>
                                    <input placeholder="Vui lòng nhập tên công ty..." id="taikhoan_ten" maxlength="100" required="" type="text" class="form-control" name="taikhoan_ten" value="{{$ntd->ntd_tencongty}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="taikhoan_diachi" class="required">Địa chỉ công ty</label>
                                    <input placeholder="Vui lòng nhập địa chỉ công ty..." maxlength="150" type="text" class="form-control" name="taikhoan_diachi" value="{{$ntd->ntd_diachi}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label role="button" class="d-flex align-items-center required">
                                        Số điện thoại
                                    </label>
                                    <input placeholder="Vui lòng nhập số điện thoại công ty" name="taikhoan_sdt" type="text" class="form-control onlyNum" value="{{$ntd->ntd_sdt}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nhatuyendung_mst" class="required">
                                        Mã số thuế
                                    </label>
                                    <input placeholder="Vui lòng nhập mã số thuế" name="nhatuyendung_mst" type="text" class="form-control" required="" value="{{$ntd->ntd_masothue}}">
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-group position-relative">
                                    <label class="required" for="nhatuyendung_noicap">
                                        Khu vực
                                    </label>
                                    <select data-placeholder="Chọn khu vực" required="" name="nhatuyendung_diadiem" class="transition-03 form-control vieclam-select2 select2 " tabindex="-1" aria-hidden="true">
                                        <option value="">
                                                Chọn khu vực
                                        </option>
                                        @foreach($all_diadiem as $key => $diadiem)
                                        @if($diadiem->diadiem_ten == $ntd->ntd_khuvuc)
                                                                                    <option value="{{$diadiem->diadiem_ten}}" selected>
                                                {{$diadiem->diadiem_ten}}                                            </option>
                                        @else
                                        <option value="{{$diadiem->diadiem_ten}}">
                                                {{$diadiem->diadiem_ten}}                                            </option>
                                        @endif
                                        @endforeach
                                                                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">Quy mô công ty</label>
                                    <select data-placeholder="Chọn quy mô" required="" name="nhatuyendung_quymo" class="transition-03 form-control vieclam-select2 select2 " tabindex="-1" aria-hidden="true">
                                        <option value="">Chọn quy mô</option>
                                        @foreach($all_quymo as $key => $quymo)
                                        @if($quymo->qmct_ten == $ntd->ntd_quymo)
                                                                                    <option value="{{$quymo->qmct_ten}}" selected>
                                                {{$quymo->qmct_ten}}                                            </option>
                                        @else
                                        <option value="{{$quymo->qmct_ten}}">
                                                {{$quymo->qmct_ten}}                                            </option>
                                        @endif
                                        @endforeach
                                                                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">Lĩnh vực kinh doanh</label>
                                    <div class="form-group">
                                        <select data-placeholder="Chọn lĩnh vực hoạt động" required="" name="nhatuyendung_linhvuchoatdong" class="transition-03 form-control vieclam-select2 select2 s" tabindex="-1" aria-hidden="true">
                                            <option value="">Chọn lĩnh vực hoạt động</option>
                                                @foreach($all_linhvuc as $key => $lvhd)
                                                @if($lvhd->lvhd_ten == $ntd->ntd_linhvuc_kd)
                                                                                            <option value="{{$lvhd->lvhd_ten}}" selected>
                                                    {{$lvhd->lvhd_ten}}                                                </option>
                                                @else
                                                <option value="{{$lvhd->lvhd_ten}}">
                                                    {{$lvhd->lvhd_ten}}                                                </option>
                                                @endif
                                                @endforeach
                                                                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">Loại hình doanh nghiệp</label>
                                    <select data-placeholder="Chọn quy mô" required="" name="nhatuyendung_loaicongty" class="transition-03 form-control vieclam-select2 select2 " tabindex="-1" aria-hidden="true">
                                        <option value="">Chọn loại hình</option>
                                        @foreach($all_lhct as $key => $lhct)
                                        @if($lhct->lhct_ten == $ntd->ntd_loaihinh_dn)
                                                                                    <option value="{{$lhct->lhct_ten}}" selected>
                                                {{$lhct->lhct_ten}}                                            </option>
                                        @else
                                        <option value="{{$lhct->lhct_ten}}">
                                                {{$lhct->lhct_ten}}                                            </option>
                                        @endif
                                        @endforeach
                                                                                </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nhatuyendung_website">
                                        Website
                                    </label>
                                    <input placeholder="Nhập link website" name="nhatuyendung_website" id="nhatuyendung_website" type="url" class="form-control" value="{{$ntd->ntd_website}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nhatuyendung_youtube">
                                        Youtube
                                    </label>
                                    <input placeholder="Nhập link youtube" name="nhatuyendung_youtube" id="nhatuyendung_youtube" type="url" class="form-control" value="{{$ntd->ntd_youtube}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >
                                        Logo công ty
                                    </label>
                                    <input type="file" name="nhatuyendung_logo"  class="form-control" value="">
                                    @if($ntd->ntd_logo != NULL)
                                    <img src="{{URL::to('public/upload/nhatuyendung/'.$ntd->ntd_logo)}}" height="100" width="80">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >
                                        Banner công ty
                                    </label>
                                    <input type="file" name="nhatuyendung_banner"  class="form-control" value="">
                                    @if($ntd->ntd_banner != NULL)
                                    <img src="{{URL::to('public/upload/nhatuyendung/'.$ntd->ntd_banner)}}" height="80" width="180">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nhatuyendung_mota">
                                        Mô tả về công ty
                                    </label>
                                    <textarea name="nhatuyendung_mota" id="nhatuyendung_mota" class="form-control" maxlength="2000" rows="8" placeholder="Giới thiệu mô tả sơ lược về công ty giới hạn 2000 ký tự">{{$ntd->ntd_mota}}</textarea>
                                </div>
                            </div>
                            
                            <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <label>Hình ảnh hoạt động</label>
                                    <div id="dZUpload" class="dropzone dz-clickable">
                                        <div class="dz-default dz-message" style="display: block">
                                            <div class="dz-desc" id="desk_desc">
                                                <img id="desk_light" src="/public/upload/icon/_thumb_16656.png" alt="" title="">
                                                <p id="desk_desc_title"></p>
                                                <p id="desk_desc_content">Upload hình ảnh hoạt động công ty</p>
                                            </div>
                                        </div>
                                                                            </div>
                                </div>
                            </div> -->
                            <div class="col-md-12 mt-4">
                                <div class="form-group mb-0 text-center">
                                    <button type="submit" id="btnSub" class="btn button-theme button-blue px-3 py-2 rounded-0 size-095rem fw-500">
                                        Cập nhật thông tin
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection