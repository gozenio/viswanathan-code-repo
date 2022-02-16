<?php 
	 function divide($diviend,$divisor){
	 	if($divisor==0){
	 		throw new Exception('divisor on zero');
	 	}
	 	else{
	 		return $diviend/$divisor;
	 	}
	 }
	try{
		echo divide(5,0);
	}
	catch(Exception $n){
		echo $n->getline().'lines,'.$n->getcode().',',$n->getmessage().'<br>';
	}
	finally{
		echo 'process complete';
	}
	// echo divide(5,0);

	//---- try/catch -----
?>