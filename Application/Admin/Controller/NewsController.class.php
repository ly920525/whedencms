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
            $news = M('news_content'); // 实例化User对象
            $count      = $news->where($arr)->count();// 查询满足要求的总记录数
            $Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(5)
            $show       = $Page->show();// 分页显示输出
            $list = $news->where($arr)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
            $this->display();
            /*
             * 全选删除
             */
            if(isset($_POST['id'])){
                $idd=implode(",",$_POST['id']);
                $listt = $news->delete($idd);
                if($listt){
                    $this->success('删除成功',U('Admin/news/news'));die;
                }else{
                    $this->error('删除失败');
                }
            }
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
                $news=M('news_content');
                $news->create();
                $data['title']=$_POST['title'];
                $data['text']=strip_tags($_POST['text']);
                $data['img_url']=$images;
                $data['time']=time();
                $data['jianjie']=$_POST['simple'];
                $data['pid']=$_POST['pid'];
                $data['news_url']=$_POST['newsurl'];
                $list=$news->data($data)->add();
                if($list){
                    $this->redirect('News/news');die;
                }else{
                    $this->error();die;
                }
            }
            $this->display();
        }

        public function edit(){
            $id = I('get.id');          //获取GET id
            $news = M('news_content');
            $list=$news->where('id='.$id)->find();
            $this->assign('list',$list);
            if(IS_POST){
                $images=$list['img_url'];
                if($_FILES['file']['error']==0){
                    $images=$this->uploadOne($_FILES['file']);
                }
            $news->create();
            $data['title']=$_POST['title'];
            $data['text']=strip_tags($_POST['text']);
            $data['img_url']=$images;
            $data['jianjie']=$_POST['simple'];
            $data['pid']=$_POST['pid'];
            $data['news_url']=$_POST['newsurl'];
            $row=$news->where('id='.$id)->save($data);
            if($row){
                $this->redirect('news/news');
            }else{
                $this->error();
            }
            }
            $this->display();
        }

        public function del(){
            $news=M('news_content');
            $row=$news->where('id='.I('get.id'))->delete();
            if($row){
                $this->success('删除成功',U('/Admin/news/news'));die;
            }else{
                $this->error('删除失败');
            }

        }
}