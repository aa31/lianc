<?php
namespace Admin\Controller;
use Think\Controller;

class VideoController extends Controller {
	
    
    public function PostModifyVideo(){
    	$url = I('url');
    	$id = I('id');
    	$data['video_url'] = $url;
    	$data['video_ctime'] = time();
    	$Video = M('video');
    	$res = $Video
    	->where($id)
    	->save($data);
    	if($res){
    		echo returnJson(1001,'ok',200);
    	}else{
    		echo returnJson(1002,'error',1002);
    	}
    }
    
	
	
}