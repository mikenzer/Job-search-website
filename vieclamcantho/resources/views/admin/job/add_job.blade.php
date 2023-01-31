@extends('admin_layout')
@section('admin_content')
<div class="row">
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm ngành nghề
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
                <form role="form" action="{{URL::to('/insert-job')}}" method="post" enctype="multipart/form-data">
                    @csrf              
                    <div class="form-group">
                        <label for="exampleInputEmail1" required="">Tên ngành nghề</label>
                        <input type="text" name="job_name" class="form-control" id="exampleInputEmail1" placeholder="Tên mẫu CV" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <select name="job_status" class="form-control input-sm m-bot15">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiển thị</option>
                        </select>
                    </div>
                    
                    <button type="submit" name="add_cv" class="btn btn-info">Thêm ngành nghề</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection