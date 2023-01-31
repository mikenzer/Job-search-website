@extends('layout')
@section('content')
@foreach($detail_uv as $key => $detail)
<div class="modalFull-content preventMouse">
    <div class="quickViewCV-wrap">
        
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://vieclamcantho.com.vn/view/public/cv_theme/cv2/css/cv2_style.css">
            <div id="cvContent" class="cv2" style="--cvtheme-color: #51c2e7;font-family: 'Roboto', serif;">
                <div class="cv-wrapper" style="background-image: url(https://vieclamcantho.com.vn/view/public/cv_theme/cv2/images/tl-bg.png)">
                    <div class="cv-inner">
                        <div class="cv-header cv-flexbox">
                            <div class="cv-decor_svg">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="142.424242%" height="136.363636%" viewBox="0 0 80 750" preserveAspectRatio="xMidYMid meet">
                                    <g fill="#f9f9f9" transform="translate(-300.00000,551.5) scale(0.100000,-0.10000)" stroke="none">
                                        <path d="M5011 4793 c-27 -150 -102 -337 -187 -470 -45 -71 -166 -196 -239
                                            -248 -158 -112 -284 -150 -617 -185 -308 -32 -421 -59 -573 -136 -206 -105
                                            -397 -312 -520 -564 -162 -334 -191 -724 -75 -1005 56 -134 137 -240 334 -443
                                            233 -239 298 -334 348 -509 21 -70 23 -99 22 -273 0 -177 -3 -204 -27 -292
                                            -59 -221 -151 -391 -279 -513 -77 -74 -164 -127 -236 -144 -22 -5 383 -9 1016
                                            -10 l1052 -1 0 2430 c0 1337 -1 2430 -3 2430 -2 0 -9 -30 -16 -67z"></path>
                                        <path d="M1560 638 c-98 -9 -231 -59 -341 -128 -46 -29 -162 -116 -258 -192
                                            -280 -224 -358 -263 -529 -262 -112 0 -179 18 -262 71 -21 12 -40 23 -43 23
                                            -3 0 -5 -34 -5 -75 l0 -75 1388 1 c1224 0 1381 2 1334 15 -115 30 -226 97
                                            -475 283 -95 71 -204 149 -244 174 -208 133 -377 182 -565 165z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="cv-avatar cv-same_col4">
                                <div class="cv-avatar_wrapper">
                                    <div class="cv-avatar_image" title="{{$detail->taikhoan_ten}}" data-fancybox="avatar" href="{{URL::to('/public/upload/ungvien/'.$detail->hoso_hinhanh_uv)}}" style="background-image: url('http://localhost/vieclamcantho/public/upload/ungvien/{{$detail->hoso_hinhanh_uv}}')">
                                    </div>
                                </div>
                            </div>
                            <div class="cv-info cv-same_col6">
                                <div class="cv-name">
                                    {{$detail->taikhoan_ten}}                    
                                </div>
                                <div class="cv-title">
                                    {{$detail->hoso_vitri}}                    
                                </div>
                                <div class="cv-group">
                                    <div class="cv-rowFlex">
                                        <div class="cv-same_col33">
                                            <div class="cv-group-item">
                                                <span class="cv-icon">
                                                <i class="fas fa-birthday-cake"></i>
                                                </span>
                                                <span class="cv-text">
                                                {{date("d-m-Y", strtotime($detail->taikhoan_ngaysinh))}}                                    </span>
                                            </div>
                                        </div>
                                        <div class="cv-same_col33">
                                            <div class="cv-group-item">
                                                <span class="cv-icon">
                                                <i class="fas fa-venus-mars"></i>
                                                </span>
                                                @if($detail->taikhoan_gioitinh == 0)
                                                <span class="cv-text">
                                                Nữ                                   </span>
                                                @else
                                                <span class="cv-text">
                                                Nam                                   </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="cv-same_col33">
                                            <div class="cv-group-item">
                                                <span class="cv-icon">
                                                <i class="fas fa-hand-holding-heart"></i>
                                                </span>
                                                @if($detail->hoso_tinhtranghonnhan_uv == 1)
                                                <span class="cv-text">
                                                Độc thân                                    </span>
                                                @else
                                                <span class="cv-text">
                                                Đã kết hôn                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cv-flexbox">
                                        <div class="cv-same_col33">
                                            <div class="cv-group-item">
                                                <span class="cv-icon">
                                                <i class="fas fa-phone-alt"></i>
                                                </span>
                                                <span class="cv-text">
                                                <a href="tel:{{$detail->taikhoan_sdt}}">
                                                {{$detail->taikhoan_sdt}}                                                            </a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cv-same_col66">
                                            <div class="cv-group-item">
                                                <span class="cv-icon">
                                                <i class="fas fa-envelope"></i>
                                                </span>
                                                <span class="cv-text">
                                                <a href="mailto:{{$detail->taikhoan_email}}">
                                                {{$detail->taikhoan_email}}                                                           </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cv-flexbox">
                                        <div class="cv-same_col">
                                            <div class="cv-group-item">
                                                <span class="cv-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                <span class="cv-text">
                                                {{$detail->taikhoan_diachi}}                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cv-body cv-flexbox">
                            <div class="cv-info">
                                <div class="cv-title">
                                    <span>
                                    <i class="fas fa-user-alt"></i>
                                    </span>
                                    Thông tin hồ sơ
                                </div>
                                <div class="cv-row cv-padding_x">
                                    <div class="cv-flexbox">
                                        <div class="cv-same_col55">
                                            <div class="cv-row_info">
                                                <span>Mức lương mong muốn:</span>
                                                {{$detail->hoso_mucluong}}                                
                                            </div>
                                            <div class="cv-row_info">
                                                <span>Số năm kinh nghiệm:</span>
                                                {{$detail->hoso_kinhnghiem}}                                
                                            </div>
                                            <!-- <div class="cv-row_info">
                                                <span>Lượt xem hồ sơ:</span>
                                                382                                    
                                            </div> -->
                                            <div class="cv-row_info cv-lh28">
                                                <span>Ngành nghề:</span>
                                                <span class="badge">{{$detail->hoso_nganhnghe}}</span>
                                                
                                            </div>
                                        </div>
                                        <div class="cv-same_col45">
                                            <div class="cv-row_info">
                                                <span>Cấp bậc mong muốn:</span>
                                                {{$detail->hoso_capbac}}                                
                                            </div>
                                            <div class="cv-row_info">
                                                <span>Trình độ học vấn:</span>
                                                {{$detail->hoso_trinhdo}}                                
                                            </div>
                                            <!-- <div class="cv-row_info">
                                                <span>Ngày cập nhật:</span>
                                                27/08/2021                                    
                                            </div> -->
                                            <div class="cv-row_info">
                                                <span>Nơi làm việc:</span>
                                                <span class="badge">{{$detail->hoso_diadiem}}</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cv-row cv-padding_x">
                                <div class="cv-flexbox">
                                    <div class="cv-same_col55">
                                        <div class="cv-box">
                                            <div class="cv-heading">
                                                Học vấn / bằng cấp
                                            </div>
                                            @foreach($all_bangcap as $key => $bangcap)
                                            <div class="cv-text">
                                                <div class="cv-bold">{{$bangcap->bangcap_ten}}</div>
                                                <div class="cv-desc">Đơn vị đào tạo: <span>{{$bangcap->bangcap_dvi_daotao}} </span>
                                                </div>
                                                <div class="cv-desc">Xếp loại: <span>{{$bangcap->bangcap_loai}}</span></div>
                                                <div class="cv-time">Từ {{$bangcap->bangcap_thangbd}}/{{$bangcap->bangcap_nambd}} - {{$bangcap->bangcap_thangkt}}/{{$bangcap->bangcap_namkt}} </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="cv-box">
                                            <div class="cv-heading">
                                                Kinh nghiệm làm việc
                                            </div>
                                            @foreach($all_kinhnghiem as $key => $kinhnghiem)
                                            <div class="cv-text">
                                                <div class="cv-bold">{{$kinhnghiem->kinhnghiem_chucdanh}}</div>
                                                <div class="cv-desc">Công ty:
                                                    <span>{{$kinhnghiem->kinhnghiem_congty}}</span>
                                                </div>
                                                <div class="cv-time">Từ {{$kinhnghiem->kinhnghiem_thangbd}}/{{$kinhnghiem->kinhnghiem_nambd}} - {{$kinhnghiem->kinhnghiem_thangkt}}/{{$kinhnghiem->kinhnghiem_namkt}}</div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="cv-box">
                                            <div class="cv-heading">
                                                Người tham khảo
                                            </div>
                                            @foreach($all_nguoithamkhao as $key => $ntk)
                                            <div class="cv-text">
                                                <div class="cv-bold">{{$ntk->thamkhao_ten}}</div>
                                                <div class="cv-desc">Vị trí:
                                                    <span>{{$ntk->thamkhao_chucdanh}}</span>
                                                </div>
                                                <div class="cv-desc">Công ty: <span>{{$ntk->thamkhao_congty}}</span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="cv-box">
                                            <div class="cv-heading">
                                                Hoạt động &amp; thành tích
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
                                    </div>
                                    <div class="cv-same_col45">
                                        <div class="cv-box">
                                            <div class="cv-heading">
                                                Trình độ tin học
                                            </div>
                                            @foreach($all_tinhoc as $key => $tinhoc)
                                            <div class="cv-group_rating">
                                                <div class="cv-text">
                                                    MS Word                                            
                                                </div>
                                                @if($tinhoc->tinhoc_word == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($tinhoc->tinhoc_word == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($tinhoc->tinhoc_word == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="cv-group_rating">
                                                <div class="cv-text">
                                                    MS Excel                                            
                                                </div>
                                                @if($tinhoc->tinhoc_excel == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($tinhoc->tinhoc_excel == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($tinhoc->tinhoc_excel == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="cv-group_rating">
                                                <div class="cv-text">
                                                    MS Powerpoint                                            
                                                </div>
                                                @if($tinhoc->tinhoc_pp == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($tinhoc->tinhoc_pp == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($tinhoc->tinhoc_pp == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="cv-group_rating">
                                                <div class="cv-text">
                                                    Photoshop                                            
                                                </div>
                                                @if($tinhoc->tinhoc_ps == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($tinhoc->tinhoc_ps == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($tinhoc->tinhoc_ps == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="cv-box">
                                            <div class="cv-heading">
                                                Trình độ ngoại ngữ
                                            </div>
                                            @foreach($all_trinhdonn as $key => $tdnn)
                                            <div class="cv-group_margin">
                                                <div class="cv-subheading">
                                                    {{$tdnn->tdnn_ten}}                                            
                                                </div>
                                                <div class="cv-group_rating">
                                                    <div class="cv-text cv-subtext">Kỹ năng nghe</div>
                                                    @if($tdnn->tdnn_nghe == 'Tốt')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                    </div>
                                                    @elseif($tdnn->tdnn_nghe == 'Khá')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @elseif($tdnn->tdnn_nghe == 'Trung bình')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @else
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="cv-group_rating">
                                                    <div class="cv-text cv-subtext">Kỹ năng nói</div>
                                                    @if($tdnn->tdnn_noi == 'Tốt')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                    </div>
                                                    @elseif($tdnn->tdnn_noi == 'Khá')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @elseif($tdnn->tdnn_noi == 'Trung bình')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @else
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="cv-group_rating">
                                                    <div class="cv-text cv-subtext">Kỹ năng đọc</div>
                                                    @if($tdnn->tdnn_doc == 'Tốt')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                    </div>
                                                    @elseif($tdnn->tdnn_doc == 'Khá')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @elseif($tdnn->tdnn_doc == 'Trung bình')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @else
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="cv-group_rating">
                                                    <div class="cv-text cv-subtext">Kỹ năng viết</div>
                                                    @if($tdnn->tdnn_viet == 'Tốt')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                    </div>
                                                    @elseif($tdnn->tdnn_viet == 'Khá')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @elseif($tdnn->tdnn_viet == 'Trung bình')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @else
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            @endforeach
                                            @foreach($all_ngoaingukhac as $key => $nnk)
                                            <div class="cv-group_margin">
                                                <div class="cv-subheading">
                                                    {{$nnk->nnk_ten}}                                            
                                                </div>
                                                <div class="cv-group_rating">
                                                    <div class="cv-text cv-subtext">Kỹ năng nghe</div>
                                                    @if($nnk->nnk_nghe == 'Tốt')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                    </div>
                                                    @elseif($nnk->nnk_nghe == 'Khá')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @elseif($nnk->nnk_nghe == 'Trung bình')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @else
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="cv-group_rating">
                                                    <div class="cv-text cv-subtext">Kỹ năng nói</div>
                                                    @if($nnk->nnk_noi == 'Tốt')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                    </div>
                                                    @elseif($nnk->nnk_noi == 'Khá')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @elseif($nnk->nnk_noi == 'Trung bình')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @else
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="cv-group_rating">
                                                    <div class="cv-text cv-subtext">Kỹ năng đọc</div>
                                                    @if($nnk->nnk_doc == 'Tốt')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                    </div>
                                                    @elseif($nnk->nnk_doc == 'Khá')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @elseif($nnk->nnk_doc == 'Trung bình')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @else
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="cv-group_rating">
                                                    <div class="cv-text cv-subtext">Kỹ năng viết</div>
                                                    @if($nnk->nnk_viet == 'Tốt')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                    </div>
                                                    @elseif($nnk->nnk_viet == 'Khá')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @elseif($nnk->nnk_viet == 'Trung bình')
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @else
                                                    <div class="cv-rating">
                                                        <span class="checked"></span>
                                                        <span class="checked"></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                        <span class=""></span>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="cv-box">
                                            <div class="cv-heading">
                                                Kỹ năng
                                            </div>
                                            <div class="cv-subheading">
                                                Kỹ năng chuyên môn
                                            </div>
                                            @foreach($all_kncm as $key => $kncm)
                                            <div class="cv-group_rating">
                                                <div class="cv-text cv-subtext">{{$kncm->kncm_ten}}</div>
                                                @if($kncm->kncm_loai == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($kncm->kncm_loai == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($kncm->kncm_loai == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            @endforeach
                                            <div class="cv-divider"></div>
                                            <div class="cv-subheading">
                                                Kỹ năng mềm
                                            </div>
                                            @foreach($all_knm as $key => $knm)
                                            <div class="cv-group_rating">
                                                <div class="cv-text cv-subtext">Giải quyết vấn đề</div>
                                                @if($knm->knmem_giaiquyetvande == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($knm->knmem_giaiquyetvande == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($knm->knmem_giaiquyetvande == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="cv-group_rating">
                                                <div class="cv-text cv-subtext">Làm việc nhóm</div>
                                                @if($knm->knmem_lamviecnhom == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($knm->knmem_lamviecnhom == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($knm->knmem_lamviecnhom == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="cv-group_rating">
                                                <div class="cv-text cv-subtext">Tư duy sáng tạo</div>
                                                @if($knm->knmem_tuduysangtao == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($knm->knmem_tuduysangtao == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($knm->knmem_tuduysangtao == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="cv-group_rating">
                                                <div class="cv-text cv-subtext">Học và tự học</div>
                                                @if($knm->knmem_hocvatuhoc == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($knm->knmem_hocvatuhoc == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($knm->knmem_hocvatuhoc == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="cv-group_rating">
                                                <div class="cv-text cv-subtext">Thuyết trình</div>
                                                @if($knm->knmem_thuyettrinh == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($knm->knmem_thuyettrinh == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($knm->knmem_thuyettrinh == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="cv-group_rating">
                                                <div class="cv-text cv-subtext">Giao tiếp và tạo lập quan hệ</div>
                                                @if($knm->knmem_giaotiep == 'Tốt')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                </div>
                                                @elseif($knm->knmem_giaotiep == 'Khá')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                </div>
                                                @elseif($knm->knmem_giaotiep == 'Trung bình')
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
                                                    <span class=""></span>
                                                    <span class=""></span>
                                                </div>
                                                @else
                                                <div class="cv-rating">
                                                    <span class="checked"></span>
                                                    <span class="checked"></span>
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
                            <!-- <div class="cv-row cv-padding_x">
                                <div class="cv-flexbox">
                                    <div class="cv-same_col">
                                        <div class="cv-box">
                                            <div class="cv-heading">
                                                Hình ảnh
                                            </div>
                                            <div class="cv-images cv-flexbox">
                                                <div class="cv-same_col2">
                                                    <a data-fancybox="avatar" href="https://vieclam.vn/public/upload/ungvien/646701627613486564.jpg">
                                                        <div class="cv-image" style="background-image: url('https://vieclam.vn/public/upload/ungvien/646701627613486564.jpg')">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="cv-same_col2">
                                                    <a data-fancybox="avatar" href="https://vieclam.vn/public/upload/ungvien/646701627619423518.jpg">
                                                        <div class="cv-image" style="background-image: url('https://vieclam.vn/public/upload/ungvien/646701627619423518.jpg')">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="cvFooter"></div>
                    </div>
                </div>
            </div>
       
        
    </div>
</div>
@endforeach
@endsection