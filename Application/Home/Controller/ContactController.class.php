<?php
namespace Home\Controller;

use Think\Controller;

class ContactController extends Controller
{

    public function baidumap()
    {
        $this->display();
    }

    public function contact()
    {
        $this->display();
    }

    public function message()
    {
        $name = $_POST["name"];
        $phone = $_POST['phone'];
        $content = $_POST['content'];
        if (!trim($name) || !trim($phone) || !trim($content)) {
            return show(0, '不能为空');
        }
        $data['name'] = $name;
        $data['phone'] = $phone;
        $data['content'] = $content;
        $data['time'] = date('Y-m-d H:i:s');
        $row = M('message')->add($data);
        if ($row) {
            return show(1, '留言成功,维登将最快与你联系！');
        } else {
            return show(0, '留言失败,请检查网络！');
        }


    }
}