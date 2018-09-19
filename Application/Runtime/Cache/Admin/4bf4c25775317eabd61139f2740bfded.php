<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>轮播图管理 - 联程农业</title>
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
	      <h1>轮播图管理</h1>
	    </div>
    </div>
    
    <div class="col-lg-12 col-sm-12 col-xs-12" style="margin: 0 auto;">
    	<div class="tile-body row">
    		
    		<div class="col-md-12">
          		<div class="tile">
          			<h3 class="tile-title">管理</h3>
          			<table class="table">
		              <thead>
		                <tr>
		                  <th>编号#</th>
		                  <th>标题</th>
		                  <th>图片</th>
		                  <th>顺序</th>
		                  <th>上传时间</th>
		                </tr>
		              </thead>
		              <tbody>
		              	
		              	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
		                  <td><?php echo ($data["id"]); ?></td>
		                  <td><?php echo ($data["banner_title"]); ?></td>
		                  <td> <img height="50px" src="<?php echo ($data["banner_url"]); ?>"/> </td>
		                  <td><?php echo ($data["banner_sort"]); ?></td>
		                  <td>
		                  <?php echo (date('Y-m-d H:i:s',$data["banner_ctime"])); ?>
		                  </td>
		                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						
		              </tbody>
		            </table>
          		</div>
    		</div>
    		
    		
    		<div class="col-md-6">
	          <div class="tile">
	            <h3 class="tile-title">上传</h3>
	            <div class="tile-body">
	              <form id="upBannerFrom" action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
	                <div class="form-group row">
	                  <label class="control-label col-md-3">标题/描述</label>
	                  <div class="col-md-8">
	                    <input class="form-control" type="text" placeholder="随便写 用于区分" name='title'>
	                  </div>
	                </div>
	                <div class="form-group row">
	                  <label class="control-label col-md-3">顺序</label>
	                  <div class="col-md-8">
	                    <input class="form-control col-md-8" type="text" placeholder="1优先级最高" name='sort'>
	                  </div>
	                </div>
	                <div class="form-group row">
	                  <label class="control-label col-md-3">选择图片（1920*600）</label>
	                  <div class="col-md-8">
	                    <input name="url" class="form-control" type="file">
	                  </div>
	                </div>
	              </form>
	            </div>
	            <div class="tile-footer">
	              <div class="row">
	                <div class="col-md-8 col-md-offset-3">
	                  <button id="upBanner" class="btn btn-info" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>上传</button>
	              </div>
	            </div>
	          </div>
	        </div>
    	</div>
    	
    	<div class="col-md-6">
	          <div class="tile">
	            <h3 class="tile-title">编号</h3>
	            <div class="tile-body">
	              <form id="rmBannerFrom" action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
	                <div class="form-group row">
	                  <label class="control-label col-md-3">编号</label>
	                  <div class="col-md-8">
	                    <input id="rmid" class="form-control" type="text" placeholder="填写编号" name='title'>
	                  </div>
	                </div>
	              </form>
	            </div>
	            <div class="tile-footer">
	              <div class="row">
	                <div class="col-md-8 col-md-offset-3">
	                  <button id="rmBanner" class="btn btn-danger" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>删除</button>
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
		 $('#upBanner').click(function(){
		 	var form = document.getElementById('upBannerFrom');  
		 	var data = new FormData(form);
		 	$.ajax( {
		            type : 'POST',
		            url : '/index.php/Admin/Banner/PostUpload',
		            data : data,
		            contentType : false,// 告诉jQuery不要去设置Content-Type请求头
	       			processData: false,// 告诉jQuery不要去处理发送的数据
		            success : function(res) {
		            	var jsonObj = JSON.parse(res);
		            	if(jsonObj.code==1001){
		            		alert('成功');
		            		window.location.reload();
		            	}else{
		            		alert('失败');
		            	}
		            }
	        	});
	    	});
	    	
	    $('#rmBanner').click(function(){
	    	var id = $('#rmid').val();
	    	$.post('/index.php/Admin/Banner/PostRemoveBanner',{id:id},function(res){
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