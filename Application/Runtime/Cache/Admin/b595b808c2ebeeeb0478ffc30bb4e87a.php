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
		 			  <a style="color: #fff;" href="">退出登录</a>
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
		        <li><a class="app-menu__item app_item" href=""><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">退出</span></a></li>
		      </ul>
		    </aside>
		  
	<main class="app-content">
    	
	<div class="app-title">
	    <div>
	      <h1>Admin</h1>
	    </div>
    </div>
    
    <div class="tile col-lg-10 col-sm-12 col-xs-12" style="margin: 0 auto;">
    	<div class="tile-body row">
    		<div class="col-md-12">
    			<div>
    				<!--<label class="control-label a_label" style="float: left;">admin：</label>-->
    			</div>
    				<br />
              	<!--<div>
              		<ul>
              			<li>1</li>
              			<li>1</li>
              			<li>1</li>
              			<li>1</li>
              		</ul>
    			</div>-->
    		</div>
    		
    	</div>
    </div>
    </main>

		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="/Public/static/js/main.js"></script>
		
			<script type="text/javascript">
				$().ready(function(){
		    		var path = "<?php echo (ACTION_NAME); ?>";
		//  		path = path.substr(1,path.length);
			    	$('a.app_item').each(function(){
			    		if($(this).attr('href')==path){
			    			$('a.app_item').removeClass('active');
			    			$(this).addClass('active');
			    			$('li.treeview').removeClass('is-expanded');
			    			$(this).parents('li.treeview').addClass('is-expanded');
			    			console.log('re');
			    		}
			    	})
		    	})
			</script>
		
	</body>
</html>