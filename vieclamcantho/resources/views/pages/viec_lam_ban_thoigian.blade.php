@extends('pages.box_timkiem_tuyendung')
@section('content2')

<div class="page-search my-3">
    <div class="container">
        <div class="row row-10">
            <div class="col-md-9">
                <div class="search-inner bg-white border" id="searchAjax">
                    <!--  <div class="py-2 px-3 border-bottom page-search-sort">
                        <div class="row align-items-center">
                            <div class="col-md-5"><i class="fal fa-briefcase mr-1"></i>
                                <b id="num-result">Tìm thấy 1140 việc làm</b>
                            </div>
                            <div class="col-md-7">
                                <div class="d-flex align-items-center justify-content-end">
                                    <span class="font-weight-bold mr-2">
                                        Sắp xếp:
                                    </span>
                                    <div class="d-flex align-items-center justify-content-end btn-group-search">
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Second group">
                                            <button type="button" class="btn btn-primary filter-tab" data-value="1" data-text="viec-lam-moi-nhat">
                                                Mới nhất
                                            </button>
                                            <button type="button" class="btn btn-secondary filter-tab" data-value="2" data-text="quan-tam">
                                                HOT nhất
                                            </button>
                                            <button type="button" class="btn btn-secondary filter-tab" data-value="3" data-text="viec-lam-phu-hop">
                                                Phù hợp
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div> -->
                    <!-- <div class="d-flex align-items-center justify-content-end px-3 mt-2" id="filter_td">
                        <i class="fal fa-info-circle mr-1" data-trigger="hover" role="button" data-toggle="popover" data-placement="left" data-html="true" data-content="<ul class='pl-3 mb-0'>
                        <li>
                        <b>Tin mới cập nhật:</b> Sắp xếp theo thời gian làm mới tin.
                        </li>
                        <li>
                        <b>Tin mới đăng:</b> Sắp xếp theo thời gian đăng mới tin.
                        </li>
                        <li>
                        <b>Tin đã xác thực:</b> Sắp xếp theo thời gian đăng mới tin của những nhà tuyển dụng đã xác thực thông tin.
                        </li>
                        </ul>" data-original-title="" title="">
                        </i>
                        <div class="dropdown dropdownTheme dropdownTheme-filter">
                            <a class="dropdown-toggle d-md-flex align-items-center justify-content-center size-085rem text-dark transition-03" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                                <span id="txt_change" data-value="3">
                        Tin đã xác thực                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right ml-0">
                                            <a class="dropdown-item filter-ts2" href="javascript:void(0)" data-value="2">
                        Tin mới cập nhật                                    </a>
                                            <a class="dropdown-item filter-ts2" href="javascript:void(0)" data-value="1">
                        Tin mới đăng                                    </a>
                                            <a class="dropdown-item filter-ts2" href="javascript:void(0)" data-value="3">
                        Tin đã xác thực                                    </a>
                                    </div>
                        </div>
                        </div> -->
                    <div id="kqSearch" class="p-3">
                        @foreach($all_dangtin as $key => $dangtin)
                        @foreach($all_taikhoanntd as $key => $ntd)
                        @if($dangtin->dangtin_id_ntd == $ntd->ntd_id)
                        <div class="search-item">
                            <div class="row row-10">
                                <div class="col-md-2">
                                    <div class="search-avatar mx-auto">
                                        <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" data-id="32735" data-type="td" class="boxItemBackground tdAjax" style="display: flex; background-image: url(&quot;{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}&quot;);"></a>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="search-content">
                                        <div class="search-name  is-new d-flex align-items-center justify-content-start mb-1">
                                            <a href="{{URL::to('/chi-tiet-tuyen-dung/'.$dangtin->dangtin_id)}}" class="size-09rem fw-700 tdAjax text-ellipsis" data-id="32735" data-type="td" title="" data-toggle="tooltip" data-original-title="Trình Dược Viên Tây Nam Bộ">
                                            {{$dangtin->dangtin_chucdanh}}                                                    </a>
                                        </div>
                                        <div class="search-address">
                                            <a href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$dangtin->dangtin_id_ntd)}}" data-toggle="tooltip" title="" class="size-09rem text-uppercase text-gray d-inline-block text-ellipsis" data-original-title="Công Ty TNHH Liên Doanh Hasan Dermapharm">{{$ntd->ntd_tencongty}}</a>
                                            <div class="search-save text-right">
                                                <a data-show-type="2" class="d-inline-block size-085rem text-gray blue-color btnSaveTD" data-id="32735" title="Lưu tin">
                                                <i class="yeuthich fal fa-heart" id="yeuthich_32735"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="search-desc size-085rem">
                                            <div class="row row-10">
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="search-desc-item text-ellipsis" data-toggle="tooltip" title="" data-original-title="Mức lương: 15 triệu - 20 triệu">
                                                                <i class="fal fa-usd-circle blue-color w-18"></i>
                                                                {{$dangtin->dangtin_mucluong}}                                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="search-desc-item text-ellipsis" data-toggle="tooltip" title="" data-original-title="Địa điểm làm việc: An Giang, Bến Tre, Đồng Tháp, Kiên Giang, Tiền Giang, Long An">
                                                                <i class="fal fa-map-marker-alt blue-color w-18"></i>
                                                                {{$dangtin->dangtin_diadiem}}                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-3">
                                                    <div class="search-desc-item text-ellipsis" data-toggle="tooltip" title="" data-original-title="Cập nhật: 1 giờ trước">
                                                        <i class="fal fa-clock blue-color w-18"></i>
                                                        1 giờ trước                                                            
                                                    </div>
                                                </div> -->
                                            </div>
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
           
        

@endsection