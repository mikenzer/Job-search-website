@extends('nhatuyendung.trang_quan_ly')
@section('content2')
<?php
                                            $ntd_id = Session::get('ntd_id');
                                            $i = 0;;
                                          ?>
                    <div class="card-footer p-0 bg-white">
                        <div class="template-card_tab">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{URL::to('/nha-tuyen-dung/home')}}" role="tab">
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
                                    <a class="nav-link " href="{{URL::to('/nha-tuyen-dung/dang-tin')}}" role="tab">
                                        Đăng tin
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{URL::to('/nha-tuyen-dung/cap-nhat-tai-khoan')}}" role="tab">
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
		    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white border rounded-lg pt-3 px-3">
                <div class="row">
					                        <div class="col-12">
                            <div class="d-flex bg-white p-3 border rounded-lg  align-items-center mb-3">
                                <div class="size-1rem fw-700">
                                    Tài khoản thường
                                </div>
                                <!-- <div class="pl-3">
                                    <a href="/phi-dang-tin-vip" class="btn button-theme button-orange btn-small">Nâng cấp
                                        ngay</a>
                                </div> -->
                                <div class="ml-auto">
                                    <a href="{{URL::to('/nha-tuyen-dung/dang-tin')}}" class="btn button-theme button-blue btn-small">
                                        <i class="fal fa-edit"></i>
                                        Đăng tin ngay
                                    </a>
                                </div>
                            </div>
                        </div>
					                       <!--  <div class="col-12">
                            <div class="alert alert-danger mb-4">
								                                    <i class="fas fa-info-circle"></i>
                                    Tài khoản chưa xác thực thông tin. Vui lòng <b><a href="javascript:void(0)" class="callXacThuc">xác
                                            thực</a></b> để tăng mức độ uy tín cho tin tuyển dụng.<strong><a style="color: #337ab7" href="/xac-minh-thong-tin-nha-tuyen-dung">
                                            Tìm hiểu quyền lợi của nhà tuyển dụng xác thực</a></strong>
																	<br>                                    <i class="fas fa-info-circle"></i>
                                    Cập nhật thêm thông tin doanh nghiệp của bạn để tiếp cận ứng viên nhiều hơn.
                                    <strong>
                                        <a style="color: #337ab7" href="https://vieclamcantho.com.vn/nha-tuyen-dung/cap-nhat-tai-khoan">
                                            Cập nhật thông tin
                                        </a>
                                    </strong>
																								
								                            </div>
                        </div> -->
					                    <div class="col-12">
                        <div class="row row-10">
                            <div class="col-6">
                                <div class="widget ">
                                    <div class="widget-icon">
                                        <i class="far fa-dollar-sign"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="widget-title">0</span>
                                        <span class="widget-subtitle">SỐ DƯ TÀI KHOẢN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="widget ">
                                    <div class="widget-icon">
                                        <i class="far fa-dollar-sign"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="widget-title">5</span>
                                        <span class="widget-subtitle">ĐIỂM XEM HỒ SƠ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <a class="widget " href="{{URL::to('nha-tuyen-dung/quan-ly-tin')}}">
                                    <div class="widget-icon">
                                        <i class="far fa-edit"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        
                                        @foreach($all_dangtin as $key => $dangtin)
                                        @if($dangtin->dangtin_id_ntd == $ntd_id and $dangtin->dangtin_status == 1)
                                          <?php
                                            $i++;
                                          ?>
                                        @endif
                                        @endforeach
                                        <span class="widget-title">{{$i}}</span>
                                        <span class="widget-subtitle">TUYỂN DỤNG ĐÃ ĐĂNG</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="widget " href="/nha-tuyen-dung/ho-so">
                                    <div class="widget-icon">
                                        <i class="far fa-file-alt"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="widget-title">0</span>
                                        <span class="widget-subtitle">HỒ SƠ ỨNG TUYỂN</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection