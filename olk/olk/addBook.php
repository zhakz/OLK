<?php
	include 'query_server.php';
	$titleOfBook = $_POST['titleOfBook']; 
	$descriptionOfBook = $_POST['descriptionOfBook']; 
	$picture_link = $_POST['picture_link']; 
	$download_link = $_POST['download_link']; 
	$user_id = $_SESSION['user_id'];
	$queryToAddBook = "INSERT INTO book (name, description, picture, genre_id, download_link) VALUES ('$titleOfBook','$descriptionOfBook','$picture_link',6 ,'$download_link')";
	$result = $connect->query($queryToAddBook);
	if ($result) {
		
	}
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
		header('Location: '.$previousPage);
		exit;
?>
