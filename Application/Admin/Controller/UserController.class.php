<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	
    public function PostLogin(){
    	$account = I('account');
    	$password = I('password');
    	
    	$where['user_account'] = $account;
    	$where['user_password'] = md5($password);
    	
    	$User = M('user');
    	$res = $User
    	->where($where)
    	-> find()
    	
    	if($res){
    		session('islogin',1);
    		echo '1'
    	}else{
    		echo '0'
    	}
    }
	
	
	
}