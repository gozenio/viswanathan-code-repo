<?php 
	$myfile=fopen('test.txt','r') or die('unable to open file!');
	//--- to read the file.-----
	//echo fread($myfile,filesize('test.txt'));
	//$txt='viswanatha R';
	//---to write the file or create a file----
	//echo fwrite($myfile,$txt);
	//echo $myfile;
	//echo '<br>';

	while (!feof($myfile)) {
		echo fgets($myfile).'<br>';
	}
	//echo filesize('test.txt');
	fclose($myfile);
 ?> 
<!--  <?php
//$myfile = fopen("test.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("test.txt"));
//echo filesize('test.txt');
//fclose($myfile);
?> -->