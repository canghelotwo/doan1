<?php

namespace App\Http\Controllers;

use App\deletephoto;
use Illuminate\Http\Request;
use DB;
use Session;
 use File; 
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

class TkbController extends Controller
{

    // public function AuthLogin(){
    //     $user_id = Session::get('user_id');
    //     if($user_id){
    //         return Redirect::to('dashboard');
    //     }else{
    //         return Redirect::to('admin')->send();
    //     }
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add_tkb()
    {
        $mand = DB::table('nguoidung')->orderby('MaND','asc')->get(); 
        $mapmt = DB::table('phongmay')->orderby('MaPMT','asc')->get(); 
        return view('admin.add_tkb')->with('mand',$mand)->with('mapmt',$mapmt);
    }

    public function save_tkb(Request $request){
       
        $data = array();

        $data['MaTKB'] = $request->matkb;
        $data['HocKy'] = $request->hocky;
        $data['MonHoc'] = $request->monhoc;
        $data['TenGV'] = $request->tengv;
        $data['Thu'] = $request->thu;
        $data['TuTiet'] = $request->tutiet;
        $data['DenTiet'] = $request->dentiet;
        $data['SoLuongSV'] = $request->sl;
        $data['MaND'] = $request->mand;
        $data['MaPMT'] = $request->mapmt;
        if($data){
            DB::table('thoikhoabieu')->insert($data);
            Session::put('message','Thêm thành công');
            return Redirect::to('add-tkb');
        }
        else{    
            Session::put('message','khong thanh cong');
            return Redirect::to('all-tkb'); 
        }
    }

    public function edit_tkb($tkb_id)
    {
        $edit_tkb = DB::table('thoikhoabieu')->where('MaTKB',$tkb_id)->get();
        $mand = DB::table('nguoidung')->orderby('MaND','asc')->get(); 
        $mapmt = DB::table('phongmay')->orderby('MaPMT','asc')->get(); 
        return view('admin.edit_tkb')->with('edit_tkb',$edit_tkb)->with('mand',$mand)->with('mapmt',$mapmt);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_tkb(Requests $request,$tkb_id){
       
        $data = array();
        $data['HocKy'] = $request->hocky;
        $data['MonHoc'] = $request->monhoc;
        $data['TenGV'] = $request->tengv;
        $data['Thu'] = $request->thu;
        $data['TuTiet'] = $request->tutiet;
        $data['DenTiet'] = $request->dentiet;
        $data['SoLuongSV'] = $request->sl;
        $data['MaND'] = $request->mand;
        $data['MaPMT'] = $request->mapmt;

        if($data){
                   
            DB::table('thoikhoabieu')->where('MaTKB',$tkb_id)->update($data);
            Session::put('message','Cập nhật thành công');
            return Redirect::to('all-tkb');
        }
            
        DB::table('thoikhoabieu')->where('MaTKB',$tkb_id)->update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('all-tkb');
    }

    public function all_tkb(){
        
        $all_tkb = DB::table('thoikhoabieu')->orderby('MaTKB','desc')->paginate(4);
        return view('admin.all_tkb')->with('all_tkb',$all_tkb);

    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_tkb($tkb_id){
     
        DB::table('thoikhoabieu')->where('MaTKB',$tkb_id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('all-tkb');
    }

    // public function show_tkb_home(){
    //     $all_tkb = DB::table('tbl_tkb')->orderby('tkb_id','asc')->get();
    //     return view('Element.header')->with('all_tkb',$all_tkb);
    // }

}
