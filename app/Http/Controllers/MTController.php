<?php

namespace App\Http\Controllers;

use App\deletephoto;
use Illuminate\Http\Request;
use DB;
use Session;
use File; 
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class mtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add_mt()
    {
        $mapmt = DB::table('phongmay')->orderby('MaPMT','asc')->get(); 
        return view('admin.add_mt')->with('mapmt',$mapmt);
    }

    public function save_mt(Request $request){
       
        
        $data = array();
        $data['MaMT'] = $request->mamt;
        $data['BanPhim'] = $request->banphim;
        $data['Chuot'] = $request->Chuot;
        $data['ManHinh'] = $request->manhinh;
        $data['ThungMay'] = $request->thungmay;
        $data['TinhTrang'] = $request->tt;
        $data['MaPMT'] = $request->mapmt;
        if($data){
            DB::table('maytinh')->insert($data);
            Session::put('message','Thêm thành công');
            return Redirect::to('add-mt');
        }
        else{    
            Session::put('message','khong thanh cong');
            return Redirect::to('all-mt'); 
        }
      
        
    }
    public function edit_mt($mt_id)
    {
        $mapmt = DB::table('phongmay')->orderby('MaPMT','asc')->get(); 
        $edit_mt = DB::table('maytinh')->where('MaMT',$mt_id)->get();
        return view('admin.edit_mt')->with('edit_mt',$edit_mt)->with('mapmt',$mapmt);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_mt(Request $request,$mt_id){
        
        $data = array();
       
        $data['BanPhim'] = $request->banphim;
        $data['Chuot'] = $request->Chuot;
        $data['ManHinh'] = $request->manhinh;
        $data['ThungMay'] = $request->thungmay;
        $data['TinhTrang'] = $request->tt;
        $data['MaPMT'] = $request->mapmt;

        if($data){
                   
            DB::table('maytinh')->where('MaMT',$mt_id)->update($data);
            Session::put('message','Cập nhật thành công');
            return Redirect::to('all-mt');
        }
            
        DB::table('maytinh')->where('MaMT',$mt_id)->update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('all-mt');
    }

    public function all_mt(){
        
        $all_mt = DB::table('maytinh')->orderby('MaMT','desc')->paginate(4);
        return view('admin.all_mt')->with('all_mt',$all_mt);

    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_mt($mt_id){
        DB::table('maytinh')->where('MaMT',$mt_id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('all-mt');
    }
}
