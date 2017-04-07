<?php
namespace Admin\Controller;
use Think\Controller;
class ServiceController extends CommonController {
    public function lists(){
        $service = D('Service');
        $lists = $service->order('id desc')->select();        //查询列表

        $this->assign('lists',$lists);
        $this->display();
    }
    public function add(){
        if(IS_POST){
            $service = D('Service');
            $service->create(); // 创建service数据对象，默认通过表单提交的数据进行创建
            $service->create_time = date('Y-m-d H:i:s');
            if($_FILES['file']['error']==0){
                $img_url=$this->uploadOne($_FILES['file']);
            }
            $service->img_url=$img_url;
            $service->state=1;
            $service->add();// 把数据对象添加到数据库
            $this->success('添加成功',U('Admin/Service/lists'));die;
        }

        $this->display();
    }
    public function save(){
        $service = D('Service');
        $data = $service->where('id='.I('get.id'))->find();
        //dump($data);die;
        if(IS_POST){
            $service->create(); // 创建service数据对象，默认通过表单提交的数据进行创建
            $service->create_time = date('Y-m-d H:i:s');
            $img_url=$data['img_url'];
            if($_FILES['file']['error']==0){
                $img_url=$this->uploadOne($_FILES['file']);
            }
            $service->img_url=$img_url;
            $service->where('id='.I('get.id'))->save();// 把数据对象添加到数据库
            $this->success('修改成功',U('Admin/Service/lists'));die;
        }

        $this->assign('data',$data);
        $this->display();
    }

    public function delete(){
        $service = D('Service');
        $id=I('get.id');
        $service->where('id='.$id)->delete();

        $this->redirect('Service/lists');
    }


}