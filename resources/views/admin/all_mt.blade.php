@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê MT
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã MT</th>
            <th>Bàn Phím</th>
            <th>Chuột</th>
            <th>Màn Hình</th>
            <th>Thùng Máy</th>
            <th>TT</th>
            <th>Mã PMT</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_mt as  $mt)
          <tr>
            <td>{{ $mt->MaMT }}</td>
            <td>{{ $mt->BanPhim }}</td>
            <td>{{ $mt->Chuot }}</td>
            <td>{{ $mt->ManHinh }}</td>
            <td>{{ $mt->ThungMay }}</td>
            <td>{{ $mt->TinhTrang }}</td>
            <td>{{ $mt->MaPMT }}</td>
            <td>
              <a href="{{ route('mt.edit', $mt->MaMT)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa tin này ko?')" href="{{ route('mt.delete', $mt->MaMT)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div style="text-align: center;">{{ $all_mt->links() }}</div>
    </div>
  </div>
</div>
@endsection