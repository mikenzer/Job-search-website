@extends('layout') 
@section('content')
@foreach($all_taikhoanntd as $key => $ntd)
<?php
    $ntd_id = Session::get('ntd_id');
    $i = 0 ;
    ?>
<div class="section-page page-infoCompany">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="infoCompany-card infoCompany-card_main card">
                    <div class="card-header rounded-0 p-0 border-bottom-0">
                        <div class="card-image" id="anhBanner" style="background-image: url('{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_banner)}}')">
                            <a class="stretched-link banner-fancybox" data-fancybox="bannerNTD" href="{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_banner)}}"></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-logo">
                            <a class="" data-fancybox="logoNTD" href="{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}" style="display: flex; background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}&quot;);">
                            </a>
                            <div class="card-main">
                                <div class="card-title">
                                    {{$ntd->ntd_tencongty}}                                
                                </div>
                                <div class="card-meta">
                                    <!-- <span>
                                        2 lượt theo dõi
                                        </span> -->
                                    <span>
                                    @foreach($all_dangtin as $key => $dangtin)
                                    @if($dangtin->dangtin_id_ntd == $ntd->ntd_id and $dangtin->dangtin_status == 1)
                                    <?php
                                        $i++;
                                        ?>
                                    @endif
                                    @endforeach
                                    {{$i}} tin tuyển dụng                                        
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-buttons">
                                <!-- <a href="javascript:void(0)" data-id="11253" data-type="nofollow" class="text-center btn-theme_outline btnFollow">
                                <i class="far fa-info-circle" data-bs-toggle="tooltip" title="Theo dõi công ty để nhận thông báo tuyển dụng mới nhất"></i>
                                Theo dõi
                                </a> -->
                                <!-- <a title="Nhắn tin" href="javascript:void(0)" class="nhanTin btn-theme_outline text-center" data-img="cong-ty-lien-doanh-tnhh-khu-cong-nghiep-viet-nam-singapore5961651647692.jpg" data-name="Công ty Liên Doanh TNHH Khu công nghiệp Việt Nam - Singapore" data-uid="4-11253">
                                <i class="far fa-comment-lines"></i> Nhắn tin
                                </a> -->
                                <!-- <div class="button-group">
                                    Chia sẻ:
                                    <div class="ml-auto d-flex align-items-center button-group_icons">
                                        <a href="javascript:void(0)" class="shareFacebook" data-href="https://vieclamcantho.com.vn/cong-ty-lien-doanh-tnhh-khu-cong-nghiep-viet-nam-singapore-thong-tin-tuyen-dung-11253.html"><i class="fab fa-facebook-square"></i></a>
                                        <a href="javascript:void(0)" class="copyLink" data-href="https://vieclamcantho.com.vn/cong-ty-lien-doanh-tnhh-khu-cong-nghiep-viet-nam-singapore-thong-tin-tuyen-dung-11253.html">
                                        <i class="fas fa-copy"></i>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                            <!-- trạng thái uy tín là 2 (Đã xác thực) hoặc 3 (Uy tín) thì có logo xác thực -->
                            <!-- <div class="card-activated">
                                <img src="https://vieclamcantho.com.vn/public/upload/icon/daxacthuc.png" class="img-xacthuc" alt="Công ty đã xác thực thông tin">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-footer p-0 bg-white">
                        <div class="template-card_tab template-card_tab__button">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" id="tabTT" data-target="#home" type="button" role="tab">
                                    THÔNG TIN
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" id="tabJobs" data-target="#jobs" type="button" role="tab">
                                    TUYỂN DỤNG
                                    </a>
                                </li>
                                @if($ntd_id == $ntd->ntd_id)
                                <li class="nav-item ml-auto">
                                        <a class="nav-link" href="{{URL::to('/nha-tuyen-dung/home')}}" role="tab">
                                            QUẢN TRỊ
                                        </a>
                                    </li>
                                @endif
                                <!-- <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" id="tabNews" data-target="#newfeed" type="button" role="tab">
                                        BÀI VIẾT
                                    </a>
                                    </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home">
                        <div class="infoCompany-card infoCompany-card_posts card">
                            <div class="card-header border-bottom-0 bg-transparent">
                                <div class="card-title">
                                    Bài viết đáng chú ý
                                </div>
                                <div class="posts-navigation">
                                    <!--                                    <div id="posts-prev" class="posts-navigation_item">-->
                                    <!--                                        <i class="fal fa-angle-left"></i>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div id="posts-next" class="posts-navigation_item">-->
                                    <!--                                        <i class="fal fa-angle-right"></i>-->
                                    <!--                                    </div>-->
                                    <!-- <a href="javascript: void(0)" class="openTabNews">Xem tất cả</a> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="newfeed-main">
                                    <div class="newfeed-body">
                                        <div class="newfeed-content">
                                            <div class="swiper-container pr-1 swiper-container-initialized swiper-container-horizontal" id="infoCompany-posts">
                                                <div class="swiper-wrapper" id="swiper-wrapper-289e52733b5fce5c" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                    @foreach($all_dangtin as $key => $dangtin)
                                                    @if($dangtin->dangtin_id_ntd == $ntd->ntd_id and $dangtin->dangtin_status == 1)
                                                    <div class="swiper-slide swiper-slide-active" style="width: 221.286px; margin-right: 15px;">
                                                        <div class="newfeed-item">
                                                            <div class="newfeed-item_header">
                                                                <div class="header-logo"><a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" style="background-image: url('{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}')"></a></div>
                                                                <div class="header-meta">
                                                                    <div class="header-meta_title"><a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}">{{$ntd->ntd_tencongty}}</a></div>
                                                                    <!-- <div class="header-meta_desc"><span>27-05-2022</span></div> -->
                                                                </div>
                                                            </div>
                                                            <div class="newfeed-item_body">
                                                                <div class="newfeed-item_desc">
                                                                    <div class="newfeed-item_content">
                                                                        <div class="bodyFH">{{$dangtin->dangtin_chucdanh}}
                                                                            Số lượng: {{$dangtin->dangtin_sltuyen}} nhân viên - Mức lương: {{$dangtin->dangtin_mucluong}}
                                                                            Hạn nộp: {{date("d-m-Y", strtotime($dangtin->dangtin_hannop_hs))}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="infoCompany-card infoCompany-card_tab overflow-hidden card">
                            <div class="card-header border-bottom-0 bg-transparent">
                                <div class="card-title">
                                    Giới thiệu công ty
                                </div>
                            </div>
                            @if($ntd->ntd_mota == NULL)
                            <div class="card-body">
                                <div class="card-description">
                                    Chưa cập nhật
                                </div>
                            </div>
                            @else
                            <div class="card-body">
                                <div class="card-description">
                                    <?php echo nl2br($ntd->ntd_mota)?>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane fade " id="jobs">
                        <div class="infoCompany-card infoCompany-card_tab overflow-hidden card">
                            <div class="card-header border-bottom-0 bg-transparent">
                                <div class="card-title">
                                    Việc làm đang tuyển dụng
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="job-list">
                                    @foreach($all_dangtin as $key => $dangtin)
                                    @if($dangtin->dangtin_id_ntd == $ntd->ntd_id)
                                    <div class="job-list_item">
                                        <div class="row row-10 align-items-center">
                                            <div class="col-md-9">
                                                <div class="list-item_name">
                                                    <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="size-095rem fw-700 text-ellipsis d-inline-block tdAjax" data-type="td" data-id="31383" title="" data-toggle="tooltip" data-original-title="Chuyên viên Kế hoạch Dự án">
                                                    {{$dangtin->dangtin_chucdanh}}                                                            </a>
                                                </div>
                                                <div class="list-item_desc size-095rem mt-2">
                                                    <div class="row row-10">
                                                        <div class="col-md-4">
                                                            <div class="desc-item text-ellipsis vertical-middle" data-toggle="tooltip" title="" data-original-title="Mức lương: Thỏa thuận">
                                                                <i class="fal fa-usd-circle blue-color size-095rem"></i>
                                                                {{$dangtin->dangtin_mucluong}}                                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="desc-item text-ellipsis vertical-middle" data-toggle="tooltip" title="" data-original-title="Hạn nộp: 13/07/2022">
                                                                <i class="fal fa-clock blue-color size-095rem"></i>
                                                                {{date("d-m-Y", strtotime($dangtin->dangtin_hannop_hs))}}                                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="desc-item text-ellipsis vertical-middle" data-toggle="tooltip" title="" data-original-title="Địa điểm làm việc: Cần Thơ">
                                                                <i class="fal fa-map-marker-alt blue-color size-095rem"></i>
                                                                {{$dangtin->dangtin_diadiem}}                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-3">
                                                <div class="list-item_button text-right">
                                                    <a class="btn button-theme button-basic rounded-0 callNopHoSo" data-id="31383" data-diachi="Số 8 Đại lộ Hữu Nghị, KCN Việt Nam – Singapore, P. Bình Hòa, TP. Thuận An, tỉnh Bình Dương" data-hinhthuc-nophs="1">
                                                        <i class="far fa-paper-plane mr-1"></i>
                                                        Ứng tuyển ngay
                                                    </a>
                                                </div>
                                                </div> -->
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade " id="newfeed">
                        <div class="newfeed-main" id="newfeed-main">
                            <div class="newfeed-sidebar">
                                <div class="infoCompany-card infoCompany-card_tab overflow-hidden card">
                                    <div class="card-body">
                                        <div class="card-logo">
                                            <div class="card-logo_image" style="background-image: url('https://cdn.vieclamcantho.com.vn/public/upload/nhatuyendung/cong-ty-lien-doanh-tnhh-khu-cong-nghiep-viet-nam-singapore5961651647692.jpg')"></div>
                                        </div>
                                        <div class="card-name">
                                            Công ty Liên Doanh TNHH Khu công nghiệp Việt Nam - Singapore                                        
                                        </div>
                                        <div class="card-buttons">
                                            <a href="javascript:void(0)" data-id="11253" data-type="nofollow" class="button-theme button-blue text-center btnFollow">
                                            <i class="far fa-info-circle" data-bs-toggle="tooltip" title="Theo dõi công ty để nhận thông báo tuyển dụng mới nhất"></i>
                                            Theo dõi
                                            </a>
                                            <a title="Nhắn tin" href="javascript:void(0)" class="nhanTin button-theme button-orange text-center" data-img="cong-ty-lien-doanh-tnhh-khu-cong-nghiep-viet-nam-singapore5961651647692.jpg" data-name="Công ty Liên Doanh TNHH Khu công nghiệp Việt Nam - Singapore" data-uid="4-11253">
                                            <i class="far fa-comment-lines"></i> Nhắn tin
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4 col-lg-3" style="z-index: 1;">
                <div class="sticky-top" style="top: 55px">
                    <div class="infoCompany-card infoCompany-card_sidebar overflow-hidden card">
                        <div class="card-header border-bottom-0 bg-transparent">
                            <div class="card-title mb-0" style="font-size: 1em">
                                THÔNG TIN CÔNG TY
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                                                    <li>
                                        <span>
                                            <i class="fas fa-phone-alt blue-color w-20"></i>
                                        </span>
                                        {{$ntd->ntd_sdt}}                                    </li>
                                                                <li>
                                    <span>
                                        <i class="fas fa-map-marker-check blue-color w-20"></i>
                                    </span>
                                    {{$ntd->ntd_diachi}}                                </li>
                                @if($ntd->ntd_website != NUll)
                                <li>
                                    <span>
                                        <i class="fas fa-globe blue-color w-20"></i>
                                    </span>
                                                                        <a href="{{$ntd->ntd_website}}" rel="nofollow">{{$ntd->ntd_website}}</a>
                                </li>
                                @else
                                <li>
                                    <span>
                                        <i class="fas fa-globe blue-color w-20"></i>
                                    </span>
                                                                        <a href="javascript:void(0)" rel="nofollow">Chưa cập nhật</a>
                                </li>
                                @endif
                                @if($ntd->ntd_quymo != NULL)
                                <li>
                                    <span>
                                        <i class="fas fa-users blue-color w-20"></i>
                                        Qui mô: 
                                    </span>
                                    {{$ntd->ntd_quymo}}                                </li>
                                @else
                                 <li>
                                    <span>
                                        <i class="fas fa-users blue-color w-20"></i>
                                        Qui mô: 
                                    </span>
                                    Chưa cập nhật                                </li>
                                @endif
                                <li>
                                    <span>
                                        <i class="fas fa-credit-card-front blue-color w-20"></i>
                                        MST:
                                    </span>
                                    {{$ntd->ntd_masothue}}                                </li>

                                @if($ntd->ntd_loaihinh_dn != NULL)
                                <li>
                                    <span>
                                        <i class="fas fa-gavel blue-color w-20"></i>
                                        Loại hình:
                                    </span>
                                    {{$ntd->ntd_loaihinh_dn}}                                </li>
                                @else
                                <li>
                                    <span>
                                        <i class="fas fa-gavel blue-color w-20"></i>
                                        Loại hình:
                                    </span>
                                    Chưa cập nhật                                </li>
                                @endif

                                @if($ntd->ntd_linhvuc_kd !=NULL)
                                <li>
                            
                                    <span>
                                        <i class="fas fa-briefcase blue-color w-20"></i>
                                        Lĩnh vực:
                                    </span>
                                    {{$ntd->ntd_linhvuc_kd}}                                </li>
                                @else
                                <li>
                            
                                    <span>
                                        <i class="fas fa-briefcase blue-color w-20"></i>
                                        Lĩnh vực:
                                    </span>
                                    Chưa cập nhật                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endforeach
@endsection