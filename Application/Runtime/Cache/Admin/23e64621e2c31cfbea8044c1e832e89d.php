<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="/whedencms/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/whedencms/Public/Admin/css/admin.css">
    <script src="/whedencms/Public/Admin/js/jquery.js"></script>
    <script src="/whedencms/Public/Admin/js/pintuer.js"></script>
</head>
<body>

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加栏目</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
      <input type="hidden" name="id"  value="" />  
      <div class="form-group">
        <div class="label">
          <label>栏目名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value="" placeholder="请输入栏目名称" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div> 
      <div class="form-group">
        <div class="label">
          <label>栏目图片：</label>
        </div>
        <div class="field">
          <input type="file" name="file" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：1920*200</div>
        </div>
      </div>

        <div class="form-group">
            <div class="label">
                <label>栏目描述：</label>
            </div>
            <div class="field">
                <input name="content" class="input" placeholder="请输入栏目描述" style="height:100px; border:1px solid #ddd;">
                <div class="tips"></div>
            </div>
        </div>
    
     <div class="form-group">
        <div class="label">
          <label>显示：</label>
        </div>
        <div class="field">
          <div class="button-group radio">
          
          <label class="button active">
         	  <span class="icon icon-check"></span>             
              <input name="isshow" value="1" type="radio" checked="checked">是             
          </label>             
        
          <label class="button active"><span class="icon icon-times"></span>          	
              <input name="isshow" value="0"  type="radio" checked="checked">否
          </label>         
           </div>       
        </div>
     </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value="0"  data-validate="required:,number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
     <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
            <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
            <button class="button bg-main icon-check-square-o" onClick='javascript :history.back(-1);'> 返回</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
    function del(id){
        if(confirm("您确定要删除吗?")){

        }
    }
</script>

</body></html>