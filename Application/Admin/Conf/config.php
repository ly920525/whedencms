<?php
return array(
    //'配置项'=>'配置值'
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'wd_cms',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'wd_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号


    //后台配置
    //'配置项'=>'配置值'
    'TMPL_PARSE_STRING' => array(
        //替换规则
        '__JS__' => '/whedencms/Public/Admin/js', // 增加新的JS类库路径替换规则

        '__CSS__' => '/whedencms/Public/Admin/css', // 增加新的css类库路径替换规则

        '__DEMO__' => '/whedencms/Public/Admin/demo', // 增加新的demo类库路径替换规则

        '__IMG__' => '/whedencms/Public/Admin/images', // 增加新的images类库路径替换规则

        '__UM__' => '/whedencms/Public/Admin/umeditor', // 增加新的编辑器类库路径替换规则

        '__IMAGE__' => '/whedencms/Uploads', // 增加新的编辑器类库路径替换规则
    ),

    );


