<?php
	
	//Author : Rohit Khattar : Include File added to check removal of Setup directory. 

require_once 'setupCheck.php';
	
//Display the correct navigation or redirect them to the unauthorized user page

if ($_COOKIE['power'] == 'admin'){
	$nav ="<script src= A_navbar.php></script>";
	}
elseif ($_COOKIE['power'] == 'teacher'){
	$nav ="<script src=T_navbar.php></script>";
	}
elseif ($_COOKIE['power'] == 'student'){
	$nav ="<script src=S_navbar.php></script>";
	} 
else {
	header("Location: index.php?state=pass2");
	exit;	
	}