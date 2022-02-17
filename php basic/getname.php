<?php
	$arr[]='viswa';$arr[]='vicky';$arr[]='jegan';$arr[]='jp';$arr[]='mari';$arr[]='munish';$arr[]='selva';

	//get q from the url
	$q=$_REQUEST['q'];
	$hint="";

	if($q!==""){
		$q=strtolower($q);
		$len=strlen($q);
		foreach($arr as $name){
			if(stristr($q, substr($name,0,$len))){
				if($hint==""){
					$hint=$name;
				}
				else{
					$hint.=",$name";
				}
			}
		}
	}

	//output
	echo $hint===""?"nosuggestion":$hint;
?>