<<?php 
	inculde 'php.ini';
	$dir='upload/';
	$file=$dir.basename($_FILE['fileupload']['name']);
	$upload=1;//1-file use not used
	$imagetype=strtolower(pathinfo($file,PATHINFO_EXTENSION));// FILE TYPE

	if(isset$_post['submit']){
		$check=getimagesize($_FILE['tmp_name']);
		if($(cheek!==false)){
			echo 'file is an image- '.$check['mine'];
			$upload=1;
		}else{
			echo 'file is not an image';
			$upload=0;
		}
	}
	
 ?>