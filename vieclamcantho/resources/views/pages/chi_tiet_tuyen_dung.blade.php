@extends('layout')
@section('content')
@foreach($all_dangtin as $key => $dangtin)
<?php
                            $taikhoan_id = Session::get('taikhoan_id');
?>
<div class="breadcrumb-main">
    <div class="ol-breadcrumb">
        <div class="container">
            <div class="row row-10">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-main text-ellipsis" href="{{URL::to('/')}}">
                            Trang chủ
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <span class="text-ellipsis">{{$dangtin->dangtin_chucdanh}}</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-recruitment my-3" style="height: auto !important;">

    <div class="container" style="height: auto !important;">
         
        <div class="recruitment-header mb-3">
            <div class="card">
                <div class="row row-10 align-items-center">
                    <div class="col-md-9 col-lg-9 col-xl-10 d-flex">
                        <div class="card-avatar">
                            <a class="card-image fancybox" href="{{URL::to('public/upload/nhatuyendung/'.$dangtin->ntd_logo)}}" style="display: flex; background-image: url(&quot;{{URL::to('public/upload/nhatuyendung/'.$dangtin->ntd_logo)}}&quot;);"></a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-capitalize">{{$dangtin->dangtin_chucdanh}}</h6>
                            <p class="card-text">
                                <a href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$dangtin->dangtin_id_ntd)}}">{{$dangtin->ntd_tencongty}}</a>
                            </p>
                            <p class="card-subtext">{{$dangtin->ntd_diachi}}</p>
                            <div class="card-list">
                                <p>
                                    <i class="fal fa-usd-circle size-1rem blue-color mr-2"></i>
                                    <span class="pr-1">Mức lương: </span> {{$dangtin->dangtin_mucluong}}                                   
                                </p>
                                <p>
                                    <i class="fal fa-clock size-1rem blue-color mr-2"></i>
                                    <span class="pr-1">Hạn nộp hồ
                                    sơ: </span> {{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}                                    
                                </p>
                            </div>
                        </div>
                        <!-- <img width="125" height="125" src="https://vieclamcantho.com.vn/public/upload/icon/daxacthuc.png" class="img-xacthuc h-auto" style="display: block;"> -->
                    </div>
                     <div class="col-md-3 col-lg-3 col-xl-2">
                        <div class="card-list-button">
                            <div class="card-list-item">
                                                                    <!-- <a class="btn button-theme button-orange w-100 rounded-0 callNopHoSo " data-id="31267" data-diachi="D20-15 Đường số 6, KDC Long Thịnh, phường Phú Thứ, quận Cái Răng, TP. Cần Thơ." data-hinhthuc-nophs="1">
                                    <i class="fal fa-copy"></i>
                                    Nộp hồ sơ
                                </a> -->
                            </div>
                            
                            

                                                                <!-- <div class="card-list-item">
                                    <a title="Nhắn tin" href="javascript:void(0)" data-img="321514968638-1647398017.png" data-name="CÔNG TY TNHH MTV DỊCH VỤ TRUYỀN THÔNG VÀ QUẢNG CÁO TIN TỨC MIỀN TÂY" data-uid="4-10888" class="nhanTin btn button-theme button-basic w-100 rounded-0">
                                        <i class="fal fa-comment-lines"></i>
                                        Nhắn tin
                                    </a>
                                </div> -->
                                                        </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="recruitment-body" style="height: auto !important;">
            <div class="recruitment-content" style="height: auto !important;">
                <div class="row row-10" style="height: auto !important;">
                    <div class="col-md-8 pl-0" style="height: auto !important;">
                        <div class="recruitment-main position-relative bg-white border mb-3 p-3">
                            <div class="recruitment-inner recruitment-info mb-4">
                                <div class="row row-10">
                                    <div class="col-md-6 mb-1">
                                        <span><i class="fal fa-briefcase"></i></span>
                                        @if($dangtin->dangtin_kinhnghiem == '0')
                                        <span class="fw-600 pr-1">Kinh
                                        nghiệm: </span>Không yêu cầu 
                                        @else
                                        <span class="fw-600 pr-1">Kinh
                                        nghiệm: </span> {{$dangtin->dangtin_kinhnghiem}}
                                        @endif                                    
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <span><i class="fal fa-user-tie"></i></span>
                                        <span class="fw-600 pr-1">Chức
                                        vụ: </span> {{$dangtin->dangtin_capbac}}                                        
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <span><i class="fal fa-address-card"></i></span>
                                        @if($dangtin->dangtin_bangcap == 0)
                                        <span class="fw-600 pr-1">Yêu cầu bằng
                                        cấp: </span> Không yêu cầu 
                                        @else
                                        <span class="fw-600 pr-1">Yêu cầu bằng
                                        cấp: </span> {{$dangtin->dangtin_bangcap}} 
                                        @endif                                     
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <span><i class="fal fa-venus-mars"></i></span>
                                        @if($dangtin->dangtin_gioitinh == -1)
                                        <span class="fw-600 pr-1">Yêu cầu giới
                                        tính: </span> Không yêu cầu   
                                        @elseif($dangtin->dangtin_gioitinh == 0)
                                        <span class="fw-600 pr-1">Yêu cầu giới
                                        tính: </span> Nữ
                                        @else
                                        <span class="fw-600 pr-1">Yêu cầu giới
                                        tính: </span> Nam
                                        @endif

                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <span><i class="fal fa-users-medical"></i></span>
                                        <span class="fw-600 pr-1">Số lượng cần
                                        tuyển: </span> {{$dangtin->dangtin_sltuyen}}                                        
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <span><i class="fal fa-credit-card-front"></i></span>
                                        <span class="fw-600 pr-1">Hình thức làm
                                        việc: </span> {{$dangtin->dangtin_loaihinhcv}}                                        
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <span><i class="fal fa-list-ul"></i></span>
                                        <span class="fw-600 pr-1">Ngành nghề: </span>
                                        <a href="">{{$dangtin->dangtin_nganhnghe}}</a>
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <span><i class="fal fa-map-marker-alt"></i></span>
                                        <span class="fw-600 pr-1">Địa điểm làm việc: </span>
                                        <a href="">{{$dangtin->dangtin_diadiem}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recruitment-inner recruitment-job mb-4">
                                <div class="heading-style">
                                    <span>Mô tả công việc</span>
                                </div>
                                <div class="description-content size-095rem">
                                   <?php echo nl2br($dangtin->dangtin_mota_cv)?>                                  
                                </div>
                            </div>
                            <div class="recruitment-inner recruitment-required-job mb-4">
                                <div class="heading-style">
                                    <span>Yêu cầu công việc</span>
                                </div>
                                <div class="description-content size-095rem">
                                   <?php echo nl2br($dangtin->dangtin_yeucau_td)?>                              
                                </div>
                            </div>
                            <div class="recruitment-inner recruitment-benefit mb-4">
                                <div class="heading-style">
                                    <span>Quyền lợi được hưởng</span>
                                </div>
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
                                <div class="description-content size-095rem mt-2">
                                    <p>
                                       <?php echo nl2br($dangtin->dangtin_chedo_phucloi)?>                                   
                                    </p>
                                </div>
                            </div>
                            <div class="recruitment-inner recruitment-required-profile mb-4">
                                <div class="heading-style">
                                    <span>Yêu cầu hồ sơ</span>
                                </div>
                                <div class="description-content size-095rem">
                                    <?php echo nl2br($dangtin->dangtin_hoso_yeucau)?>                                   
                                </div>
                            </div>
                            <div class="recruitment-inner recruitment-required-profile mb-4">
                                <div class="heading-style">
                                    <span>Thông tin liên hệ</span>
                                </div>
                                <div class="description-content size-095rem d-flex flex-column">
                                    <div class="d-flex align-items-center mr-4">
                                        <span class="mr-2 w-18 size-1rem blue-color">
                                        <i class="fal fa-user"></i>
                                        </span>
                                        <div><b>Người liên hệ:</b> {{$dangtin->dangtin_nguoilienhe}}                                            </div>
                                    </div>
                                    <div class="d-flex align-items-center mr-4 mt-2">
                                        <span class="mr-2 w-18 size-1rem blue-color">
                                        <i class="fal fa-map-marker-alt"></i>
                                        </span>
                                        <div><b>Địa chỉ:</b> {{$dangtin->dangtin_diachi}} </div>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <span class="mr-2 w-18  size-1rem blue-color">
                                        <i class="fal fa-phone-alt"></i>
                                        </span>
                                        <div><b>Số điện thoại:</b> <a href="tel:{{$dangtin->ntd_sdt}}">{{$dangtin->ntd_sdt}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recruitment-apply mt-3">
                                <div class="heading-style">
                                    <span>Cách nộp hồ sơ</span>
                                </div>
                                <div class="apply-box">
                                    @if($dangtin->htnhs_tructiep != NULL)
                                    <div class="apply-inner mb-3">
                                        <p class="pr-1 fw-600 mb-0">Nộp hồ sơ trực tiếp tại văn
                                            phòng:
                                        </p>
                                        <span class="text-ellipsis" title="" data-toggle="tooltip" data-original-title="{{$dangtin->dangtin_diachi}}">
                                        Địa chỉ nộp: {{$dangtin->dangtin_diachi}}                                       </span>
                                    </div>
                                    @endif
                                    @if($dangtin->htnhs_mail != NULL)
                                    <div class="apply-inner mb-3">
                                        <p class="pr-1 fw-600 mb-2">
                                            Gửi hồ sơ qua email:
                                        </p>
                                            <span class="text-ellipsis" title="" data-toggle="tooltip" data-original-title="{{$dangtin->dangtin_nophs_mail}}">
                                                <a href="mailto:{{$dangtin->dangtin_nophs_mail}}" style="color:black;">{{$dangtin->dangtin_nophs_mail}}</a>
                                                                               </span>
                                        
                                        
                                    </div>
                                    @endif
                                </div>
                                <div class="apply-contact">
                                    @if($dangtin->htnhs_ten != NULL)
                                        <div class="apply-contact-item pr-5">
                                        * Hotline: <a
                                        href="tel:{{$dangtin->dangtin_hotline}}">{{$dangtin->dangtin_hotline}}</a>
                                        </div>
                                    @endif
                                        
                                    @if (strtotime(date("Y-m-d")) > strtotime($dangtin->dangtin_hannop_hs))
                                    <div class="apply-contact-item">
                                        * Hạn nộp: Đã hết hạn nộp hồ sơ                                        
                                    </div>
                                    @else
                                    <div class="apply-contact-item">
                                        * Hạn nộp: {{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}                                        
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- <div class="recruitment-share border-top pt-3 mt-3">
                                <p>Chia sẻ việc làm này:</p>
                                <ul class="d-flex align-items-center justify-content-start list-unstyled mb-0">
                                    <li class="share-facebook">
                                        <a href="javascript:void(0)" data-href="https://vieclamcantho.com.vn/cong-ty-tnhh-mtv-dich-vu-truyen-thong-va-quang-cao-tin-tuc-mien-tay-tuyen-dung-bien-tap-vien-san-xuat-chuong-trinh-31267.html" class="shareFacebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="copy-link">
                                        <a href="javascript:void(0)" class="copyLink" data-href="https://vieclamcantho.com.vn/cong-ty-tnhh-mtv-dich-vu-truyen-thong-va-quang-cao-tin-tuc-mien-tay-tuyen-dung-bien-tap-vien-san-xuat-chuong-trinh-31267.html">
                                        <i class="far fa-copy"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="ml-auto">
                                    <a class="text-danger btnReport" role="button" data-id="31267" data-report-type="3">
                                    <i class="fal fa-exclamation-triangle"></i> Báo cáo
                                    </a>
                                </div>
                            </div> -->
                        </div>
                        <div id="recruitment-related" class="recruitment-related bg-white border p-3 mb-3">
                            <div class="heading-style">
                                <span>Việc làm cùng công ty</span>
                            </div>
                            @foreach($tatca_dangtin as $key => $alltin)
                            @if($alltin->dangtin_id_ntd  == $dangtin->ntd_id)
                            <div class="recruitment-list">
                                <div class="list-item">
                                    <div class="list-item-content">
                                        <div class="list-item-name">
                                            <a href="{{URL::to('chi-tiet-tuyen-dung/'.$alltin->dangtin_id)}}" class="size-1rem fw-700 size-095rem text-ellipsis d-inline-block tdAjax" data-type="td" data-id="31269" title="" data-toggle="tooltip" data-original-title="QUAY PHIM/ KỸ THUẬT DỰNG PHIM">{{$alltin->dangtin_chucdanh}}</a>
                                        </div>
                                        <div class="list-item-address">
                                            <a href="" class="size-09rem text-gray d-inline-block my-2">
                                            {{$dangtin->ntd_tencongty}}
                                            </a>
                                        </div>
                                        <div class="list-item-desc size-085rem">
                                            <div class="row row-10">
                                                <div class="col-md-4">
                                                    <div class="list-item-desc-item text-1-line" data-toggle="tooltip" title="" data-original-title="Mức lương: {{$alltin->dangtin_mucluong}}">
                                                        <i class="fal fa-usd-circle blue-color"></i>
                                                        {{$alltin->dangtin_mucluong}}                                                                
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="list-item-desc-item text-1-line" data-toggle="tooltip" title="" data-original-title="Hạn nộp: 30/06/2022">
                                                        <i class="fal fa-clock blue-color"></i>
                                                        {{date("d-m-Y", strtotime($alltin->dangtin_hannop_hs))}}                                                               
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="list-item-desc-item text-1-line" data-toggle="tooltip" title="" data-original-title="Địa điểm làm việc: Cần Thơ">
                                                        <i class="fal fa-map-marker-alt blue-color"></i>
                                                        {{$alltin->dangtin_diadiem}}                                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="recruitment-related">
                            <!-- google ads (chitiet) -->
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="recruitment-sidebar mb-3 border bg-white">
                            <div class="recruiment-sidebar-title">
                                Thông tin công ty
                            </div>
                            <div class="recruitment-sidebar-address pt-1 px-3 d-flex align-items-start size-09rem">
                                <span class="mr-2 size-105rem blue-color"><i class="fal fa-map-marker-alt"></i></span>
                                <div>{{$dangtin->ntd_diachi}}</div>
                            </div>
                            <div class="recruitment-sidebar-address pt-1 px-3 d-flex align-items-start size-09rem">
                                <span class="mr-2 size-105rem blue-color"><i class="fal fa-phone-alt"></i></span>
                                <a href="tel:{{$dangtin->dangtin_sdt}}">
                                {{$dangtin->ntd_sdt}}                                        </a>
                            </div>
                            @if($dangtin->ntd_website != NULL)
                            <div class="recruitment-sidebar-address pt-1 px-3 d-flex align-items-start size-09rem">
                                <span class="mr-2 size-105rem blue-color"><i class="fal fa-globe"></i></span>
                                <a href="{{$dangtin->ntd_website}}" rel="nofollow">{{$dangtin->ntd_website}}</a>
                            </div>
                            @else
                            <div class="recruitment-sidebar-address pt-1 px-3 d-flex align-items-start size-09rem">
                                <span class="mr-2 size-105rem blue-color"><i class="fal fa-globe"></i></span>
                                <a href="javascript:void(0)" rel="nofollow">Chưa cập nhật</a>
                            </div>
                            @endif
                            <div class="recruitment-sidebar-address pt-1 px-3 d-flex align-items-start size-09rem">
                                <span class="mr-2 size-105rem blue-color"><i class="fal fa-external-link"></i></span>
                                <a href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$dangtin->dangtin_id_ntd)}}">Xem
                                chi tiết Công ty</a>
                            </div>
                            <div class="recruitment-sidebar-map pt-1 pb-2 px-3">
                            </div>
                        </div>
                        <!-- <div id="vieclamlienquan">
                            <div class="recruitment-sidebar mb-3 border bg-white">
                                <div class="recruiment-sidebar-title">
                                    Tuyển dụng liên quan
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- <div class="recruitment-sidebar mb-3 border bg-white">
                            <div class="recruiment-sidebar-title">
                                Tìm kiếm liên quan
                            </div>
                            <div class="recruitment-list">
                                <ul class="pl-3" style="list-style-position: inside">
                                                                                    <li class="mt-2">
                                                <a href="https://vieclamcantho.com.vn/viec-lam-truyen-hinh-bao-chi-bien-tap" class="" title="" data-toggle="tooltip" data-original-title="Tin tuyển dụng liên quan Truyền hình / Báo chí / Biên tập">
                                                    Tuyển dụng Truyền hình / Báo chí / Biên tập                                                    </a>
                                            </li>
                                                                                                                                <li class="mt-2">
                                                <a href="https://vieclamcantho.com.vn/viec-lam-can-tho?ts=1&amp;cate=1" class="" title="" data-toggle="tooltip" data-original-title="Tin tuyển dụng liên quan Cần Thơ">
                                                    Tuyển dụng tại Cần Thơ                                                    </a>
                                            </li>
                                                                            </ul>
                            </div>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection