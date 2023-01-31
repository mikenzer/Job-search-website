@extends('nhatuyendung.trang_quan_ly')
@section('content2')
@foreach($all_dangtin as $key => $dangtin)
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
                                <!-- <li class="nav-item ml-auto">
                                    <a class="nav-link" href="https://vieclamcantho.com.vn/nhan-thong-tin-tuyen-dung-11555.html" role="tab">
                                        Trang công ty
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
<div class="page-ntd">

    <div class="recruitment-header mb-3">
        <div class="card">
            <div class="row row-10 align-items-center">
                <div class="col-md-9 col-lg-9 col-xl-10 d-flex">
                    <div class="card-avatar"><a class="card-image fancybox" href="{{URL::to('/public/upload/nhatuyendung/'.$dangtin->ntd_logo)}}" style="display: flex; background-image: url(&quot;http://localhost/vieclamcantho/public/upload/nhatuyendung/{{$dangtin->ntd_logo}}&quot;);"></a></div>
                    <div class="card-body">
                        <h6 class="card-title text-capitalize">{{$dangtin->dangtin_chucdanh}}</h6>
                        <p class="card-text"><a href="">{{$dangtin->ntd_tencongty}}</a></p>
                        <p class="card-subtext">{{$dangtin->ntd_diachi}}</p>
                        <div class="card-list">
                            <p><i class="fal fa-usd-circle size-1rem blue-color mr-2"></i><span class="pr-1">Mức lương:</span>{{$dangtin->dangtin_mucluong}}</p>
                            <p><i class="fal fa-clock size-1rem blue-color mr-2"></i><span class="pr-1">Hạn nộp hồ
                                sơ:</span>{{date("d-m-Y", strtotime($dangtin->dangtin_hannop_hs))}}
                            </p>
                        </div>
                    </div>
                    <!-- <img src="https://vieclamcantho.com.vn/public/upload/icon/daxacthuc.png" class="img-xacthuc" alt="Đã xác thực"> -->
                </div>
                <!-- <div class="col-md-3 col-lg-3 col-xl-2">
                    <div class="card-list-button">
                        <div class="card-list-item"><a class="btn button-theme button-orange w-100 rounded-0 callNopHoSo " data-id="32579" data-hinhthuc-nophs="2" data-diachi="số 166, Nguyễn Văn Cừ, Phường An Bình, quận Ninh Kiều, thành phố Cần Thơ">Nộp hồ sơ</a></div>
                        <div class="card-list-item"><a data-show-type="3" href="javascript:void(0)" class="btn button-theme button-basic w-100 rounded-0 btnSaveTD " data-id="32579"><i class="fal fa-heart"></i>Lưu tin</a></div>
                        <div class="card-list-item"><a title="Nhắn tin" href="javascript:void(0)" data-img="trung-tam-ung-dung-tien-bo-khoa-hoc-va-cong-nghe-can-tho4521650944624.jpg" data-name="TRUNG TÂM ỨNG DỤNG TIẾN BỘ KHOA HỌC VÀ CÔNG NGHỆ CẦN THƠ" data-uid="4-8016" class="btn button-theme button-basic w-100 rounded-0 nhanTin"><i class="fal fa-comment-lines"></i>Nhắn tin</a></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="recruitment-body">
        <div class="recruitment-content">
            <div class="row row-10">
                
                    <div class="recruitment-main position-relative bg-white border mb-3 p-3">
                        <div class="recruitment-inner recruitment-info mb-4">
                            <div class="row row-10">
                                <div class="col-md-6 mb-1"><span><i class="fal fa-briefcase"></i></span><span class="fw-600 pr-1">Kinh
                                    nghiệm:</span>{{$dangtin->dangtin_kinhnghiem}}
                                </div>
                                <div class="col-md-6 mb-1"><span><i class="fal fa-user-tie"></i></span><span class="fw-600 pr-1">Chức
                                    vụ:</span>{{$dangtin->dangtin_capbac}}
                                </div>
                                <div class="col-md-6 mb-1"><span><i class="fal fa-address-card"></i></span><span class="fw-600 pr-1">Yêu cầu bằng cấp:</span>{{$dangtin->dangtin_bangcap}}</div>
                                @if($dangtin->dangtin_gioitinh == -1)
                                <div class="col-md-6 mb-1"><span><i class="fal fa-venus-mars"></i></span><span class="fw-600 pr-1">Yêu cầu giới
                                    tính:</span>Không yêu cầu
                                </div>
                                @elseif($dangtin->dangtin_gioitinh == 0)
                                <div class="col-md-6 mb-1"><span><i class="fal fa-venus-mars"></i></span><span class="fw-600 pr-1">Yêu cầu giới
                                    tính:</span>Nữ
                                </div>
                                @else
                                <div class="col-md-6 mb-1"><span><i class="fal fa-venus-mars"></i></span><span class="fw-600 pr-1">Yêu cầu giới
                                    tính:</span>Nam
                                </div>
                                @endif
                                <div class="col-md-6 mb-1"><span><i class="fal fa-users-medical"></i></span><span class="fw-600 pr-1">Số lượng cần
                                    tuyển:</span>{{$dangtin->dangtin_sltuyen}}
                                </div>
                                <div class="col-md-6 mb-1"><span><i class="fal fa-credit-card-front"></i></span><span class="fw-600 pr-1">Hình thức làm
                                    việc:</span>{{$dangtin->dangtin_loaihinhcv}}
                                </div>
                                <div class="col-md-6 mb-1"><span><i class="fal fa-list-ul"></i></span><span class="fw-600 pr-1">Ngành nghề:</span><a href="" class="pr-1">{{$dangtin->dangtin_nganhnghe}}</a> </div>
                                <div class="col-md-6 mb-1"><span><i class="fal fa-map-marker-alt"></i></span><span class="fw-600 pr-1">Địa điểm làm việc:</span><a href="" class="pr-1">{{$dangtin->dangtin_diadiem}}</a></div>
                            </div>
                        </div>
                        <div class="recruitment-inner recruitment-job mb-4">
                            <div class="heading-style"><span>Mô tả công việc</span></div>
                            <div class="description-content size-095rem"><?php echo nl2br($dangtin->dangtin_mota_cv)?></div>
                        </div>
                        <div class="recruitment-inner recruitment-required-job mb-4">
                            <div class="heading-style"><span>Yêu cầu công việc</span></div>
                            <div class="description-content size-095rem"><?php echo nl2br($dangtin->dangtin_yeucau_td)?></div>
                        </div>
                        <div class="recruitment-inner recruitment-benefit mb-4">
                            <div class="heading-style"><span>Quyền lợi được hưởng</span></div>
                            <ul class="list-unstyled mb-0 d-flex justify-content-start flex-wrap">
                                @if($dangtin->quyenloi_baohiem == 1)
                                <li><span><i class="fal fa-first-aid"></i></span>Chế độ bảo hiểm</li>
                                @endif
                                @if($dangtin->quyenloi_nghiphep == 1)
                                <li><span><i class="fal fa-glass-cheers"></i></span>Nghỉ phép năm</li>
                                @endif
                                @if($dangtin->quyenloi_dongphuc == 1)
                                <li><span><i class="fal fa-tshirt"></i></span>Đồng phục</li>
                                @endif
                                @if($dangtin->quyenloi_tangluong == 1)
                                <li><span><i class="fal fa-chart-line"></i></span>Tăng lương</li>
                                @endif
                                @if($dangtin->quyenloi_thuong == 1)
                                <li><span><i class="fal fa-usd-circle"></i></span>Chế độ thưởng</li>
                                @endif
                                @if($dangtin->quyenloi_daotao == 1)
                                <li><span><i class="fal fa-graduation-cap"></i></span>Đào tạo</li>
                                @endif
                                @if($dangtin->quyenloi_phucap == 1)
                                <li><span><i class="fal fa-money-bill-alt"></i></span>Phụ cấp</li>
                                @endif
                                @if($dangtin->quyenloi_laptop == 1)
                                <li><span><i class="fal fa-laptop"></i></span>Laptop</li>
                                @endif
                                @if($dangtin->quyenloi_ctphi == 1)
                                <li><span><i class="fal fa-credit-card"></i></span>Công tác phí</li>
                                @endif
                                @if($dangtin->quyenloi_dulich == 1)
                                <li><span><i class="fal fa-plane"></i></span>Du lịch</li>
                                @endif
                                @if($dangtin->quyenloi_phucaptn == 1)
                                <li><span><i class="fal fa-money-bill-wave"></i></span>Phụ cấp thâm niên</li>
                                @endif
                                @if($dangtin->quyenloi_phucaptn == 1)
                                <li><span><i class="fal fa-money-bill-wave"></i></span>Phụ cấp thâm niên</li>
                                @endif
                                @if($dangtin->quyenloi_chamsocsk == 1)
                                <li><span><i class="fal fa-hand-holding-heart"></i></span>Chăm sóc sức khỏe</li>
                                @endif
                                @if($dangtin->quyenloi_xe == 1)
                                <li><span><i class="fal fa-bus-school"></i></span>Xe đưa đón</li>
                                @endif
                                @if($dangtin->quyenloi_clb == 1)
                                <li><span><i class="fal fa-heartbeat"></i></span>CLB thể thao</li>
                                @endif
                                @if($dangtin->quyenloi_dlnuocngoai == 1)
                                <li><span><i class="fal fa-plane-departure"></i></span>Du lịch nước ngoài</li>
                                @endif
                            </ul>
                            <div class="description-content size-095rem mt-2"><?php echo nl2br($dangtin->dangtin_chedo_phucloi)?></div>
                        </div>
                        <div class="recruitment-inner recruitment-required-profile mb-4">
                            <div class="heading-style"><span>Yêu cầu hồ sơ</span></div>
                            <div class="description-content size-095rem"><?php echo nl2br($dangtin->dangtin_hoso_yeucau)?></div>
                        </div>
                        <div class="recruitment-inner recruitment-required-profile mb-4">
                            <div class="heading-style"><span>Thông tin liên hệ</span></div>
                            <div class="description-content size-095rem  d-flex flex-column">
                                <div class="d-flex align-items-center mr-4">
                                    <span class="mr-2 w-18 size-1rem blue-color"><i class="fal fa-user"></i></span>
                                    <div><b>Người liên hệ:</b>&nbsp;{{$dangtin->dangtin_nguoilienhe}}</div>
                                </div>
                                <div class="d-flex align-items-center mr-4 mt-2">
                                    <span class="mr-2 w-18 size-1rem blue-color"><i class="fal fa-map-marker-alt"></i></span>
                                    <div><b>Địa chỉ:</b>&nbsp;{{$dangtin->dangtin_diachi}}</div>
                                </div>
                                @if($dangtin->htnhs_hotline != NULL)
                                <div class="d-flex align-items-center mr-4 mt-2">
                                    <span class="mr-2 w-18 size-1rem blue-color"><i class="fal fa-phone-alt"></i></span>
                                    <div><b>Hotline:</b>&nbsp;{{$dangtin->dangtin_nophs_hotline}}</div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="recruitment-apply mt-3">
                            <div class="heading-style"><span>Cách nộp hồ sơ</span></div>
                            @if($dangtin->htnhs_tructiep != NULL)
                            <div class="apply-box">
                                <div class="apply-inner mb-3">
                                    <p class="pr-1 fw-600 mb-0">Nộp trực tiếp tại văn phòng</p>
                                    <span class="text-ellipsis"  data-toggle="tooltip" title="{{$dangtin->dangtin_diachi}}"> Địa chỉ nộp: {{$dangtin->dangtin_diachi}}</span>
                                </div>
                            </div>
                            @endif
                            @if($dangtin->htnhs_mail != NULL)
                            <div class="apply-box">
                                <div class="apply-inner mb-3">
                                    <p class="pr-1 fw-600 mb-0">Nộp online qua email</p>
                                    <span class="text-ellipsis"  data-toggle="tooltip" title="{{$dangtin->dangtin_nophs_mail}}"> Email: {{$dangtin->dangtin_nophs_mail}}</span>
                                </div>
                            </div>
                            @endif
                            <div class="apply-contact">
                                @if (strtotime(date("Y-m-d")) > strtotime($dangtin->dangtin_hannop_hs))
                                	<div class="apply-contact-item">*&nbsp;Hạn nộp:<span>&nbsp;Đã hết hạn nộp hồ sơ</span></div>
                                @else
                                	<div class="apply-contact-item">*&nbsp;Hạn nộp:<span>&nbsp;{{date("d-m-Y", strtotime($dangtin->dangtin_hannop_hs))}}</span></div>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                   
                
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection