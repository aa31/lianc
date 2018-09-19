<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>留言板 - 联程农业</title>
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
	      <h1>留言板</h1>
	    </div>
    </div>
    
    <div class="col-lg-12 col-sm-12 col-xs-12" style="margin: 0 auto;">
    	<div class="tile-body row">
    		<div class="col-md-12">
		          <div class="tile">
		            <h3 class="tile-title">列表</h3>
		            <div class="tile-body">
		            	
		            	<table class="table">
			              <thead>
			                <tr>
			                  <th>#</th>
			                  <th>姓名</th>
			                  <th>号码</th>
			                  <th>内容</th>
			                  <th>时间</th>
			                  <th>操作</th>
			                </tr>
			              </thead>
			              <tbody>
			              	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
			              		<td><?php echo ($key+1); ?></td>
				                  <td><?php echo ($list["msg_name"]); ?></td>
				                  <td><?php echo ($list["msg_content"]); ?></td>
				                  <td><?php echo ($list["msg_phone"]); ?></td>
				                  <td><?php echo (date('Y-m-d H:i:s',$list["msg_ctime"])); ?></td>
				                  <td><button data-id='<?php echo ($list["id"]); ?>' class="btn btn-danger btn-sm rmMsg">删除</button></td>
				                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			              </tbody>
			            </table>
		            	
		            </div>
		            <div class="tile-footer">
		              <div class="row">
		                <div class="col-md-12"></div>
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
	    $('.rmMsg').click(function(){
	    	var id = $(this).attr('data-id');
	    	var _this = $(this);
	    	$.post('/index.php/Admin/Msg/PostRemoveMsg',{id:id},function(res){
	    		var jsonObj = JSON.parse(res);
            	if(jsonObj.code==1001){
            		alert('成功');
            		_this.parents('tr').css('display','none');
//          		$(this).parent('tr').css('color','red');
            	}else{
            		alert('失败');
            	}
	    	})
	    })
	    	
	    	
	</script>

	</body>
</html>