<?php
namespace Admin\Controller;
use Think\Controller;
class BasicController extends CommonController {
    public function web(){
        $this->display();
    }
    public function lunbo(){
        $this->display();
    }
    public function menu(){
        $this->display();
    }
}