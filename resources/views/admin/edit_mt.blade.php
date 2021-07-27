@extends('admin_layout')
@section('admin_content')
<div class="row">
<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Cập nhật MT
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
                    @foreach($edit_mt as $key => $mt)
                    <form role="form" action="{{ route('mt.update', $mt->MaMT)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bàn Phím</label>
                        <input type="text" name="banphim" class="form-control" id="exampleInputEmail1" value="{{$mt->BanPhim}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chuột</label>
                        <input type="text" name="chuot" class="form-control" id="exampleInputEmail1" value="{{$mt->Chuot}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Màn Hình</label>
                        <input type="text" name="manhinh" class="form-control" id="exampleInputEmail1" value="{{$mt->ManHinh}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Thùng Máy</label>
                        <input type="text" name="thungmay" class="form-control" id="exampleInputEmail1" value="{{$mt->ThungMay}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TT</label>
                        <input type="text" name="tt" class="form-control" id="exampleInputEmail1" value="{{$mt->TinhTrang}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">PMT</label>
                        <select name="category_id" class="form-control input-sm m-bot15">
                            @foreach($mapmt as  $mapmtc)
                                @if($mapmtc->MaPMT==$mt->MaPMT)
                                <option selected value="{{$mapmtc->MaPMT}}">{{$mapmtc->TenPMT}}</option>
                                @else
                                <option value="{{$mapmtc->MaPMT}}">{{$mapmtc->TenPMT}}</option>
                                @endif
                            @endforeach
                                
                        </select>
                    </div>
                    <button type="submit" name="add_mt" class="btn btn-info">Cập nhật tin tức</button>
                    </form>
                    @endforeach
                </div>

            </div>
        </section>

</div>
@endsection