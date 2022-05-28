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
    ?>
    <main class="main-library">
        <div class="container">
            <h1 class="title">Others</h1> <br><br>
            <h1 class="title">Frequent queries</h1>
            <div class="slider-wrapper">
            <div class="swiper-container swiper-container-books">
                <div class="swiper-wrapper books-slider">
                    <?php
                        $query_to_select = "SELECT * FROM book WHERE genre_id = 5";
                        $result = $connect->query($query_to_select);
                        $rows = array();
                        while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                        }

                        for($i = 0; $i < count($rows); $i++){
                            echo "<div class=\"swiper-slide\">
                                      <a href=\" chosen_book.php?book_id=" . $rows[$i]['book_id'] . "\" class=\"book-slide\">
                                          <img src=\" " . $rows[$i]['picture'] . " \" alt=\"\">
                                          <h5 class=\"book-title\">" . $rows[$i]['name'] . " </h5>
                                      </a>
                                  </div>";
                        }
                    ?>
                    <!-- <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://images.penguinrandomhouse.com/cover/9781400079988" alt="">
                            <h5 class="book-title">War and Peace</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/613pLga+nXL.jpg" alt="">
                            <h5 class="book-title">Song of Solomon</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/51qlSsAf1KL._SX330_BO1,204,203,200_.jpg" alt="">
                            <h5 class="book-title">The Shadow of the Wind</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/81zqkBcTTCL.jpg" alt="">
                            <h5 class="book-title">The Lord of the Rings</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://kbimages1-a.akamaihd.net/392971e9-4f19-4827-a041-3abe4d0e1f54/1200/1200/False/don-quixote-111.jpg" alt="">
                            <h5 class="book-title"> Don Quixote</h5>
                        </a>
                    </div> -->
                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
    </main>
   
    <main class="main-profile">
        <div class="container">
            <h1 class="title">Recommended book</h1>
            <div class="profile-box">
                <div class="pfp">
                    <img src="https://m.media-amazon.com/images/P/0451524934.01._SCLZZZZZZZ_SX500_.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="name">1984</h2>
                    <p>
                        “The Party told you to reject the evidence of your eyes and ears. It was their final, most essential command.”
                        Winston Smith toes the Party line, rewriting history to satisfy the demands of the Ministry of Truth. 
                        With each lie he writes, Winston grows to hate the Party that seeks power for its own sake and persecutes those 
                        who dare to commit thoughtcrimes. But as he starts to think for himself, Winston can’t escape the fact that Big 
                        Brother is always watching...
                        A startling and haunting novel, 1984 creates an imaginary world that is completely convincing from start to finish. 
                        No one can deny the novel’s hold on the imaginations of whole generations, or the power of its admonitions—a power 
                        that seems to grow, not lessen, with the passage of time.
                    </p>
                    <div class="rating">
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                    </div>
                    <a href="https://www.planetebook.com/free-ebooks/1984.pdf" class="btn2" download="https://www.planetebook.com/free-ebooks/1984.pdf">Download</a>
                    <button type="button" class="btn inversed">To bookmarks</button>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="about">
                <h2 class="footer-title">About us</h2>
                <p>This site was created by Aida Sapenova and Bulbul Abenova.</p>
            </div>
            <div class="contact">
                <h2 class="footer-title">Contact us</h2>
                <a href="tel:+77777777777" class="tel">+7(777)777-77-77</a>
            </div>
            <div class="location">
                <h2 class="footer-title">Our location</h2>
                <p>Nur-Sultan, Astana IT University</p>
            </div>
        </div>
    </footer>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="main.js"></script>
<script>
    const swiper = new Swiper('.swiper-container-books', {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 5,

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
