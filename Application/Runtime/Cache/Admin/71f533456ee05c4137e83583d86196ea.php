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
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <a class="button border-yellow" href="<?php echo U('Column/add');?>"><span class="icon-plus-square-o"></span> 添加栏目</a>
  </div> 
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>     
      <th>栏目名称</th>
      <th>创建时间</th>
        <th>描述</th>
      <th>排序</th>
      <th width="250">操作</th>
    </tr>

      <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($vo["id"]); ?></td>
      <td><?php echo ($vo["name"]); ?></td>
      <td><?php echo ($vo["update_time"]); ?></td>
      <td><?php echo ($vo["content"]); ?></td>
      <td>1</td>
      <td>
      <div class="button-group">
      <a type="button" class="button border-main" href="<?php echo U('Column/save','id='.$vo['id']);?>"><span class="icon-edit"></span>修改</a>
       <a class="button border-red" href="<?php echo U('Column/delete','id='.$vo['id']);?>" onclick="return del(17)"><span class="icon-trash-o"></span> 删除</a>
      </div>
      </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    
  </table>
</div>
<script>
function del(id){
	if(confirm("您确定要删除吗?")){
		
	}
}
</script>

</body></html>