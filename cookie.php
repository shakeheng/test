<?php
	
	//设置
	
	/*$result = setcookie('is_login','yes'); 临时cookie
	var_dump($result);*/

	$result = setcookie('login_time','after-3600s',time()-1); 
	var_dump($result);
	//var_dump($_COOKIE)
?>