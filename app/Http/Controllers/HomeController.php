<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CategoryLands;
use App\Models\Lands;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $listbds = new CategoryLands();
        $detail_bds = new Lands();
        $news = new News();
        $banner = new Banner();
        $this->v['listbds'] = $listbds->loadListWithPager();
        $this->v['detail_bds'] = $detail_bds->loadListWithPager();
        $this->v['news'] = $news->loadListWithPager();
        $this->v['banner'] = $banner->loadListWithPager();
        $this->v['title'] = 'Trang Chủ';

        return view('Fontend.index', $this->v);
    }
    public function layout(){
        $listbds = new CategoryLands();
        $this->v['listbds'] = $listbds->loadListWithPager();
        return view('templates.layout', $this->v);
    }
    public function lands()
    {
        $listbds = new CategoryLands();
        $detail_bds = new Lands();
        $this->v['listbds'] = $listbds->loadListWithPager();
        //search loai category
        $category='';
        if (isset($_GET['category'])) {
        $category=$_GET['category'];};
        if($category>=0){
        $this->v['detail_bds'] = $detail_bds->loadListWithCategory();
        }else
        {
        $this->v['detail_bds'] = $detail_bds->loadListWithPager();   
        }
        $this->v['title'] = 'Bat Dong San';

        return view('Fontend.lands', $this->v);
    }
    public function news()
    {
        $listbds = new CategoryLands();
        $news = new News();
        $this->v['listbds'] = $listbds->loadListWithPager();
        //search loai category
        $category='';
        if (isset($_GET['category'])) {
            $category=$_GET['category'];};
        if($category>=0){
        $this->v['news'] = $news->loadListWithCategory();
        }else
        {
        $this->v['news'] = $news->loadListWithPager();   
        }
        $this->v['title'] = 'Tin Tuc';

        return view('Fontend.news', $this->v);
    }
}
