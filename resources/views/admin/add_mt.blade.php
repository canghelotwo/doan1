@extends('admin_layout')
@section('admin_content')
<div class="row">
<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Thêm Máy Tính
            </header>
             <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
            <div class="panel-body">

                <div class="position-center">
                    <form role="form" action="{{ route('mt.save')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mã MT</label>
                        <input type="text" data-validation="length" name="mamt" class="form-control" id="exampleInputEmail1" placeholder="Mã MT" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bàn Phím</label>
                        <input type="text" name="banphim" class="form-control" id="exampleInputEmail1" placeholder="Bàn Phím" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chuột</label>
                        <input type="text" name="chuot" class="form-control" id="exampleInputEmail1" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Màn Hình</label>
                        <input type="text" name="manhinh" class="form-control" id="exampleInputEmail1" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Thùng Máy</label>
                        <input type="text" name="thungmay" class="form-control" id="exampleInputEmail1" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TT</label>
                        <input type="text" name="tt" class="form-control" id="exampleInputEmail1" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">PMT</label>
                        <select name="mapmt" class="form-control input-sm m-bot15">
                            @foreach($mapmt as $mapmtc)
                                <option value="{{$mapmtc->MaPMT}}">{{$mapmtc->TenPMT}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <button type="submit" name="add_mt" class="btn btn-info">Thêm mt</button>
                    </form>
                </div>

            </div>
        </section>

</div>
@endsection