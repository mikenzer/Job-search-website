@extends('layout')
@section('content')
@foreach($detail_uv as $key => $detail)
<div class="modalFull-content preventMouse">
<div class="quickViewCV-wrap">
   
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://vieclamcantho.com.vn/view/public/cv_theme/cv3/css/cv3_style.css">
        <div id="cvContent" class="cv3" style="--cvtheme-color: #1273c1;font-family: 'Roboto', serif;">
            <div class="cv-head">
                <div class="cv-flexbox">
                    <div class="cv-head_left">
                        <div class="cv-head_wrapper">
                            <div class="cv-head_avatar">
                                <a data-fancybox="avatar" href="{{URL::to('/public/upload/ungvien/'.$detail->hoso_hinhanh_uv)}}">
                                <img class="cv-avatar" src="{{URL::to('/public/upload/ungvien/'.$detail->hoso_hinhanh_uv)}}" title="{{$detail->taikhoan_ten}}">
                                </a>
                            </div>
                            <div class="cv-head_info">
                                <div class="cv-head_name">
                                    {{$detail->taikhoan_ten}}                       
                                </div>
                                <div class="cv-head_title">
                                    {{$detail->hoso_vitri}}                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cv-head_right">
                        <div class="cv-head_content">
                            <div class="cv-heading">
                                <div class="cv-heading_icon">
                                    <span class="cv-icon_inner">
                                    <i class="fas fa-info-circle"></i>
                                    </span>
                                </div>
                                <div class="cv-heading_text">
                                    Th??ng tin h??? s??
                                </div>
                            </div>
                            <div class="cv-flexbox cv-flexwrap cv-padding_r1x">
                                <div class="cv-same_col5">
                                    <div class="cv-text">
                                        M???c l????ng mong mu???n:&nbsp;
                                        <b>{{$detail->hoso_mucluong}}</b>
                                    </div>
                                    <div class="cv-text">
                                        S??? n??m kinh nghi???m:&nbsp;
                                        <b>{{$detail->hoso_kinhnghiem}}</b>
                                    </div>
                                    
                                </div>
                                <div class="cv-same_col5">
                                    <div class="cv-text">
                                        C???p b???c mong mu???n:&nbsp;
                                        <b>{{$detail->hoso_capbac}}</b>
                                    </div>
                                    <div class="cv-text">
                                        Tr??nh ????? h???c v???n:&nbsp;
                                        <b>{{$detail->hoso_trinhdo}}</b>
                                    </div>
                                    
                                </div>
                                <div class="cv-same_col100">
                                    <div class="cv-text">
                                        Ng??nh ngh???:&nbsp;
                                        <span class="badgeCV">{{$detail->hoso_nganhnghe}}</span>
                                        
                                    </div>
                                </div>
                                <div class="cv-same_col100">
                                    <div class="cv-text">
                                        N??i l??m vi???c:&nbsp;
                                        <span class="badgeCV">{{$detail->hoso_diadiem}}</span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cv-head_contacts">
                            <div class="cv-flexbox cv-flexwrap mrb-5">
                                <div class="cv-same_col33">
                                    <div class="cv-contact_item">
                                        <span class="cv-icon">
                                        <i class="fas fa-hand-holding-heart"></i>
                                        </span>
                                        @if($detail->hoso_tinhtranghonnhan_uv == 1)
                                            <span class="cv-text">
                                        ?????c th??n                                </span>
                                            @else
                                            <span class="cv-text">
                                        ???? k???t h??n                                </span>
                                            @endif
                                        
                                    </div>
                                </div>
                                <div class="cv-same_col33">
                                    <div class="cv-contact_item">
                                        <span class="cv-icon">
                                        <i class="fas fa-venus-mars"></i>
                                        </span>
                                        @if($detail->taikhoan_gioitinh == 0)
                                            <span class="cv-text">
                                        N???                             </span>
                                            @else
                                            <span class="cv-text">
                                        Nam                             </span>
                                            @endif  
                                                                    
                                    </div>
                                </div>
                                <div class="cv-same_col33">
                                    <div class="cv-contact_item">
                                        <span class="cv-icon">
                                        <i class="fas fa-birthday-cake"></i>
                                        </span>
                                        <span class="cv-text">
                                        {{date("d-m-Y", strtotime($detail->taikhoan_ngaysinh))}}                              </span>
                                    </div>
                                </div>
                            </div>
                            <div class="cv-flexbox mrb-5">
                                <div class="cv-same_col33">
                                    <div class="cv-contact_item">
                                        <span class="cv-icon">
                                        <i class="fas fa-phone-alt"></i>
                                        </span>
                                        <span class="cv-text">
                                        <a href="tel:{{$detail->taikhoan_sdt}} ">
                                        {{$detail->taikhoan_sdt}}                                                       </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="cv-same_col6">
                                    <div class="cv-contact_item">
                                        <span class="cv-icon">
                                        <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="cv-text">
                                        <a href="mailto:{{$detail->taikhoan_email}}">
                                        {{$detail->taikhoan_email}}                                                       </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="cv-flexbox">
                                <div class="cv-same_col100">
                                    <div class="cv-contact_item cv-contact_address">
                                        <span class="cv-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                        <span class="cv-text">
                                        {{$detail->taikhoan_diachi}}                              </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cv-decor">
                <div class="cv-flexbox cv-j-between">
                    <div class="cv-decor_left"></div>
                    <div class="cv-decor_right"></div>
                </div>
            </div>
            <div class="cv-body">
                <div class="cv-flexbox">
                    <div class="cv-body_left">
                        <div class="cv-left_content">
                            <div class="cv-left_item">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-desktop-alt"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        Tr??nh ????? tin h???c
                                    </div>
                                </div>
                                @foreach($all_tinhoc as $key => $tinhoc)
                                <div class="cv-skills">
                                    <div class="cv-skills_title">
                                        MS Word                                    
                                    </div>
                                    @if($tinhoc->tinhoc_word == 'T???t')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                    </div>
                                    @elseif($tinhoc->tinhoc_word == 'Kh??')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @elseif($tinhoc->tinhoc_word == 'Trung b??nh')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="cv-skills">
                                    <div class="cv-skills_title">
                                        MS Excel                                    
                                    </div>
                                    @if($tinhoc->tinhoc_excel == 'T???t')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                    </div>
                                    @elseif($tinhoc->tinhoc_excel == 'Kh??')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @elseif($tinhoc->tinhoc_excel == 'Trung b??nh')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="cv-skills">
                                    <div class="cv-skills_title">
                                        MS Powerpoint                                    
                                    </div>
                                    @if($tinhoc->tinhoc_pp == 'T???t')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                    </div>
                                    @elseif($tinhoc->tinhoc_pp == 'Kh??')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @elseif($tinhoc->tinhoc_pp == 'Trung b??nh')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="cv-skills">
                                    <div class="cv-skills_title">
                                        Photoshop                                    
                                    </div>
                                    @if($tinhoc->tinhoc_ps == 'T???t')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                    </div>
                                    @elseif($tinhoc->tinhoc_ps == 'Kh??')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @elseif($tinhoc->tinhoc_ps == 'Trung b??nh')
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="cv-skills_item">
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            <div class="cv-left_item">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-language"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        Tr??nh ????? ngo???i ng???
                                    </div>
                                </div>
                                @foreach($all_trinhdonn as $key => $tdnn)
                                <div class="cv-skills">
                                    <div class="cv-skills_title">
                                        {{$tdnn->tdnn_ten}}                                    
                                    </div>

                                    <div class="cv-skills_item">
                                        <div class="cv-text">K??? n??ng nghe</div>
                                        @if($tdnn->tdnn_nghe == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($tdnn->tdnn_nghe == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($tdnn->tdnn_nghe == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">K??? n??ng n??i</div>
                                        @if($tdnn->tdnn_noi == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($tdnn->tdnn_noi == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($tdnn->tdnn_noi == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">K??? n??ng ?????c</div>
                                        @if($tdnn->tdnn_doc == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($tdnn->tdnn_doc == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($tdnn->tdnn_doc == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">K??? n??ng vi???t</div>
                                       @if($tdnn->tdnn_viet == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($tdnn->tdnn_viet == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($tdnn->tdnn_viet == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                                @foreach($all_ngoaingukhac as $key => $nnk)
                                <div class="cv-skills">
                                    <div class="cv-skills_title">
                                        {{$nnk->nnk_ten}}                                    
                                    </div>

                                    <div class="cv-skills_item">
                                        <div class="cv-text">K??? n??ng nghe</div>
                                        @if($nnk->nnk_nghe == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($nnk->nnk_nghe == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($nnk->nnk_nghe == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">K??? n??ng n??i</div>
                                        @if($nnk->nnk_noi == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($nnk->nnk_noi == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($nnk->nnk_noi == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">K??? n??ng ?????c</div>
                                        @if($nnk->nnk_doc == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($nnk->nnk_doc == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($nnk->nnk_doc == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">K??? n??ng vi???t</div>
                                       @if($nnk->nnk_viet == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($nnk->nnk_viet == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($nnk->nnk_viet == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="cv-left_item">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-wand-magic"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        K??? n??ng
                                    </div>
                                </div>
                                <div class="cv-skills">
                                    <div class="cv-skills_title">
                                        K??? n??ng chuy??n m??n
                                    </div>
                                    @foreach($all_kncm as $key => $kncm)
                                    <div class="cv-skills_item">
                                        <div class="cv-text">{{$kncm->kncm_ten}}</div>
                                        @if($kncm->kncm_loai == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($kncm->kncm_loai == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($kncm->kncm_loai == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                                <div class="cv-skills">
                                    <div class="cv-skills_title">
                                        K??? n??ng m???m
                                    </div>
                                    @foreach($all_knm as $key => $knm)
                                    <div class="cv-skills_item">
                                        <div class="cv-text">Gi???i quy???t v???n ?????</div>
                                        @if($knm->knmem_giaiquyetvande == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($knm->knmem_giaiquyetvande == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($knm->knmem_giaiquyetvande == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">L??m vi???c nh??m</div>
                                        @if($knm->knmem_lamviecnhom == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($knm->knmem_lamviecnhom == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($knm->knmem_lamviecnhom == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">T?? duy s??ng t???o</div>
                                        @if($knm->knmem_tuduysangtao == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($knm->knmem_tuduysangtao == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($knm->knmem_tuduysangtao == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">H???c v?? t??? h???c</div>
                                        @if($knm->knmem_hocvatuhoc == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($knm->knmem_hocvatuhoc == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($knm->knmem_hocvatuhoc == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">Thuy???t tr??nh</div>
                                        @if($knm->knmem_thuyettrinh == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($knm->knmem_thuyettrinh == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($knm->knmem_thuyettrinh == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="cv-skills_item">
                                        <div class="cv-text">Giao ti???p v?? t???o l???p quan h???</div>
                                        @if($knm->knmem_giaotiep == 'T???t')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                        </div>
                                        @elseif($knm->knmem_giaotiep == 'Kh??')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @elseif($knm->knmem_giaotiep == 'Trung b??nh')
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @else
                                        <div class="cv-skills_rating">
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class="checked"></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                            <span class=""></span>
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cv-body_right">
                        <div class="cv-right_content">
                            <div class="cv-body_content">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-bullseye-arrow"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        M???c ti??u ngh??? nghi???p
                                    </div>
                                </div>
                                <div class="cv-text">
                                    <p>
                                        <?php echo nl2br($detail->hoso_muctieu)?>                                            
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="cv-body_content">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-graduation-cap"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        H???c v???n / b???ng c???p
                                    </div>
                                </div>
                                 @foreach($all_bangcap as $key => $bangcap)
                                <div class="cv-timeline">
                                    <div class="cv-time">T??? {{$bangcap->bangcap_thangbd}}/{{$bangcap->bangcap_nambd}} - {{$bangcap->bangcap_thangkt}}/{{$bangcap->bangcap_namkt}}</div>
                                    <div class="cv-bold">{{$bangcap->bangcap_ten}}                                   <span>&nbsp;-&nbsp;{{$bangcap->bangcap_dvi_daotao}}</span></div>
                                    <div class="cv-text">X???p lo???i: {{$bangcap->bangcap_loai}}</div>
                                </div>
                                @endforeach
                            </div>
                            <div class="cv-body_content">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-briefcase"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        Kinh nghi???m l??m vi???c
                                    </div>
                                </div>
                                @foreach($all_kinhnghiem as $key => $kinhnghiem)
                                <div class="cv-timeline">
                                    <div class="cv-time">T??? {{$kinhnghiem->kinhnghiem_thangbd}}/{{$kinhnghiem->kinhnghiem_nambd}} - {{$kinhnghiem->kinhnghiem_thangkt}}/{{$kinhnghiem->kinhnghiem_namkt}}</div>
                                    <div class="cv-bold">{{$kinhnghiem->kinhnghiem_chucdanh}}                                        <span>&nbsp;-&nbsp;{{$kinhnghiem->kinhnghiem_congty}}</span></div>
                                </div>
                                @endforeach
                            </div>
                            <div class="cv-body_content">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        Ng?????i tham kh???o
                                    </div>
                                </div>
                                @foreach($all_nguoithamkhao as $key => $ntk)
                                <div class="cv-timeline">
                                    <div class="cv-bold">{{$ntk->thamkhao_ten}}                                        <span>&nbsp;-&nbsp;{{$ntk->thamkhao_chucdanh}}</span></div>
                                    <div class="cv-text">C??ng ty: <span>{{$ntk->thamkhao_congty}}</span></div>
                                </div>
                                @endforeach
                            </div>
                            <div class="cv-body_content">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-trophy"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        Ho???t ?????ng &amp; th??nh t??ch
                                    </div>
                                </div>
                                @foreach($all_knm as $key => $knm)
                                <div class="cv-text">
                                    <p>
                                        {{$knm->knmem_hoatdong}}                                    
                                    </p>
                                    <p>
                                        {{$knm->knmem_thanhtich}}                                    
                                    </p>
                                </div>
                                @endforeach
                            </div>
                            <!-- <div class="cv-body_content">
                                <div class="cv-heading">
                                    <div class="cv-heading_icon">
                                        <span class="cv-icon_inner">
                                        <i class="fas fa-images"></i>
                                        </span>
                                    </div>
                                    <div class="cv-heading_text">
                                        H??nh ???nh
                                    </div>
                                </div>
                                <div class="cv-images cv-flexbox">
                                    <div class="cv-same_col25">
                                        <a data-fancybox="avatar" href="https://vieclam.vn/public/upload/ungvien/646701627613486564.jpg">
                                            <div class="cv-image" style="background-image: url('https://vieclam.vn/public/upload/ungvien/646701627613486564.jpg')">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cv-same_col25">
                                        <a data-fancybox="avatar" href="https://vieclam.vn/public/upload/ungvien/646701627619423518.jpg">
                                            <div class="cv-image" style="background-image: url('https://vieclam.vn/public/upload/ungvien/646701627619423518.jpg')">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>
@endforeach
@endsection