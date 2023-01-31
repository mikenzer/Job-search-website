 @extends('layout')
@section('content')
<div class="breadcrumb-main">
	<div class="ol-breadcrumb">
		<div class="container">
			<div class="row row-10">
				<div class="col-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a class="text-main text-ellipsis" href="{{URL::to('/')}}">
								Trang chủ
							</a>
						</li>
						<li class="breadcrumb-item active">
							<span class="text-ellipsis">Chọn CV</span>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-cv my-3">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-cv_wrapper">
					<div class="page-cv_title d-none">
						Danh sách mẫu CV xin việc tiếng Anh / Việt / Nhật chuẩn 2021
					</div>
					<div class="page-cv_desc mb-3 d-none">
						Các mẫu CV đuợc thiết kế theo chuẩn, theo các ngành nghề. Phù hợp với sinh viên và người đi làm.
					</div>
					<div class="page-cv_content">
						<div class="row row-col-8">
							@php
                  			$i = 0 ;
                			@endphp
							@foreach($all_cv as $key => $cv)
							@php
                    		$i++;
                  			@endphp
															<div class="col-md-6 col-lg-4 mb-3">
									<div class="card card-cv border-0 overflow-hidden rounded-lg">
										<div class="card-header position-relative bg-white p-0 border-bottom-0">
											<div class="image lazy" href="javascript:void(0)"
												 data-src="{{URL::to('public/upload/cv/'.$cv->maucv_img)}}">
												<span class="badge-new">
													Mới
												</span>
											</div>
											<div class="overlay">
												<a href="{{URL::to('mau-cv-'.$i)}}" data-code="cv1"
												   class="btn btn-sm btn-outline-light quickViewCV">
													<i class="fas fa-eye"></i>
													Xem
												</a>
												<?php
					                            $taikhoan_id = Session::get('taikhoan_id');
					                            if($taikhoan_id != NULL){
					                             // $name = Session::get('taikhoan_ten');
					                            ?>
												<form class="frmChangeTheme" action="{{URL::to('/save-cv/'.$cv->maucv_code.'/'.$taikhoan_id)}}" method="post">
													@csrf
													<button class="btn btn-sm btn-primary mt-2">
														<i class="fas fa-pencil"></i>
														Dùng mẫu này
													</button>
													<input type="hidden" name="code" value="{{$cv->maucv_code}}">
												</form>
												<?php
												}else{
												?>
												<a onclick="return confirm('Bạn phải đăng nhập ứng viên để sử dụng!')" href="{{URL::to('/dang-nhap-ung-vien')}}">
													<button class="btn btn-sm btn-primary mt-2">
														<i class="fas fa-pencil"></i>
														Dùng mẫu này
													</button>
													
												</a>
												<?php
												}
												?>
											</div>
										</div>
										<div class="card-body">
											<div class="card-title">
												<a href="javascript:void(0)" class="link-detail quickViewCV"
												   data-code="cv1">
													{{$cv->maucv_ten}}												</a>
											</div>
											<!-- <div class="card-category">
																									<a href="javascript: void(0)" title="TagCV"
													   class="category-item quickViewCV"
													   data-code="cv1">
														chuẩn													</a>
																										<a href="javascript: void(0)" title="TagCV"
													   class="category-item quickViewCV"
													   data-code="cv1">
														đơn giản													</a>
																								</div> -->
											<div class="card-text">
											</div>
										</div>
										
									</div>
								</div>
								@endforeach						
											</div>
										</div>
									</div>
								</div>
								
						</div>
					</div>
				</div>
			</div>
@endsection