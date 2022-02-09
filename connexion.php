<?php
	$conex=new mysqli("localhost","root","","centerbts");
	if ($conex->connect_error) {
            die("Connection failed: " . $conex->connect_error);
        } 
?>