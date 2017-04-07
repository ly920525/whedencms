<?php
/**
 * 公共方法
 * User: liyong
 * Date: 2017/3/20
 * Time: 16:44
 */
 function show($code,$message,$data=array()){
     $result=array(
         'code'=>$code,
         'message'=>$message,
         'data'=>$data,
     );
         exit(json_encode($result));
 }


