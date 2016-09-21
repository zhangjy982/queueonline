<?php
	define("TOKEN","zhang");
	$wechatObj = new Test;
	if (isset($_GET['echost'])){
		$wechatObj->valid;
	}
	else{
		$wechatObj->responseMsg();
	}