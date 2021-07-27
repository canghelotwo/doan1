@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm TKB
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
                                <form role="form" action="{{ route('tkb.save')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã TKB</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="matkb" class="form-control" id="exampleInputEmail1"  placeholder="Mã TKB" required="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Học Kỳ</label>
                                    <input type="text" name="hocky" class="form-control" id="exampleInputEmail1" placeholder="Học kỳ"  required="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Môn Học</label>
                                    <input type="text" name="monhoc" class="form-control" id="exampleInputEmail1" placeholder="Môn Học"  required="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên GV</label>
                                    <input type="text" name="tengv" class="form-control" id="exampleInputEmail1" placeholder="Tên GV"  required="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thứ</label>
                                    <input type="text" name="thu" class="form-control" id="exampleInputEmail1" placeholder="Thứ"  required="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Từ Tiết</label>
                                    <input type="text" name="tutiet" class="form-control" id="exampleInputEmail1" placeholder="Từ Tiết"  required="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đến Tiết</label>
                                    <input type="text" name="dentiet" class="form-control" id="exampleInputEmail1" placeholder="Đến Tiết"  required="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SL</label>
                                    <input type="text" name="sl" class="form-control" id="exampleInputEmail1" placeholder="Số Lượng"  required="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Người Dùng</label>
                                    <select name="mand" class="form-control input-sm m-bot15">
                                        @foreach($mand as $mandc)
                                            <option value="{{$mandc->MaND}}">{{$mandc->TenND}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">PMT</label>
                                    <select name="mapmt" class="form-control input-sm m-bot15">
                                        @foreach($mapmt as $mapmtc)
                                            <option value="{{$mapmtc->MaPMT}}">{{$mapmtc->TenPMT}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="add_tkb" class="btn btn-info">Thêm TKB</button>
                                </form>
                            </div>

                        </div>

                    </section>

            </div>
@endsection
