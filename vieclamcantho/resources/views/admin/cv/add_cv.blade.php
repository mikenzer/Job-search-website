@extends('admin_layout')
@section('admin_content')
<div class="row">
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm Mẫu CV
        </header>
        <div class="panel-body">
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert1">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
            <div class="position-center">
                <form role="form" action="{{URL::to('/insert-cv')}}" method="post" enctype="multipart/form-data">
                    @csrf              
                    <div class="form-group">
                        <label for="exampleInputEmail1" required="">Tên mẫu cv</label>
                        <input type="text" name="cv_name" class="form-control" id="exampleInputEmail1" placeholder="Tên mẫu CV" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh</label>
                        <input type="file" name="cv_img" class="form-control" id="exampleInputEmail1" enctype="multipart/form-data" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label>
                        <textarea style="resize: none" row="5" class="form-control" name="cv_des" id="exampleInputPassword1" placeholder="Mô tả mẫu cv" required></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <select name="cv_status" class="form-control input-sm m-bot15">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiển thị</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" required="">Mã code</label>
                        <input type="text" name="cv_code" class="form-control" id="exampleInputEmail1" placeholder="code cv" required>
                    </div>
                    <button type="submit" name="add_cv" class="btn btn-info">Thêm mẫu CV</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection