<?php
namespace Admin\Controller;
use Think\Controller;
class ServiceController extends CommonController {
    //查询数据
    public function lists(){
        $service = D('Service');    // 实例化Service对象
        $lists = $service->order('id desc')->select();        //查询列表

        if(isset($_POST['id'])){
            $id=$_POST['id'];
            foreach($id as $key=>$val){
                $dat=$service->where('id='.$val)->delete();     //全部删除或选择id删除
                //var_dump($dat);die;
            }
            $this->redirect('Service/lists');
        }

        $count      = $service->where('status=1')->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(2)
        $show       = $Page->show();// 分页显示输出
        $lists = $service->where('status=1')->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select(); // 进行分页数据查询 注意limit方法的参数要使用Page类的属性

        $this->assign('lists',$lists);  // 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();   // 输出模板
    }

    //添加数据
    public function add(){
        if(IS_POST){
            $service = D('Service');
            $service->create();          // 创建service数据对象，默认通过表单提交的数据进行创建
            $service->create_time = date('Y-m-d H:i:s');
            if($_FILES['file']['error']==0){
                $img_url=$this->uploadOne($_FILES['file']);
                $service->img_url=$img_url;
            }else{
                $service->img_url="";
            }

            $service->status=1;
            $service->add();            // 把数据对象添加到数据库
            $this->success('添加成功',U('Admin/Service/lists'));
        }

        $this->display();
    }

    //修改数据
    public function save(){
        $service = D('Service');
        $data = $service->where('id='.I('get.id'))->find();
        //dump($data);die;
        if(IS_POST){
            $service->create();         // 创建service数据对象，默认通过表单提交的数据进行创建
            $service->create_time = date('Y-m-d H:i:s');
            $img_url=$data['img_url'];
            if($_FILES['file']['error']==0){
                $img_url=$this->uploadOne($_FILES['file']);
            }
            $service->img_url=$img_url;
            $service->where('id='.I('get.id'))->save();     // 把数据对象添加到数据库
            $this->success('修改成功',U('Admin/Service/lists'));die;
        }

        $this->assign('data',$data);
        $this->display();
    }

   //删除数据
    public function delete(){
        $service = D('Service');
        $id=I('get.id');
        $service->where('id='.$id)->delete();       //删除单条id

        $this->redirect('Service/lists');
    }


}