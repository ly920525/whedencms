<?php
namespace Home\Controller;

use Think\Controller;

class NewsController extends Controller
{
        /*
          * 新闻列表
          */
        public function news(){
        //初始化数组
        $arr=array();
        $User = M('news_content'); // 实例化User对象
        $count      = $User->where($arr)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(5)
        $show       = $Page->show();// 分页显示输出
        $list = $User->where($arr)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('show',$show);// 赋值分页输出
        $this->display();
    }

    public function newsingle()
    {
        $this->display();
    }
    public function app()
    {
        $this->display();
    }

    public function back()
    {
        $this->display();
    }
    public function weixin()
    {
        $this->display();
    }
}