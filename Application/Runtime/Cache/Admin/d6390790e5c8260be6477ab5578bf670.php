<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo (ACTION_NAME); ?> - 联程农业</title>
		<link rel="shortcut icon" href="/Public/liancheng/favicon.ico" />
		<link rel="bookmark"href="/Public/liancheng/favicon.ico" />
		<link rel="stylesheet" href="/Public/static/css/main.css" />
		<link rel="stylesheet" href="/Public/static/css/font.css" />
		
	</head>
	<body class="app sidebar-mini rtl">
			<header class="app-header">
				<a class="app-header__logo" href="/index.php/Admin">
		    	<img style="position: relative;top: -3px;height: 70%;" src=""/>
		    	<!--/Public/liancheng/img/diy_logo1.png-->
		    </a>
		    
		      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
		      <!-- Navbar Right Menu-->
		        <div style="color: #fff;line-height: 50px;" class="app-nav">
		 			  <a style="color: #fff;" href="#">退出登录</a>
		        </div>
		
		    </header>
		    
		    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		    
		    <!-- Sidebar menu-->
		    <aside class="app-sidebar">
		      <ul class="app-menu">
		        <li><a class="app-menu__item app_item" href="/index.php/Admin"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">首页</span></a></li>
		        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">基本配置</span><i class="treeview-indicator fa fa-angle-right"></i></a>
		          <ul class="treeview-menu">
		            <li><a class="treeview-item app_item" href="/index.php/Admin/Index/banner">轮播图片</a></li>
		            <li><a class="treeview-item app_item" href="/index.php/Admin/Index/video">公司视频</a></li>
		          </ul>
		        </li>
		        <li><a class="app-menu__item app_item" href="/index.php/Admin/Index/msg"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">留言板</span></a></li>
		        <li><a class="app-menu__item app_item" href="javascript:window.opener=null;window.open('','_self');window.close();"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">退出</span></a></li>
		      </ul>
		    </aside>
		  
	<main class="app-content">
    	
	<div class="app-title">
	    <div>
	      <h1>公司视频</h1>
	    </div>
    </div>
    
    <div class="col-lg-12 col-sm-12 col-xs-12" style="margin: 0 auto;">
    	<div class="tile-body row">
    		<div class="col-md-6">
		          <div class="tile">
		            <h3 class="tile-title">当前</h3>
		            <div class="tile-body">
		                <embed width="100%" src="<?php echo ($list['video_url']); ?>" allowFullScreen="true" quality="high" width="480" height="350" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"
		            </div>
		            <div class="tile-footer">
		              <div class="row">
		                <div class="col-md-12">
		                	<h5>请先将视频上传至爱奇艺或者优酷将分享链接粘贴在右边即可</h5> 
		              </div>
		            </div>
		          </div>
		        </div>
	    	</div>
	    </div>
	    	<div class="col-md-6">
		           <div class="tile">
		            <h3 class="tile-title">更改</h3>
		            <div class="tile-body">
		              <form id="rmBannerFrom" action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
		                <div class="form-group row">
		                  <label class="control-label col-md-3">视频url</label>
		                  <div class="col-md-8">
		                  	<input id="reid" class="form-control" type="text" placeholder="" name='id' hidden="" value="<?php echo ($list['id']); ?>">
		                    <input id="reurl" class="form-control" type="text" placeholder="复制视频地址" name='title'>
		                  </div>
		                </div>
		              </form>
		            </div>
		            <div class="tile-footer">
		              <div class="row">
		                <div class="col-md-8 col-md-offset-3">
		                  <button id="reVideo" class="btn btn-info" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>更改</button>
		              </div>
		            </div>
		          </div>
		        </div>
	    	</div>
	    	
    	
    </div>
    </main>
    

		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="/Public/static/js/main.js"></script>
		
	<script type="text/javascript">
	    $('#reVideo').click(function(){
	    	var urlstr = $('#reurl').val();
	    	var reid = $('#reid').val();
	    	
	    	$.post('/index.php/Admin/Video/PostModifyVideo',{url:urlstr,id:reid},function(res){
	    		var jsonObj = JSON.parse(res);
            	if(jsonObj.code==1001){
            		alert('成功');
            		window.location.reload();
            	}else{
            		alert('失败');
            	}
	    	})
	    })
	    	
	    	
	</script>

	</body>
</html>