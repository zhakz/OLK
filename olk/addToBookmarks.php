<?php
	include 'query_server.php';
	$book_id = $_GET['book_id'];

	$user_id = $_SESSION['user_id'];
	$queryToAddBookmark = "INSERT INTO bookmark (book_id, user_id) VALUES ('$book_id', '$user_id')";
	$result = $connect->query($queryToAddBookmark);
	if ($result) {
		$previousPage = $_SERVER["HTTP_REFERER"];
		header('Location: '.$previousPage);
		exit;
	}
	else{
		printf("Сообщение ошибки: %s\n", $result->error);
	}
?>