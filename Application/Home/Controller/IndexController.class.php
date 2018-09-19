<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	
	
	
    public function index(){
    	
    	$Banner = M('banner');
    	$list =$Banner
    	->order('banner_sort desc,banner_ctime')
    	->select();
    	
    	$this -> assign('list',$list);
    	
    	$this -> display();
    }
	
	
	
	
	
}