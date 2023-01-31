@extends('layout')
@section('content')
<section class="wrapperBanner wrapperBanner-info my-3 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h4 mb-4 mt-2 text-uppercase text-center font-weight-bold blue-hover">
                    Nhà tuyển dụng hàng đầu
                </div>
            </div>
        </div>
        <div class="position-relative swiper swiper-banner overflow-hidden" data-carousel="swiperSlider" data-items="1" data-direction="horizontal" data-autoplay="3000" data-speed="250" data-loop="true" data-effect="slide" data-spacebetween="0" data-disableoninteraction="true" data-center="true" data-initlal="1" data-hoverpause="true">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal" id="swiperBanner" data-swiper="container">
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-166410f12969bf133">
                    <i class="fal fa-angle-left"></i>
                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-166410f12969bf133">
                    <i class="fal fa-angle-right"></i>
                </div>
                <div class="swiper-wrapper" id="swiper-wrapper-166410f12969bf133" aria-live="off" >
                    @php
                  $i = 0 ;
                @endphp
                @foreach($all_taikhoanntd as $key => $ntd)
                @if($ntd->ntd_banner != NULL)
                  @php
                    $i++;
                  @endphp
                    <div class="swiper-slide {{$i == 1 ? 'swiper-slide-active' : ''}}" data-swiper-slide-index="3" role="group" aria-label="{{$i}} / 2" style="width: 1140px;">
                        <a class="d-block background-cover swiper-lazy swiper-lazy-loaded" href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$ntd->ntd_id)}}" target="_blank" style="background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_banner)}}&quot;);">
                        </a>
                        <div class="card">
                            <div class="row no-gutters align-items-stretch">
                                <div class="col-lg-2 col-md-3">
                                    <div class="card-logo">
                                        <a href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$ntd->ntd_id)}}" class="d-block">
                                        <img class="img-fluid swiper-lazy swiper-lazy-loaded" height="156" width="156" alt="" src="{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="card-body">
                                        <a href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$ntd->ntd_id)}}" class="d-block">
                                            <div class="card-title">
                                                {{$ntd->ntd_tencongty}}                                                       
                                            </div>
                                        </a>
                                        <div class="card-text text-gray">
                                            {{$ntd->ntd_diachi}}                                                     
                                        </div>
                                        <div class="card-list">
                                            <div class="row mt-3">
                                                @foreach($all_dangtin as $key => $dangtin)
                                                @if($dangtin->dangtin_id_ntd == $ntd->ntd_id)
                                                <div class="col-md-6">
                                                    <a class="tdAjax text-ellipsis vertical-middle" title="" data-toggle="tooltip" data-type="td" data-id="31383" href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" data-original-title="Chuyên viên Kế hoạch Dự án">
                                                    {{$dangtin->dangtin_chucdanh}}                                                                    </a>
                                                </div>
                                                @endif
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                        <!-- <div class="card-link mt-2 text-right">
                                            <a href="https://vieclamcantho.com.vn/cong-ty-lien-doanh-tnhh-khu-cong-nghiep-viet-nam-singapore-thong-tin-tuyen-dung-11253.html" class="btn button-theme button-orange  btn-small">
                                            Xem thêm
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach  
                    
                </div>
                <!-- <div class="swiper-pagination text-center w-100 py-3 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div> -->
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
</section>
<div class="wrapperNoLogin my-3">
    <div class="container">
        <div class="row-10 row">
            <div class="col-md-8">
                <div class="row row-10">
                    <div class="col-md-6">
                        <div class="card h-100 hover-blue transition-03">
                            <a href="{{URL::to('/tao-cv')}}" class="">
                                <div class="card-body flex-xy-center flex-column text-center p-2">
                                    <div class="card-icon blue-color mb-0">
                                        <i class="fal fa-check-circle"></i>
                                    </div>
                                    <p class="card-title blue-color h6 fw-600 mb-0 text-uppercase">Tạo CV ngay</p>
                                    <p class="card-text size-08rem pt-2">Tạo hồ sơ miễn phí, có ngay việc làm ưng
                                        ý
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 hover-blue transition-03">
                            <?php
                                $ntd_id = Session::get('ntd_id');
                                ?>
                            @if($ntd_id)
                            <a href="{{URL::to('/nha-tuyen-dung/dang-tin')}}" class="loginNhaTuyenDung">
                            @else
                            <a onclick="return confirm('Bạn phải đăng nhập nhà tuyển dụng!')" href="{{URL::to('/dang-nhap-nha-tuyen-dung')}}" class="loginNhaTuyenDung">
                                @endif
                                <div class="card-body flex-xy-center flex-column text-center p-2">
                                    <div class="card-icon blue-color mb-0">
                                        <i class="fal fa-clipboard-list"></i>
                                    </div>
                                    <p class="card-title blue-color h6 fw-600 mb-0 text-uppercase">Đăng tin miễn phí
                                    </p>
                                    <p class="card-text size-08rem pt-2">Tiếp cận nhanh nhất, với hơn 90 ngàn hồ sơ
                                        tìm việc
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row row-10 h-100">
                    <div class="col-md-6">
                        <div class="card h-100 hover-blue transition-03">
                            <a href="javascript:void(0)" class="loginPopup">
                                <div class="card-body flex-xy-center flex-column text-center p-2">
                                    <div class="card-icon blue-color mb-0">
                                        <i class="fal fa-lock-alt"></i>
                                    </div>
                                    <p class="card-title blue-color h6 fw-600 mb-0 text-uppercase">Đăng nhập
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 hover-blue transition-03">
                            <a href="javascript:void(0)" class="registerPopup">
                                <div class="card-body flex-xy-center flex-column text-center p-2">
                                    <div class="card-icon blue-color mb-0">
                                        <i class="fal fa-sign-in-alt"></i>
                                    </div>
                                    <p class="card-title blue-color h6 fw-600 mb-0 text-uppercase">
                                        Đăng ký
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapperBox my-3">
    <div class="container">
        <div class="row row-10">
        </div>
        <div class="col-md-14" id="div-vieclammoinhat">
            <div class="card card-item">
                <div class="card-header">
                    <a href="javascript:void(0)" class="card-header-title">
                    <span class="mr-2"><i class="fal fa-clock"></i></span>
                    <span class="text-1-line size-105rem">VIỆC LÀM MỚI NHẤT</span>
                    </a>
                </div>
                <ul class="list-group list-group-flush card-image card-overflow-image customScroll"
                    id="ul-customScroll" >
                    @foreach($all_dangtin as $key => $dangtin)
                    @foreach($all_taikhoanntd as $key => $ntd)
                    @if($dangtin->dangtin_id_ntd == $ntd->ntd_id)
                    <li class="list-group-item padding-h12">
                        <div class="boxItemContent">
                           
                            <div class="boxItemInfo">
                                <div class="boxItemName">
                                    <a href="{{URL::to('chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}"
                                        class="fw-600 text-ellipsis vertical-middle tdAjax" data-type="td" data-id="31267"
                                        title="BIÊN TẬP VIÊN SẢN XUẤT CHƯƠNG TRÌNH"
                                        data-toggle="tooltip">
                                    {{$dangtin->dangtin_chucdanh}}
                                    </a>
                                </div>
                                <div class="boxItemAddress text-gray font-italic text-ellipsis"
                                    title="CÔNG TY TNHH MTV DỊCH VỤ TRUYỀN THÔNG VÀ QUẢNG CÁO TIN TỨC MIỀN TÂY"
                                    data-toggle="tooltip">
                                    {{$ntd->ntd_tencongty}}
                                </div>
                                <div class="boxItemDesc">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="boxItemDescChild text-ellipsis"
                                                title="Mức lương mong muốn Thỏa thuận"
                                                data-toggle="tooltip">
                                                <i class="fal fa-usd-circle blue-color pl-1px position-relative top-1px"></i>
                                                {{$dangtin->dangtin_mucluong}}
                                            </div>
                                        </div>
                                        <!--  <div class="col-md-6">
                                            <div class="boxItemDescChild text-ellipsis"
                                                 title="Đăng tin: 2 phút trước"
                                                 data-toggle="tooltip">
                                                <i class="fal fa-clock blue-color pl-1px position-relative top-1px"></i>
                                                2 phút trước
                                            </div>
                                            </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                    @endforeach
                </ul>
                <div class="card-footer padding-h4 bg-white">
                    <a href="{{URL::to('/viec-lam-moi-nhat')}}"
                        class="d-flex align-items-center justify-content-center  text-dark size-08rem">
                    Xem tất cả<i class="far fa-chevron-double-right size-06rem ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="wrapperBox my-3" id="div-loaihinhcv">
    <div class="container">
        <div class="row row-10">
                            <div class="col-md-4">
                    <div class="card card-item card-max-height">
                        <div class="card-header">
                            <a href="javascript:void(0)" class="card-header-title">
                                <span class="mr-2"><i class="fal fa-clock"></i></span>
                                <span class="text-1-line size-105rem" id="loaihinhcvTitle_1">VIỆC LÀM BÁN THỜI GIAN</span>
                            </a>
                        </div>
                        <div class="card-body p-0">
                           <ul class="list-group list-group-flush card-image card-overflow-image customScroll" id="loaihinhcvContent_1">
                            @foreach($all_taikhoanntd as $key => $ntd)
                            @foreach($all_dangtin as $key => $dangtin)
                            @if($dangtin->dangtin_loaihinhcv == 'Bán thời gian/ Thời vụ' and $dangtin->dangtin_id_ntd == $ntd->ntd_id)
                               <li class="list-group-item">                    <div class="boxItemContent">                        <div class="boxItemAvatar">                            <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="boxItemBackground tdAjax" data-type="td" data-id="32139" style="display: flex; background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}&quot;);"></a>                        </div>                        <div class="boxItemInfo">                            <div class="boxItemName">                                <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="size-09rem fw-600 text-ellipsis vertical-middle tdAjax" data-type="td" data-id="32139" data-toggle="tooltip" title="{{$dangtin->dangtin_chucdanh}}">{{$dangtin->dangtin_chucdanh}}                                </a>                            </div>                            <div class="boxItemAddress size-085rem text-gray font-italic text-ellipsis" data-toggle="tooltip" title="{{$ntd->ntd_tencongty}}">{{$ntd->ntd_tencongty}}                            </div>                            <div class="boxItemDesc size-085rem">                                <div class="row">                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="{{$dangtin->dangtin_mucluong}}">                                            <i class="fal fa-usd-circle blue-color pl-1px position-relative top-1px"></i>{{$dangtin->dangtin_mucluong}}                                        </div>                                    </div>                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="Hạn nộp: {{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}">                                            <i class="fal fa-clock blue-color pl-1px position-relative top-1px"></i>{{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </li>
                            @endif
                            @endforeach
                            @endforeach
                           </ul>
                        </div>
                        <div class="card-footer padding-h4 bg-white">
                            <a href="{{URL::to('/viec-lam-ban-thoi-gian')}}" id="loaihinhcvLink_1" class="d-flex align-items-center justify-content-center  text-dark size-08rem">
                                Xem tất cả<i class="far fa-chevron-double-right size-06rem ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-md-4">
                    <div class="card card-item card-max-height">
                        <div class="card-header">
                            <a href="javascript:void(0)" class="card-header-title">
                                <span class="mr-2"><i class="fal fa-clock"></i></span>
                                <span class="text-1-line size-105rem" id="loaihinhcvTitle_2">TUYỂN THỰC TẬP SINH</span>
                            </a>
                        </div>
                        <div class="card-body p-0">
                           <ul class="list-group list-group-flush card-image card-overflow-image customScroll" id="loaihinhcvContent_1">
                            @foreach($all_taikhoanntd as $key => $ntd)
                            @foreach($all_dangtin as $key => $dangtin)
                            @if($dangtin->dangtin_capbac == 'Sinh viên/ Thực tập sinh' and $dangtin->dangtin_id_ntd == $ntd->ntd_id)
                               <li class="list-group-item">                    <div class="boxItemContent">                        <div class="boxItemAvatar">                            <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="boxItemBackground tdAjax" data-type="td" data-id="32139" style="display: flex; background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}&quot;);"></a>                        </div>                        <div class="boxItemInfo">                            <div class="boxItemName">                                <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="size-09rem fw-600 text-ellipsis vertical-middle tdAjax" data-type="td" data-id="32139" data-toggle="tooltip" title="{{$dangtin->dangtin_chucdanh}}">{{$dangtin->dangtin_chucdanh}}                                </a>                            </div>                            <div class="boxItemAddress size-085rem text-gray font-italic text-ellipsis" data-toggle="tooltip" title="{{$ntd->ntd_tencongty}}">{{$ntd->ntd_tencongty}}                            </div>                            <div class="boxItemDesc size-085rem">                                <div class="row">                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="{{$dangtin->dangtin_mucluong}}">                                            <i class="fal fa-usd-circle blue-color pl-1px position-relative top-1px"></i>{{$dangtin->dangtin_mucluong}}                                        </div>                                    </div>                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="Hạn nộp: {{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}">                                            <i class="fal fa-clock blue-color pl-1px position-relative top-1px"></i>{{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </li>
                            @endif
                            @endforeach
                            @endforeach

                            @foreach($all_taikhoanntd as $key => $ntd)
                            @foreach($all_dangtin as $key => $dangtin)
                            @if($dangtin->dangtin_loaihinhcv == 'Thực tập' and $dangtin->dangtin_id_ntd == $ntd->ntd_id)
                               <li class="list-group-item">                    <div class="boxItemContent">                        <div class="boxItemAvatar">                            <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="boxItemBackground tdAjax" data-type="td" data-id="32139" style="display: flex; background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}&quot;);"></a>                        </div>                        <div class="boxItemInfo">                            <div class="boxItemName">                                <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="size-09rem fw-600 text-ellipsis vertical-middle tdAjax" data-type="td" data-id="32139" data-toggle="tooltip" title="{{$dangtin->dangtin_chucdanh}}">{{$dangtin->dangtin_chucdanh}}                                </a>                            </div>                            <div class="boxItemAddress size-085rem text-gray font-italic text-ellipsis" data-toggle="tooltip" title="{{$ntd->ntd_tencongty}}">{{$ntd->ntd_tencongty}}                            </div>                            <div class="boxItemDesc size-085rem">                                <div class="row">                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="{{$dangtin->dangtin_mucluong}}">                                            <i class="fal fa-usd-circle blue-color pl-1px position-relative top-1px"></i>{{$dangtin->dangtin_mucluong}}                                        </div>                                    </div>                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="Hạn nộp: {{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}">                                            <i class="fal fa-clock blue-color pl-1px position-relative top-1px"></i>{{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </li>
                            @endif
                            @endforeach
                            @endforeach
                           </ul>
                        </div>
                        <div class="card-footer padding-h4 bg-white">
                            <a href="{{URL::to('/viec-lam-thuc-tap')}}" class="d-flex align-items-center justify-content-center  text-dark size-08rem">
                                Xem tất cả<i class="far fa-chevron-double-right size-06rem ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-md-4">
                    <div class="card card-item card-max-height">
                        <div class="card-header">
                            <a href="javascript:void(0)" class="card-header-title">
                                <span class="mr-2"><i class="fal fa-clock"></i></span>
                                <span class="text-1-line size-105rem" id="loaihinhcvTitle_3">VIỆC LÀM LƯƠNG CAO</span>
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush card-image card-overflow-image customScroll" id="loaihinhcvContent_1">
                            @foreach($all_taikhoanntd as $key => $ntd)
                            @foreach($all_dangtin as $key => $dangtin)
                            @if($dangtin->dangtin_mucluong == 'Trên 30 triệu' and $dangtin->dangtin_id_ntd == $ntd->ntd_id)
                               <li class="list-group-item">                    <div class="boxItemContent">                        <div class="boxItemAvatar">                            <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="boxItemBackground tdAjax" data-type="td" data-id="32139" style="display: flex; background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}&quot;);"></a>                        </div>                        <div class="boxItemInfo">                            <div class="boxItemName">                                <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="size-09rem fw-600 text-ellipsis vertical-middle tdAjax" data-type="td" data-id="32139" data-toggle="tooltip" title="{{$dangtin->dangtin_chucdanh}}">{{$dangtin->dangtin_chucdanh}}                                </a>                            </div>                            <div class="boxItemAddress size-085rem text-gray font-italic text-ellipsis" data-toggle="tooltip" title="{{$ntd->ntd_tencongty}}">{{$ntd->ntd_tencongty}}                            </div>                            <div class="boxItemDesc size-085rem">                                <div class="row">                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="{{$dangtin->dangtin_mucluong}}">                                            <i class="fal fa-usd-circle blue-color pl-1px position-relative top-1px"></i>{{$dangtin->dangtin_mucluong}}                                        </div>                                    </div>                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="Hạn nộp: {{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}">                                            <i class="fal fa-clock blue-color pl-1px position-relative top-1px"></i>{{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </li>
                            @endif
                            @endforeach
                            @endforeach

                            @foreach($all_taikhoanntd as $key => $ntd)
                            @foreach($all_dangtin as $key => $dangtin)
                            @if($dangtin->dangtin_mucluong == '20 - 25 triệu' and $dangtin->dangtin_id_ntd == $ntd->ntd_id)
                               <li class="list-group-item">                    <div class="boxItemContent">                        <div class="boxItemAvatar">                            <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="boxItemBackground tdAjax" data-type="td" data-id="32139" style="display: flex; background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}&quot;);"></a>                        </div>                        <div class="boxItemInfo">                            <div class="boxItemName">                                <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="size-09rem fw-600 text-ellipsis vertical-middle tdAjax" data-type="td" data-id="32139" data-toggle="tooltip" title="{{$dangtin->dangtin_chucdanh}}">{{$dangtin->dangtin_chucdanh}}                                </a>                            </div>                            <div class="boxItemAddress size-085rem text-gray font-italic text-ellipsis" data-toggle="tooltip" title="{{$ntd->ntd_tencongty}}">{{$ntd->ntd_tencongty}}                            </div>                            <div class="boxItemDesc size-085rem">                                <div class="row">                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="{{$dangtin->dangtin_mucluong}}">                                            <i class="fal fa-usd-circle blue-color pl-1px position-relative top-1px"></i>{{$dangtin->dangtin_mucluong}}                                        </div>                                    </div>                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="Hạn nộp: {{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}">                                            <i class="fal fa-clock blue-color pl-1px position-relative top-1px"></i>{{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </li>
                            @endif
                            @endforeach
                            @endforeach

                            @foreach($all_taikhoanntd as $key => $ntd)
                            @foreach($all_dangtin as $key => $dangtin)
                            @if($dangtin->dangtin_mucluong == '15 - 20 triệu' and $dangtin->dangtin_id_ntd == $ntd->ntd_id)
                               <li class="list-group-item">                    <div class="boxItemContent">                        <div class="boxItemAvatar">                            <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="boxItemBackground tdAjax" data-type="td" data-id="32139" style="display: flex; background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}&quot;);"></a>                        </div>                        <div class="boxItemInfo">                            <div class="boxItemName">                                <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="size-09rem fw-600 text-ellipsis vertical-middle tdAjax" data-type="td" data-id="32139" data-toggle="tooltip" title="{{$dangtin->dangtin_chucdanh}}">{{$dangtin->dangtin_chucdanh}}                                </a>                            </div>                            <div class="boxItemAddress size-085rem text-gray font-italic text-ellipsis" data-toggle="tooltip" title="{{$ntd->ntd_tencongty}}">{{$ntd->ntd_tencongty}}                            </div>                            <div class="boxItemDesc size-085rem">                                <div class="row">                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="{{$dangtin->dangtin_mucluong}}">                                            <i class="fal fa-usd-circle blue-color pl-1px position-relative top-1px"></i>{{$dangtin->dangtin_mucluong}}                                        </div>                                    </div>                                    <div class="col-md-6">                                        <div class="boxItemDescChild" data-toggle="tooltip" title="Hạn nộp: {{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}">                                            <i class="fal fa-clock blue-color pl-1px position-relative top-1px"></i>{{date("d/m/Y", strtotime($dangtin->dangtin_hannop_hs))}}                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </li>
                            @endif
                            @endforeach
                            @endforeach
                           </ul>
                        </div>
                        <div class="card-footer padding-h4 bg-white">
                            <a href="{{URL::to('/viec-lam-luong-cao')}}" id="loaihinhcvLink_3" class="d-flex align-items-center justify-content-center  text-dark size-08rem">
                                Xem tất cả<i class="far fa-chevron-double-right size-06rem ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</div>
</div>
<div class="wrapperBox my-3">
    <div class="container">
        <div class="row row-10">
        </div>
        <div class="col-md-14" id="div-vieclammoinhat">
            <div class="card card-item">
                <div class="card-header">
                    <a href="javascript:void(0)" class="card-header-title">
                    <span class="mr-2"><i class="fal fa-star"></i></span>
                    <span class="text-1-line size-105rem">HỒ SƠ ỨNG VIÊN MỚI NHẤT</span>
                    </a>
                    <div class="card-header-readmore">            <a href="{{URL::to('/ho-so-ung-vien')}}" class="size-09rem">                <span class="small"><i class="fas fa-chevron-double-right"></i></span>                Xem tất cả            </a>        </div>
                </div>
                <div class="card-body">
                    <div class="row row-5">
                        @foreach($all_hoso as $key => $hoso)
                        @foreach($all_taikhoan as $key => $taikhoan)
                        @if($taikhoan->taikhoan_id == $hoso->hoso_id_uv and $hoso->hoso_cv_code != NULL)
                        <div class="col-md-4">
                            <div class="ungVienItem">
                                <div class="ungVienAvatar">
                                    <div class="ungVienAvatar-inner">               <a href="{{URL::to('/use-cv/'.$hoso->hoso_cv_code.'/'.$taikhoan->taikhoan_id)}}" title="{{$taikhoan->taikhoan_ten}}" class="boxItemBackground tdAjax" data-type="uv" data-id="87366" style="display: flex; background-image: url(&quot;http://localhost/vieclamcantho/public/upload/ungvien/{{$hoso->hoso_hinhanh_uv}}&quot;);"></a>           </div>
                                </div>
                                <div class="ungVienContent d-flex flex-column">
                                    <div class="ungVienJob">                <a href="{{URL::to('/use-cv/'.$hoso->hoso_cv_code.'/'.$taikhoan->taikhoan_id)}}" class="size-095rem pl-1 text-ellipsis vertical-middle tdAjax"  data-toggle="tooltip" data-type="uv" data-id="87366" title="{{$hoso->hoso_vitri}}">                    <i class="fal fa-link w-20"></i>{{$hoso->hoso_vitri}}                </a>            </div>
                                    <div class="ungVienName">                <a href="https://vieclamcantho.com.vn/nhan-vien-van-phong-hs87366.html" class="size-09rem pl-1 text-ellipsis vertical-middle tdAjax"  data-toggle="tooltip" data-type="uv" data-id="87366" title="{{$taikhoan->taikhoan_ten}} - Năm sinh {{date("Y", strtotime($taikhoan->taikhoan_ngaysinh))}}">                  @if($taikhoan->taikhoan_gioitinh == 1)
                                        <i class="fal fa-mars w-18"></i>
                                        @else
                                        <i class="fal fa-venus w-18"></i>
                                        @endif
                                        {{$taikhoan->taikhoan_ten}}                   <span class="fw-500 size-07rem">{{date("Y", strtotime($taikhoan->taikhoan_ngaysinh))}}</span>                </a>&nbsp;<i class="fas fa-check-circle text-success" title="" data-toggle="tooltip" data-original-title="Đã xác thực số điện thoại"></i>            
                                    </div>
                                    <div class="ungVienInfo size-09rem">
                                        <div class="row row-5">
                                            <div class="col-md-6">
                                                <div class="ungVienInfoItem pl-1 text-ellipsis d-inline-block" title="" data-toggle="tooltip" data-original-title="{{$hoso->hoso_trinhdo}}">                            <i class="fal fa-graduation-cap"></i> {{$hoso->hoso_trinhdo}}                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ungVienInfoItem pl-1 text-ellipsis d-inline-block" title="" data-toggle="tooltip" data-original-title="{{$hoso->hoso_kinhnghiem}}">                            <i class="fal fa-star"></i>{{$hoso->hoso_kinhnghiem}}                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ungVienInfoItem pl-1 text-ellipsis d-inline-block" title="" data-toggle="tooltip" data-original-title="{{$hoso->hoso_mucluong}}">                            <i class="fal fa-usd-circle"></i>{{$hoso->hoso_mucluong}}                        </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="ungVienInfoItem pl-1 text-ellipsis d-inline-block" title="" data-toggle="tooltip" data-original-title="4 phút trước">                            <i class="fal fa-sync-alt"></i>4 phút trước                        </div>
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapperNhaTuyenDung bg-white py-5">
    <div class="container">
        <div class="row row-10">
            <div class="col-md-12">
                <div class="employer-title text-uppercase text-center h3">
                    <i class="fal fa-flag blue-color mr-4"></i>
                    Nhà tuyển dụng nổi bật
                </div>
            </div>
            <div class="col-md-12 pt-4 pb-5">
                <div class="position-relative swiper sliderRow"
                    data-carousel="swiperSlider"
                    data-items="1"
                    data-direction="horizontal"
                    data-autoplay="10000"
                    data-speed="250"
                    data-loop="true"
                    data-effect="slide"
                    data-spacebetween="0"
                    data-center="true"
                    data-initlal="1"
                    data-hoverpause="true" data-pagination="true">
                    <div class="swiper-container" id="swiperEmployer" data-swiper="container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row row-10">
                                    @foreach($all_taikhoanntd as $key => $ntd)
                                    <div class="col-md-2">
                                        <a href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$ntd->ntd_id)}}"
                                            class="p-1 border image-employer"
                                            data-toggle="tooltip"
                                            title="{{$ntd->ntd_tencongty}}">
                                        <img class="swiper-lazy j0" height="90" width="90"
                                            src="{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}"
                                            alt=""> 
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination text-center w-100 py-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection