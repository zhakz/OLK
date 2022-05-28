<?php
	include 'query_server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLK</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
	<?php 
        include 'header.php';
        $book_id = $_GET['book_id'];
        $queryToGetBook = "SELECT * FROM book WHERE book_id = '$book_id'";
        $result = $connect->query($queryToGetBook);
        if($result){
        	$row = $result->fetch_assoc();
        }
    ?>

     <main class="main-profile">
        <div class="container">
            <div class="profile-box">
                <div class="pfp">
                    <img src="<?php echo $row['picture']; ?>" style="width: 100%;" alt="">
                </div>
                <div class="content">
                    <h2 class="name"><?php echo $row['name']; ?></h2>
                    <p> <?php echo $row['description']; ?>
                    </p>
                    <a href="<?php echo $row['download_link']; ?>" class="btn2" download>Download</a>
                    <button onclick="window.location.href='addToBookmarks.php?book_id=<?php echo $row['book_id']  ?>'" type="button" class="btn inversed" <?php if(!isset($_SESSION['user_id'])){ echo "disabled"; } ?> >To bookmarks</button>
                </div>
            </div>
        </div>
    </main>
    <main class="main-profile">
        <div class="container">
                <form class="form" action="addReview.php?<?php echo "book_id=" . $row['book_id'] . "&" . "user_id=" . $_SESSION['user_id']?>" method="POST">
                        <textarea placeholder="Leave your impression here..." class="textOfReview" type="text" name="textOfReview"></textarea>
                        <button class="leaveReviewButton" type="submit">Send</button>
                </form>
        </div>
    </main>
    <main class="main-profile">
        <div class="container">
                <?php
                    $query_to_select = "SELECT review.review_id, review.textOfReview, review.book_id, review.user_id, review.timeOfLeft, users.first_name, users.last_name FROM review INNER JOIN users ON review.user_id = users.user_id WHERE book_id = " . $row['book_id'];
                    $result = $connect->query($query_to_select);
                    $rows = array();
                    while($row = $result->fetch_assoc()){
                        $rows[] = $row;
                    }
                    for($i = 0; $i < count($rows); $i++){
                        echo "<div class=\"shadow_wrapper3\">
                        <p class=\"usernameLeftReview\">" . $rows[$i]['first_name'] . " " . $rows[$i]['last_name'] . "</p>
                        <p class=\"textOfReviewLeft\">" . $rows[$i]['textOfReview'] . "</p>
                        <p class=\"timeOfLeft\" style=\"float: right;\">" . $rows[$i]['timeOfLeft'] . "</p>
                        </div>";
                    }
                ?>
        </div>
    </main>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="main.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
    loop: true,
    centeredSlides: true,
    spaceBetween: 20,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>
</body>
</html>
