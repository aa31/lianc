<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
	
    public function index(){
    	$this -> display();
    }
	
	
	public function video(){
		$Video = M('video');
    	$list =$Video
    	->find();
		$this -> assign('list',$list);
    	$this -> display();
    }
    
    
    public function banner(){
    	$Banner = M('banner');
    	$list =$Banner
    	->order('banner_sort desc,banner_ctime')
    	->select();
    	
    	$this -> assign('list',$list);
    	$this -> display();
    	
    }
    
    
    public function msg(){
    	$Msg = M('msg');
    	$list =$Msg
    	->select();
    	
    	$this -> assign('list',$list);
    	$this -> display();
    }
	
	
}