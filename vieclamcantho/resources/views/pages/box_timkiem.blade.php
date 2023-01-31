@extends('layout')
@section('content')
@yield('content1')
            <div class="col-sm-3" style="padding-left: 0">
                <div class="cardUngVien mb-3 bg-white border">
  <form method="POST" name="frmSearchUV" id="frmSearchUV" action="{{URL::to('/tim-kiem')}}">
    @csrf
    <div class="filter-inner">
      <div class="filter-item p-1 my-1 nganhnghe">
        <div class="filter-title fw-700 p-2 m-2 mb-3 d-flex align-items-center justify-content-between">
          <p class="mb-0 text-uppercase size-095rem">
            Tìm kiếm ứng viên
          </p>
        </div>
        <div class="filter-list px-2 collapse show">
          <select class="form-control select2 " name="searchUVNN" tabindex="-1" aria-hidden="true">
            <option class="size-09rem" value="0">
              Tất cả ngành nghề
            </option>
            @foreach($all_nn as $key => $nn)
                              <option class="size-09rem" value="{{$nn->nn_ten}}">
                    {{$nn->nn_ten}}                  </option>
            @endforeach
                            </select>
        </div>
      </div>
      
      <div class="filter-item p-1 my-1 diadiem">
        <div class="filter-list px-2 collapse show">
          <select class="form-control select2 " id="searchUVDD" name="searchUVDD" tabindex="-1" aria-hidden="true">
            <option class="size-09rem" value="0">
              Tất cả địa điểm
            </option>
            @foreach($all_diadiem as $key => $diadiem)
                              <option class="size-09rem" value="{{$diadiem->diadiem_ten}}">
                    {{$diadiem->diadiem_ten}}                 </option>
            @endforeach        
                            </select>
        </div>
      </div>
      
      <div class="filter-item p-1 my-1 kinhnghiem">
        <div class="filter-list px-2 collapse show">
          <select class="form-control select2 " id="searchUVKN" name="searchUVKN" tabindex="-1" aria-hidden="true">
            <option class="size-09rem" value="0">
              Kinh nghiệm làm việc
            </option>
            @foreach($all_kn as $key => $kn)
                            <option class="size-09rem" value="{{$kn->kn_ten}}">
                  {{$kn->kn_ten}}               </option>
            @endforeach
                          </select>
        </div>
      </div>
      
      <div class="filter-item p-1 my-1 trinhdo">
        <div class="filter-list px-2 collapse show">
          <select class="form-control select2 " id="searchUVTD" name="searchUVTD" tabindex="-1" aria-hidden="true">
            <option class="size-09rem" value="0">
              Trình độ học vấn
            </option>
            @foreach($all_tdhv as $key => $tdhv)
                            <option class="size-09rem" value="{{$tdhv->tdhv_ten}}">
                  {{$tdhv->tdhv_ten}}                </option>
            @endforeach
                          </select>
        </div>
      </div>
      
      <div class="filter-item p-1 my-1 mucluong">
        <div class="filter-list px-2 collapse show">
          <select class="form-control select2 " id="searchML" name="searchML" tabindex="-1" aria-hidden="true">
            <option class="size-09rem" value="0">
              Mức lương
            </option>
            @foreach($all_lmm as $key => $lmm)
                            <option class="size-09rem" value="{{$lmm->lmm_ten}}">
                  {{$lmm->lmm_ten}}                </option>
            @endforeach
                          </select>
        </div>
      </div>
      
      <div class="filter-item p-1 my-1 capbac">
        <div class="filter-list px-2 collapse show">
          <select class="form-control select2 " id="searchCB" name="searchCB" tabindex="-1" aria-hidden="true">
            <option class="size-09rem" value="0">
              Cấp bậc
            </option>
            @foreach($all_capbac as $key => $capbac)
                            <option class="size-09rem" value="{{$capbac->capbac_ten}}">
                  {{$capbac->capbac_ten}}               </option>
            @endforeach
                          </select>
        </div>
      </div>
      
      <div class="filter-item p-1 my-1 gioitinh">
        <div class="filter-list px-2 collapse show">
          <select class="form-control select2 " id="searchGT" name="searchGT" tabindex="-1" aria-hidden="true" >
            <option class="size-09rem "  value="2">
              Giới tính
            </option>
                            <option class="size-09rem" value="1">
                  Nam               </option>
                                <option class="size-09rem" value="2">
                  Nữ                </option>
                          </select>
        </div>
      </div>

            <!-- <div class="filter-item p-1 my-1 text-right">
                <div class="filter-list px-2 collapse show">
                    <div class="search-reset mr-0">
                        <a href="javascript:void(0)" style="" id="reset-search-uv">
                            <i class="fas fa-redo-alt"></i> Reset
                        </a>
                    </div>
                </div>
            </div> -->

      <div class="filter-item py-1 px-2 my-2">
        <button class="btn btn-block btn-primary btn-md br0 size-09rem rounded-0" type="submit" id="btnSearchUV">
          Tìm kiếm
        </button>
      </div>
    </div>
  </form>
</div>
            </div>
</div>
</div>
</div>
@endsection
