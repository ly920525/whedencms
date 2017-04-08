<?php
namespace Admin\Controller;
use Think\Controller;
class ColumnController extends CommonController {
    //查询列表
    public function column(){               
        $gps = D('Gps');    // 实例化Service对象
        $lists = $gps->select();        //查询列表

        $this->assign('lists',$lists);  // 赋值数据集

        $this->display();   // 输出模板
    }
    
    //添加数据
    public function add(){              
        if(IS_POST){
            $gps = D('Gps');
            $gps->create();          // 创建service数据对象，默认通过表单提交的数据进行创建
            $gps->update_time = date('Y-m-d H:i:s');
            if($_FILES['file']['error']==0){
                $img_url=$this->uploadOne($_FILES['file']);
                $gps->img_url=$img_url;
            }else{
                $gps->img_url="";
            }

            $gps->add();            // 把数据对象添加到数据库
            $this->success('添加成功',U('Admin/Column/column'));die;
        }

        $this->display();
    }

    //修改数据
    public function save(){
        $gps = D('Gps');
        $data = $gps->where('id='.I('get.id'))->find();
        //dump($data);die;
        if(IS_POST){
            $gps->create();         // 创建service数据对象，默认通过表单提交的数据进行创建
            $gps->create_time = date('Y-m-d H:i:s');
            $img_url=$data['img_url'];
            if($_FILES['file']['error']==0){
                $img_url=$this->uploadOne($_FILES['file']);
            }
            $gps->img_url=$img_url;
            $gps->where('id='.I('get.id'))->save();     // 把数据对象添加到数据库
            $this->success('修改成功',U('Admin/Column/column'));die;
        }

        $this->assign('data',$data);
        $this->display();
    }
    
    //删除数据
    public function delete(){
        $gps = D('Gps');
        $id=I('get.id');
        $gps->where('id='.$id)->delete();       //删除单条id

        $this->redirect('Column/column');
    }

}