<?php
namespace Admin\Controller;
use Think\Controller;
class ServiceController extends Controller {
    public function lists(){

        $this->display();
    }
    public function add(){
        if(IS_POST){
            $service = D('Service');
            $service->create(); // 创建service数据对象，默认通过表单提交的数据进行创建
            $service->create_time = date('Y-m-d H:i:s');

            $service->add();// 把数据对象添加到数据库
            $this->success('添加完成','Service/lists');
        }

        $this->display();
    }


}