<?php
	
	
	function returnJson($code,$msg,$result){
		$arr['code'] = $code;
		$arr['msg'] = $code;
		$arr['result'] = $result;
		return json_encode($arr);
	}
	
?>