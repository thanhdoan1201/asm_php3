<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandsRequest;
use App\Http\Requests\CategorylandsRequest;
use App\Models\CategoryLands;
use App\Models\Lands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LandsController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    //Lands
    public function lands(){
        $details_bds = new Lands();
        $this->v['list'] = $details_bds->loadListWithPager();
        $lbds = new CategoryLands();
        $this->v['list_lbds'] = $lbds->loadListWithPager();
        $this->v['title']='Danh Sách BĐS';
        return view('admin/lands.index',$this->v);
    }
    public function lands_add(LandsRequest $request){
        $this->v['title'] = 'Thêm BĐS';
        $lbds = new CategoryLands();
        $this->v['list_lbds'] = $lbds->loadListWithPager();
        $method_route = 'route_BackEnd_Lands_Add';
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            $modelTest = new Lands();
            $res = $modelTest->saveNew($params);
            if ($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm mới thành công');
            } else {
                Session::flash('error', 'Lỗi thêm mới');
                return redirect()->route($method_route);
            }
        }
        return view('admin/Lands.add', $this->v);
    }
    public function lands_details(){
        
    }
    public function lands_update(){
        
    }
    public function lands_remove(){
        
    }
    //Category_Lands
    public function categorylands(){
        $lbds = new CategoryLands();
        $this->v['list'] = $lbds->loadListWithPager();
        $this->v['title']='Danh Sách Loại BĐS';
        return view('admin/category_lands.index',$this->v);
    }
    public function categorylands_add(CategorylandsRequest $request){
        $this->v['title'] = 'Thêm Loại BĐS';
        $method_route = 'route_BackEnd_Categorylands_Add';
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            $modelTest = new CategoryLands();
            $res = $modelTest->saveNew($params);
            if ($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm mới thành công');
            } else {
                Session::flash('error', 'Lỗi thêm mới');
                return redirect()->route($method_route);
            }
        }
        return view('admin/category_lands.add', $this->v);
    }
    public function categorylands_detail($id){
        $this->v['title'] = 'Chi tiết người dùng';
        $category = new CategoryLands();
        $objItem = $category->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('admin/category_lands.detail', $this->v);
    }
    public function categorylands_update($id, Request $request){
        $method_route="route_BackEnd_Categorylands_Detail";
        $params=[];
        $params['cols']=$request->post();
        unset($params['cols']['_token']);
        $category = new CategoryLands();
        $objItem = $category->loadOne($id);
        $params['cols']['id']=$id;
        $res = $category->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        }elseif($res ==1){
            Session::flash('success','Cập nhật bản ghi '.$objItem->id.' thành công !');
            return redirect()->route($method_route,['id'=>$id]);
        }else{
            Session::flash('error','Lỗi cập nhật bản ghi'.$objItem->id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }
    public function categorylands_remove(){
        
    }
}
