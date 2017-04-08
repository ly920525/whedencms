<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController {

    public function message(){
        //初始化数组
        $arr=array();
        $m = M('message'); // 实例化User对象
        $count      = $m->where($arr)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(5)
        $show       = $Page->show();// 分页显示输出
        $list = $m->where($arr)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function delete(){
        $id=$_POST["id[]"];
        print_r($id);
        $m = M('message');
        $map['id']=$id;
        $m->where($map)->delete();
        return show(1,$id."删除成功");
    }
}