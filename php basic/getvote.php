<?php 
	$vote=$_REQUEST['vote'];
	//get content of textfile
	$filename="ajax_pull.txt";
	$context=file($filename);
	$array=explode("/",$context[0]);
	$yes=$array[0];
	$no=$array[1];

	if($vote==0){
		$yes+=1;
	}else{
		$no+=1;
	}
	$insertvote=$yes."/".$no;
	$fp=fopen($filename,"w");
	fputs($fp,$insertvote);

?>