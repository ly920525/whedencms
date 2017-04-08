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

<head>
    <title>修改服务内容</title>
    <style>
        .imgs {margin-left:8%;}
    </style>
</head>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改服务内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($data["title"]); ?>" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
            <div class="imgs"><img src="/whedencms/Uploads/<?php echo ($data["img_url"]); ?>" width="100" height="100" /></div>
          <input type="file" name="file" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;cursor:pointer;">
          <div class="tipss">图片尺寸：500*500</div><br/>

        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片描述：</label>
        </div>
        <div class="field">
          <textarea name="jianjie" class="input" style="height:100px; border:1px solid #ddd;"><?php echo ($data["jianjie"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="content" class="input" style="height:450px; border:1px solid #ddd;"><?php echo ($data["content"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 修改</button>
          <button class="button bg-main icon-check-square-o" onClick='javascript :history.back(-1);'> 返回</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>