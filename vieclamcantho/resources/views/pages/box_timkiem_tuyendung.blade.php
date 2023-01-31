@extends('layout')
@section('content')
@yield('content2')

 <div class="col-md-3">
                <div class="filter-inner bg-white border">
                    <form action="{{URL::to('/tim-kiem-tuyen-dung')}}" method="post">
                        @csrf
                    <div class="filter-item p-1 my-2">
                        <div class="filter-title fw-700 p-2 d-flex align-items-center justify-content-between">
                            <p class="mb-0 text-uppercase size-095rem">
                                Lọc theo mức lương
                            </p>
                        </div>
                        <div class="filter-list p-2 collapse show">
                            <select class="form-control" id="filterMucLuong" name="searchLMM">

                                <option value="-1">Tất cả</option>
                                @foreach($all_lmm as $key => $lmm)
                                <option value="{{$lmm->lmm_ten}}">{{$lmm->lmm_ten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="filter-item p-1 my-2">
                        <div class="filter-title fw-700 p-2 d-flex align-items-center justify-content-between">
                            <p class="mb-0 text-uppercase size-09rem">
                                Lọc theo cấp bậc
                            </p>
                            
                        </div>
                        
                            <div class="filter-list p-2 collapse show">
                            <select class="form-control" id="filterMucLuong" name="searchCB">

                                <option value="-1">Tất cả</option>
                                @foreach($all_capbac as $key => $capbac)
                                <option value="{{$capbac->cbtd_ten}}">{{$capbac->cbtd_ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <div class="filter-item p-1 my-2">
                        <div class="filter-title fw-700 p-2 d-flex align-items-center justify-content-between">
                            <p class="mb-0 text-uppercase size-09rem">
                                Lọc theo loại hình
                            </p>
                            
                        </div>
                        <div class="filter-list p-2 collapse show">
                            <select class="form-control" id="filterMucLuong" name="searchLHCV">

                                <option value="-1">Tất cả</option>
                                @foreach($all_lhcv as $key => $lhcv)
                                <option value="{{$lhcv->lhcv_ten}}">{{$lhcv->lhcv_ten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="filter-item p-1 my-2">
                        <div class="filter-title fw-700 p-2 d-flex align-items-center justify-content-between">
                            <p class="mb-0 text-uppercase size-09rem">
                                Lọc theo kinh nghiệm
                            </p>
                            
                        </div>
                        <div class="filter-list p-2 collapse show">
                            <select class="form-control" id="filterMucLuong" name="searchKN">
                                <option value="-1">Tất cả</option>
                                <option value="0">Không yêu cầu</option>
                                @foreach($all_kn as $key => $kn)
                                <option value="{{$kn->kn_ten}}">{{$kn->kn_ten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="filter-item p-1 my-2">
                        <div class="filter-title fw-700 p-2 d-flex align-items-center justify-content-between">
                            <p class="mb-0 text-uppercase size-09rem">
                                Lọc theo trình độ
                            </p>
                            
                        </div>
                        <div class="filter-list p-2 collapse show">
                            <select class="form-control" id="filterMucLuong" name="searchTDHV">
                                <option value="-1">Tất cả</option>
                                <option value="0">Không yêu cầu</option>
                                @foreach($all_tdhv as $key => $tdhv)
                                <option value="{{$tdhv->tdhv_ten}}">{{$tdhv->tdhv_ten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="filter-item p-1 my-2">
                    <button class="btn btn-block btn-primary btn-md br0 size-09rem rounded-0" type="submit" >
                      Tìm kiếm
                    </button>
                    </div>
                     </form>
                </div>
            </div>
       
</div>
</div>
</div>
@endsection