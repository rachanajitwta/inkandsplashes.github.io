<?php
	$link=mysqli_connect("localhost","root","","onlineartgallery");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
	
?>