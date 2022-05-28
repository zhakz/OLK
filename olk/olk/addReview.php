<?php
	include 'query_server.php';
	$user_id = $_GET['user_id'];
	$book_id = $_GET['book_id'];
	$textOfReview = $_POST['textOfReview'];
	$date = date('Y-m-d', time());
	$queryToLeftReview = "INSERT INTO review(textOfReview, book_id, user_id, timeOfLeft) VALUES ('$textOfReview', '$book_id', '$user_id', '$date')";
	$result = $connect->query($queryToLeftReview);
	if ($result) {
		
	}
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
		header('Location: '.$previousPage);
		exit;

?>