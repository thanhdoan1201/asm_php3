<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isNull;

class BannerController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    //Banner
    public function banner()
    {
        $users = new Banner();
        $this->v['list'] = $users->loadListWithPager();
        $this->v['title'] = 'Danh Sách Banner';
        return view("admin/banner.index", $this->v);
    }
    public function banner_add(BannerRequest $request)
    {
        $this->v['title'] = 'Thêm người dùng';
        $method_route = 'route_BackEnd_Banner_Add';
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            $modelTest = new Banner();
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
        return view('admin/banner.add', $this->v);
    }
    public function banner_detail($id)
    {
        $this->v['title'] = 'Chi tiết banner';
        $tests = new Banner();
        $objItem = $tests->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('admin/banner.detail', $this->v);
    }
    public function banner_update($id, Request $request){
        $method_route = "route_BackEnd_Banner_Detail";
        $params=[];
        $params['cols']=$request->post();
        unset($params['cols']['_token']);
        $tests1 = new Banner();
        $objItem = $tests1->loadOne($id);
        $params['cols']['id']=$id;
        $res = $tests1->saveUpdate($params);
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
}
