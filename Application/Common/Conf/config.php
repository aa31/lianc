<?php
return array(
	//'配置项'=>'配置值'
	
	
	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'lianc', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PARAMS' =>  array(), // 数据库连接参数
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	
	
	
	'UPLOAD_SITEIMG_QINIU' => array(
	    'maxSize' => 5 * 1024 * 1024,//文件大小
	    'rootPath' => './',
	    'saveName' => array('uniqid', ''),
	    'driver' => 'Qiniu',
	    'driverConfig' => array(
	    	'accessKey' => 'gCWSVoV9Gv0KLXbSeDfc9c_Vke-0ZqKOfx8sYMw_',
	        'secretKey' => '0hhPq04n0TC4eAR2oGiPGLbb_nsWyZJnIrX0UVkX',
	        'domain' => 'cdn.sin028.com',
	        'bucket' => 'sin028')
    )

	
);