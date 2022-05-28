<?php
	include 'query_server.php';
	$favGenresInpt = $_POST['favGenresInpt'];
	$ageInpt = $_POST['ageInpt'];
	$picLinkInpt = $_POST['picLinkInpt'];
	$aboutMeInpt = $_POST['aboutMeInpt'];
	$user_id = $_SESSION['user_id'];
	$queryToServer = "INSERT INTO profile(favourite_genre, age, about_me, picture, user_id) VALUES ('$favGenresInpt', '$ageInpt', '$aboutMeInpt', '$picLinkInpt', '$user_id')";
	if ($result = $connect->query($queryToServer)) {
		
	}
	else{
		printf("Сообщение ошибки: %s\n", $mysqli->error);
	}
	header('Location: my_profile.php');
	exit;
?>