<?php 
    include_once 'query_server.php';
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
    <div class="" style=""></div>
    <?php 
        include 'header.php';
    ?>
    <?php 
    $user_id = $_SESSION['user_id'];
    $queryToGetResult = "SELECT * FROM bookmark INNER JOIN book ON book.book_id = bookmark.book_id WHERE user_id = '$user_id'";
    //$queryToGetResult = "SELECT * FROM book WHERE book_id = '$search_string'";
    $result = $connect->query($queryToGetResult);
    $rows = array();
    while($row = $result->fetch_assoc()){
        $rows[] = $row;
    }
    $available = "";
    //echo $rows[1]['download_link'] . "";
    if(!isset($_SESSION['user_id'])){ $available = "disabled"; }
                echo "<h1 class=\"title\">My bookmarks</h1>";
    if(count($rows) == 0){
        echo "<h1 style=\"text-align:center;margin-top:100px;font-size: 100px\">You don't have any bookmarks</h1>";
    }
    else{
        for($i = 0; $i < count($rows); $i++){

        echo "<main class=\"main-profile\">
        <div class=\"container\">
            <div class=\"profile-box\">
                <div class=\"pfp\">
                    <img src=\" " . $rows[$i]['picture'] . " \" style=\"width: 100%;\" alt=\"\">
                </div>
                <div class=\"content\">
                    <h2 class=\"name\"> " . $rows[$i]['name'] . "</h2>
                    <p>" . $rows[$i]['description'] . "</p>
                    <a style=\"background-color: #007aff;height: 40px;width: 100px;color: #fff;
                    display: inline-block;text-align:center;padding-top:11px;font-size:14px;\" href=\" " . $rows[$i]['download_link'] . "\" class=\"btn2\" download>Download</a>
                </div>
            </div>
        </div>
    </main>";
    }
    
    }
    ?>
    
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
        </body>
        </html>