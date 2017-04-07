<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends CommonController {

        public function _initialize(){
                $newscata=array(
                    0 => '网站建设',
                    1 => 'APP开发',
                    2 => '微信开发',
                    3 => '后台搭建',
                );
            $this->assign('newscata',$newscata);
        }

        /*
         * 新闻列表
         */
        public function news(){
            //初始化数组
            $arr=array();
            $User = M('news_content'); // 实例化User对象
            $count      = $User->where($arr)->count();// 查询满足要求的总记录数
            $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(5)
            $show       = $Page->show();// 分页显示输出
            $list = $User->where($arr)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
            $this->display();
        }
        /*
         * 新闻添加页
         */
        public function add(){
            if(IS_POST){
                $images="";
                if($_FILES['file']['error']==0){
                    $images=$this->uploadOne($_FILES['file']);
                }
                $news=M('news');
                $news->create();
                $data['title']=$_POST['title'];
                $data['text']=$_POST['text'];
                $data['images']=$images;
                $data['time']=time();
                $data['jianjie']=$_POST['simple'];
                if($news->add()){
                    $this->redirect('News/news');die;
                }else{
                    $this->error();die;
                }
            }
            $this->display();
        }
}