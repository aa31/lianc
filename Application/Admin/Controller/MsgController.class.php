<?php
namespace Admin\Controller;
use Think\Controller;

class MsgController extends Controller {
	
    
    public function PostUpMsg(){
    	$phone = I('phone');
    	$name = I('name');
    	$content = I('content');
    	$data['msg_name'] = $name;
    	$data['msg_phone'] = $phone;
    	$data['msg_content'] = $content;
    	$data['msg_ctime'] = time();
    	$Msg = M('msg');
    	$res = $Msg
    	-> add($data);
    	if($res){
    		echo returnJson(1001,'ok',200);
    	}else{
    		echo returnJson(1002,'error',1002);
    	}
    }
    
//  删除msg
    public function PostRemoveMsg(){
    	$id = I('id');
    	$Msg = M('msg');
    	$res = $Msg->delete($id);
    	if($res){
    		echo returnJson(1001,'ok',200);
    	}else{
    		echo returnJson(1002,'error',1002);
    	}
    	
    }
	
}