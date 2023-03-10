@extends('pages.box_timkiem')
@section('content1')
<div id="main-content" class="wrapperUngVien ">
    <div class="container">
        <div class="row row-10">
            <div class="col-sm-9" id="div-renderUv">
                <div class="row row-5" id="listUngVien">
                  @foreach($all_hoso as $key => $hoso)
                  @foreach($all_taikhoan as $key => $taikhoan)
                  @if($taikhoan->taikhoan_id == $hoso->hoso_id_uv)
                    <div class="col-md-6">
                        <div class="ungVienItem">
                            <div class="ungVienAvatar">
                                <div class="ungVienAvatar-inner">
                                    <a href="{{URL::to('/use-cv/'.$hoso->hoso_cv_code.'/'.$taikhoan->taikhoan_id)}}" title="{{$taikhoan->taikhoan_ten}}" class="boxItemBackground tdAjax" data-type="uv" data-id="75499" style="display: flex; background-image: url(&quot;http://localhost/vieclamcantho/public/upload/ungvien/{{$hoso->hoso_hinhanh_uv}}&quot;);"></a>
                                </div>
                                
                            </div>
                            <div class="ungVienContent d-flex flex-column">
                                <div class="ungVienJob">
                                    <a href="{{URL::to('/use-cv/'.$hoso->hoso_cv_code.'/'.$taikhoan->taikhoan_id)}}" class="size-095rem  pl-1 text-ellipsis vertical-middle tdAjax"  data-toggle="tooltip" data-type="uv" data-id="75499" title="{{$hoso->hoso_vitri}}">
                                    <i class="fal fa-link w-18"></i>
                                    {{$hoso->hoso_vitri}}
                                    </a>
                                </div>
                                <div class="ungVienName">
                                    <a href="{{URL::to('/use-cv/'.$hoso->hoso_cv_code.'/'.$taikhoan->taikhoan_id)}}" class="size-09rem pl-1 text-ellipsis vertical-middle tdAjax"  data-toggle="tooltip" data-type="uv" data-id="75499" title="{{$taikhoan->taikhoan_ten}} - N??m sinh {{date("Y", strtotime($taikhoan->taikhoan_ngaysinh))}}">
                                    @if($taikhoan->taikhoan_gioitinh == 1)
                                    <i class="fal fa-mars w-18"></i>
                                    @else
                                    <i class="fal fa-venus w-18"></i>
                                    @endif
                                    {{$taikhoan->taikhoan_ten}}
                                    <span class="fw-500 size-07rem">{{date("Y", strtotime($taikhoan->taikhoan_ngaysinh))}}</span>
                                    </a> <i class="fas fa-check-circle text-success" title="" data-toggle="tooltip" data-original-title="???? x??c th???c s??? ??i???n tho???i"></i>
                                </div>
                                <div class="ungVienInfo size-09rem">
                                    <div class="row row-5">
                                        <div class="col-md-6">
                                            <div class="ungVienInfoItem pl-1 text-ellipsis d-inline-block" title="" data-toggle="tooltip" data-original-title="Tr??nh ????? ?????i h???c">
                                                <i class="fal fa-graduation-cap"></i>
                                                {{$hoso->hoso_trinhdo}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ungVienInfoItem pl-1 text-ellipsis d-inline-block" title="" data-toggle="tooltip" data-original-title="Kinh nghi???m 3 n??m">
                                                <i class="fal fa-star"></i>
                                                {{$hoso->hoso_kinhnghiem}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ungVienInfoItem pl-1 text-ellipsis d-inline-block" title="" data-toggle="tooltip" data-original-title="M???c l????ng Th???a thu???n">
                                                <i class="fal fa-usd-circle"></i>
                                                {{$hoso->hoso_mucluong}}
                                            </div>
                                        </div>
                                        <!--  <div class="col-md-6">
                                            <div class="ungVienInfoItem pl-1 text-ellipsis d-inline-block" title="" data-toggle="tooltip" data-original-title="C???p nh??t 8 ph??t tr?????c">
                                                <i class="fal fa-sync-alt"></i>
                                                8 ph??t tr?????c
                                            </div>
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
          

  

@endsection
