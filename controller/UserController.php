<?php
	require_once '../model/User.php';
	$user=new User;
	$user->insert($_POST['name'],$_POST['birth'],$_POST['email'],$_POST['user'],$_POST['password']);
	require_once '../view/user_view.html';
?>