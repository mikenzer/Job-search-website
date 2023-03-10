@extends('layout')
@section('content')
@foreach($detail_uv as $key => $detail)
<div class="modalFull-content preventMouse">
    <div class="quickViewCV-wrap">
       
            <link href="https://fonts.googleapis.com/css?family=Prompt:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://vieclamcantho.com.vn/view/public/cv_theme/cv1/css/cv1_style.css">
            <div id="cvContent" class="cv1" style="--cvtheme-color: #34495e;font-family: 'Prompt', sans-serif;">
                <section class="divInfo">
                    <div class="divPicture">
                        <div class="dlTable">
                            <div class="infoPicture">
                                <div class="pictureBackground" title="{{$detail->taikhoan_ten}}" data-fancybox="avatar" href="{{URL::to('/public/upload/ungvien/'.$detail->hoso_hinhanh_uv)}}" style="background-image: url('http://localhost/vieclamcantho/public/upload/ungvien/{{$detail->hoso_hinhanh_uv}}')">
                                </div>
                            </div>
                            <div class="infoBasic">
                                <div class="divTen">
                                    {{$detail->taikhoan_ten}}                    
                                </div>
                                <div class="cvTitle">
                                    {{$detail->hoso_vitri}}                   
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4 mb-1">
                                        <p class="mb-0">
                                            <i class="fal fa-birthday-cake"></i> {{date("d-m-Y", strtotime($detail->taikhoan_ngaysinh))}}                            
                                        </p>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <p class="mb-0">
                                            @if($detail->taikhoan_gioitinh == 0)
                                            <i class="fal fa-venus-mars"></i> N???
                                            @else
                                            <i class="fal fa-venus-mars"></i> Nam
                                            @endif                            
                                        </p>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <p class="mb-0">
                                            @if($detail->hoso_tinhtranghonnhan_uv == 1)
                                            <i class="fal fa-hand-holding-heart"></i> ?????c th??n
                                            @else
                                            <i class="fal fa-hand-holding-heart"></i> ???? k???t h??n
                                            @endif                            
                                        </p>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <p class="mb-0">
                                            <i class="fal fa-phone-alt"></i>
                                            <a href="tel:{{$detail->taikhoan_sdt}}">
                                            {{$detail->taikhoan_sdt}}                                                    </a>
                                        </p>
                                    </div>
                                    <div class="col-sm-8 mb-1">
                                        <p class="mb-0">
                                            <i class="fal fa-envelope"></i>
                                            <a href="mailto:{{$detail->taikhoan_email}}">
                                            {{$detail->taikhoan_email}}                                                    </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="mb-0">
                                            <i class="fal fa-map-marker-alt"></i> {{$detail->taikhoan_diachi}}                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divInfoHalf"></div>
                </section>
                <section class="divProfile size-095rem">
                    <div class="title-section">
                        <span>
                        <i class="fal fa-user-alt"></i> Th??ng tin h??? s??
                        </span>
                    </div>
                    <div class="row infoHoSo">
                        <div class="col-sm-7">
                            <p>
                                <span class="fw-500">
                                M???c l????ng mong mu???n:
                                </span>
                                {{$detail->hoso_mucluong}}                
                            </p>
                            <p>
                                <span class="fw-500">
                                S??? n??m kinh nghi???m:
                                </span>
                                {{$detail->hoso_kinhnghiem}}                
                            </p>
                            <!-- <p>
                                <span class="fw-500">
                                L?????t xem:
                                </span>
                                382                    
                            </p> -->
                            <p>
                                <span class="fw-500">Ng??nh ngh???: </span>
                                <span class="badge badge-info">{{$detail->hoso_nganhnghe}}</span>
                                
                            </p>
                        </div>
                        <div class="col-sm-5">
                            <p>
                                <span class="fw-500">
                                C???p b???c mong mu???n:
                                </span>
                                {{$detail->hoso_capbac}}                
                            </p>
                            <p>
                                <span class="fw-500">
                                Tr??nh ????? h???c v???n:
                                </span>
                                {{$detail->hoso_trinhdo}}                
                            </p>
                            <!-- <p>
                                <span class="fw-500">
                                Ng??y c???p nh???t:
                                </span>
                                27/08/2021                    
                            </p> -->
                            <p>
                                <span class="fw-500">N??i l??m vi???c: </span>
                                <span class="badge badge-info">{{$detail->hoso_diadiem}}</span>
                                
                            </p>
                        </div>
                    </div>
                </section>
                <section class="divTimeLine size-095rem">
                    <div class="title-section mb-0">
                        <span>
                        <i class="fal fa-graduation-cap"></i> H???c v???n / b???ng c???p
                        </span>
                    </div>
                    @foreach($all_bangcap as $key => $bangcap)
                    <div class="timeline">
                        
                        <div class="item">
                            <div class="itemTime">
                                T??? {{$bangcap->bangcap_thangbd}}/{{$bangcap->bangcap_nambd}} - {{$bangcap->bangcap_thangkt}}/{{$bangcap->bangcap_namkt}}                        
                            </div>
                            <div class="itemInfo">
                                <p><span class="fw-500">{{$bangcap->bangcap_ten}}</span></p>
                                <p>
                                    <span class="fw-500">????n v??? ????o t???o:</span> {{$bangcap->bangcap_dvi_daotao}}                            
                                </p>
                                <p>
                                    <span class="fw-500">X???p lo???i:</span> {{$bangcap->bangcap_loai}}                            
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </section>
                <section class="divTimeLine size-095rem">
                    <div class="title-section mb-0">
                        <span>
                        <i class="fal fa-briefcase"></i> Kinh nghi???m l??m vi???c
                        </span>
                    </div>
                    @foreach($all_kinhnghiem as $key => $kinhnghiem)
                    <div class="timeline">
                        <div class="item">
                            <div class="itemTime">
                                T??? {{$kinhnghiem->kinhnghiem_thangbd}}/{{$kinhnghiem->kinhnghiem_nambd}} - {{$kinhnghiem->kinhnghiem_thangkt}}/{{$kinhnghiem->kinhnghiem_namkt}}                        
                            </div>
                            <div class="itemInfo">
                                <p><span class="fw-500">{{$kinhnghiem->kinhnghiem_chucdanh}}</span></p>
                                <p>
                                    <span class="fw-500">C??ng ty:</span> {{$kinhnghiem->kinhnghiem_congty}}                            
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
                <section class="divSkill size-095rem">
                    <div class="title-section">
                        <span>
                        <i class="fal fa-wand-magic"></i> K??? n??ng
                        </span>
                    </div>
                    <p class="subtitle"><i class="fas fa-check-circle"></i> K??? n??ng chuy??n m??n</p>
                    @foreach($all_kncm as $key => $kncm)
                    <div class="skill">
                        <span>{{$kncm->kncm_ten}}</span>
                        @if($kncm->kncm_loai == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($kncm->kncm_loai == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($kncm->kncm_loai == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    @endforeach
                    <p class="subtitle"><i class="fas fa-check-circle"></i> K??? n??ng m???m</p>
                    @foreach($all_knm as $key => $knm)
                    <div class="skill">
                        <span>Gi???i quy???t v???n ?????</span>
                        @if($knm->knmem_giaiquyetvande == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($knm->knmem_giaiquyetvande == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($knm->knmem_giaiquyetvande == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>

                    <div class="skill">
                        <span>L??m vi???c nh??m</span>
                        @if($knm->knmem_lamviecnhom == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($knm->knmem_lamviecnhom == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($knm->knmem_lamviecnhom == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    <div class="skill">
                        <span>T?? duy s??ng t???o</span>
                        @if($knm->knmem_tuduysangtao == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($knm->knmem_tuduysangtao == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($knm->knmem_tuduysangtao == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    <div class="skill">
                        <span>H???c v?? t??? h???c</span>
                        @if($knm->knmem_hocvatuhoc == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($knm->knmem_hocvatuhoc == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($knm->knmem_hocvatuhoc == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    <div class="skill">
                        <span>Thuy???t tr??nh</span>
                        @if($knm->knmem_thuyettrinh == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($knm->knmem_thuyettrinh == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($knm->knmem_thuyettrinh == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    <div class="skill">
                        <span>Giao ti???p v?? t???o l???p quan h???</span>
                        @if($knm->knmem_giaotiep == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($knm->knmem_giaotiep == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($knm->knmem_giaotiep == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </section>
                <section class="divSkill size-095rem">
                    <div class="title-section">
                        <span>
                        <i class="fal fa-laptop-code"></i> Tr??nh ????? tin h???c
                        </span>
                    </div>
                    @foreach($all_tinhoc as $key => $tinhoc)
                    <div class="skill">
                        <span>MS Word</span>
                        @if($tinhoc->tinhoc_word == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($tinhoc->tinhoc_word == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($tinhoc->tinhoc_word == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    <div class="skill">
                        <span>MS Excel</span>
                        @if($tinhoc->tinhoc_excel == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($tinhoc->tinhoc_excel == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($tinhoc->tinhoc_excel == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    <div class="skill">
                        <span>MS Powerpoint</span>
                        @if($tinhoc->tinhoc_pp == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($tinhoc->tinhoc_pp == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($tinhoc->tinhoc_pp == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    <div class="skill">
                        <span>Photoshop</span>
                        @if($tinhoc->tinhoc_ps == 'T???t')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        @elseif($tinhoc->tinhoc_ps == 'Kh??')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @elseif($tinhoc->tinhoc_ps == 'Trung b??nh')
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @else
                        <div class="rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </section>
                <section>
                    <div class="title-section">
                        <span>
                        <i class="fal fa-book"></i> Tr??nh ????? ngo???i ng???
                        </span>
                    </div>
                    <table class="table table-striped table-center table-noBorder">
                        <tbody>
                            <tr>
                                <th></th>
                                <th>Nghe</th>
                                <th>N??i</th>
                                <th>?????c</th>
                                <th>Vi???t</th>
                            </tr>
                            @foreach($all_trinhdonn as $key => $tdnn)
                            <tr>
                                <td style="text-align: left">
                                    {{$tdnn->tdnn_ten}}                        
                                </td>
                                <td>
                                    {{$tdnn->tdnn_nghe}}                        
                                </td>
                                <td>
                                    {{$tdnn->tdnn_noi}}                        
                                </td>
                                <td>
                                    {{$tdnn->tdnn_doc}}                        
                                </td>
                                <td>
                                    {{$tdnn->tdnn_viet}}                        
                                </td>
                            </tr>
                            @endforeach
                            @foreach($all_ngoaingukhac as $key => $nnk)
                            <tr>
                                <td style="text-align: left">
                                    {{$nnk->nnk_ten}}                        
                                </td>
                                <td>
                                    {{$nnk->nnk_nghe}}                        
                                </td>
                                <td>
                                    {{$nnk->nnk_noi}}                        
                                </td>
                                <td>
                                    {{$nnk->nnk_doc}}                        
                                </td>
                                <td>
                                    {{$nnk->nnk_viet}}                        
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
                <section class="divTimeLine size-095rem">
                    <div class="title-section mb-0">
                        <span>
                        <i class="fal fa-user-alt"></i> Ng?????i tham kh???o
                        </span>
                    </div>
                    @foreach($all_nguoithamkhao as $key => $ntk)
                    <div class="timeline">
                        <div class="item">
                            <div class="itemInfo2">
                                <p><span class="fw-500">{{$ntk->thamkhao_ten}}</span></p>
                                <p>
                                    <span class="fw-500">V??? tr??:</span> {{$ntk->thamkhao_chucdanh}}                            
                                </p>
                                <p>
                                    <span class="fw-500">C??ng ty:</span> {{$ntk->thamkhao_congty}}                            
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
                <section class="size-095rem">
                    <div class="title-section">
                        <span>
                        <i class="fal fa-trophy"></i> Ho???t ?????ng th??nh t??ch
                        </span>
                    </div>
                    @foreach($all_knm as $key => $knm)
                    <p>
                        {{$knm->knmem_hoatdong}}                
                    </p>
                    <p>
                        {{$knm->knmem_thanhtich}}                
                    </p>
                    @endforeach
                </section>
                <!-- <section class="size-095rem">
                    <div class="title-section">
                        <span>
                        <i class="fal fa-image-polaroid"></i> H??nh ???nh
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <a data-fancybox="avatar" href="https://vieclam.vn/public/upload/ungvien/646701627613486564.jpg">
                                <div class="cv-image" style="background-image: url('https://vieclam.vn/public/upload/ungvien/646701627613486564.jpg')">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <a data-fancybox="avatar" href="https://vieclam.vn/public/upload/ungvien/646701627619423518.jpg">
                                <div class="cv-image" style="background-image: url('https://vieclam.vn/public/upload/ungvien/646701627619423518.jpg')">
                                </div>
                            </a>
                        </div>
                    </div>
                </section> -->
            </div>

        
    </div>
</div>

@endforeach
@endsection