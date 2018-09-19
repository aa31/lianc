<?php
namespace Admin\Controller;
use Think\Controller;

use \Qiniu\Auth;
use \Qiniu\Storage\UploadManager;
class BannerController extends Controller {
	
//  上传banner
    public function PostUpload(){
    	$setting=C('UPLOAD_SITEIMG_QINIU');
        $Upload = new \Think\Upload($setting);
        $info = $Upload->upload($_FILES);
    	$url = $info['url']['url'];
    	$sort = I('sort');
    	$ctime = time();
    	$title = I('title');
    	
    	$data['banner_title'] = $title;
    	$data['banner_url'] = $url;
    	$data['banner_sort'] = $sort;
    	$data['banner_ctime'] = $ctime;
    	
    	$Banner = M('banner');
    	$res = $Banner
    	->add($data);
    	
    	if($res){
    		echo returnJson(1001,'ok',200);
    	}else{
    		echo returnJson(1002,'error',1002);
    	}
    }
    
//  删除banner
    public function PostRemoveBanner(){
    	$id = I('id');
    	$Banner = M('banner');
    	$res = $Banner->delete($id);
    	if($res){
    		echo returnJson(1001,'ok',200);
    	}else{
    		echo returnJson(1002,'error',1002);
    	}
    	
    }
    
    
     public function PostUploadImg(){
        $setting=C('UPLOAD_SITEIMG_QINIU');
        $Upload = new \Think\Upload($setting);
        $info = $Upload->upload($_FILES);
        if(!$info) {// 上传错误提示错误信息
        	echo returnJson(1002,'error',null);
    	}else{
    		echo returnJson(1001,'ok',$info['url']['url']);
    	}
    }
	
	
}