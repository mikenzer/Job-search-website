@extends('layout') 
@section('content')
<?php
                            $ntd_id = Session::get('ntd_id');
                            $i = 0 ;
?>
@foreach($all_taikhoanntd as $key => $ntd)
@if($ntd->ntd_id == $ntd_id)
<div class="section-page page-infoCompany">
    <div class="container">
        <div class="modal fade" id="modalCropper" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Crop the image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <img id="imagePreviewCropper" src="" style="max-height: 700px; max-width: 900px">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="btnCropper">Crop</button>
                    </div>
                </div>
            </div>
        </div>
<div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="infoCompany-card infoCompany-card_main card" id="b">
                    <div class="card-header rounded-0 p-0 border-bottom-0">
                                                <div class="card-image" id="anhBanner" style="background-image: url('{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_banner)}}')" data-src="{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_banner)}}">
                            <a class="stretched-link banner-fancybox anhBanner" data-fancybox="bannerNTD" href="{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_banner)}}"></a>
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-logo">
                            <a style="background-image: url('{{URL::to('/public/upload/nhatuyendung/'.$ntd->ntd_logo)}}')" >
                                <!-- <div class="camera-change">
                                    <i class="fas fa-camera"></i>
                                </div> -->
                                <!-- <input class="fileAvatar" type="file" id="taikhoan_image" accept="image/x-png,image/gif,image/jpeg"> -->
                            </a>
                            <div class="card-main">
                                <div class="card-title">
                                    {{$ntd->ntd_tencongty}}                                </div>
                                <div class="card-meta">
                                   
                @foreach($all_dangtin as $key => $dangtin)
                @if($dangtin->dangtin_id_ntd == $ntd_id and $dangtin->dangtin_status == 1)
                  <?php
                    $i++;
                  ?>
                @endif
                @endforeach
                                                                        <span>
										{{$i}} tin tuyển dụng                                    </span>
                                    <span>
										0 lượt theo dõi
                                    </span>

                                                                            <span>Số dư: <b>0</b></span>
                                        <span>Điểm: <b>5</b></span>
                                                                        </div>
                            </div>
                        </div>
                    <!--     <div class="card-content" id="m">
                            <div class="card-buttons">
                                <a href="/phi-dang-tin-vip" class="button-theme button-blue text-center">
                                    Nâng cấp vip
                                </a>
                                <a href="javascript:void(0)" class="button-theme button-orange text-center openModalNapTien">
                                    Nạp số dư
                                </a>
                                                                    <a href="javascript:void(0)" class="button-theme button-basic px-3 text-center callXacThuc">
                                        Xác thực thông tin
                                    </a>
                                                                </div>
                           
                                                    </div> -->
                    </div>
                    @yield('content2')


            </div>
            <div class="col-md-4 col-lg-3" style="z-index: 1;">
                <div class="sticky-top" style="top: 55px">
                    <div class="infoCompany-card infoCompany-card_sidebar overflow-hidden card">
                        <div class="card-header border-bottom-0 bg-transparent">
                            <div class="card-title mb-0" style="font-size: 1em">
                               {{$ntd->ntd_tencongty}}                            </div>
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
</div>
        <script type="text/javascript" src="https://cdn.vieclamcantho.com.vn/view/vieclam_pc/assets/js/bundle-ntd.js?ver=322"></script>
         <link rel="stylesheet" href="https://cdn.vieclamcantho.com.vn/view/vieclam_pc/assets/css/bundle-ntd.css?ver=322">
         @endif
         @endforeach
@endsection