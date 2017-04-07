<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

	public function uploadOne($file){ 
		$upload = new \Think\Upload();// 实例化上传类   
		$upload->maxSize   = 3145728 ;// 设置附件上传大小  
		$upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
		$upload->savePath  = ''; // 设置附件上传目录   
		// 上传单个文件   
		$info   =   $upload->uploadOne($file);  
		 if(!$info)
			{// 上传错误提示错误信息     
				$this->error($upload->getError());  
		    }else{// 上传成功 获取上传文件信息    
				return $info['savepath'].$info['savename']; 
			  }
	}
	
	
}