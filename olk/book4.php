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
            <h1 class="title">Business</h1> <br><br>
            <h1 class="title">Frequent queries</h1>

            <div class="slider-wrapper">
            <div class="swiper-container swiper-container-books">
                <div class="swiper-wrapper books-slider">
                    <?php
                        $query_to_select = "SELECT * FROM book WHERE genre_id = 4";
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
                            <img src="https://www.lexis.by/images/products/main_41yT00RYSVL.jpg" alt="">
                            <h5 class="book-title">Market Leader</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="data:image/jpeg;base64,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" alt="">
                            <h5 class="book-title">Business one:one </h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://img.yakaboo.ua/media/catalog/product/cache/1/image/398x565/234c7c011ba026e66d29567e1be1d1f7/2/2/224794.jpg" alt="">
                            <h5 class="book-title">Total Business </h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://img.yakaboo.ua/media/catalog/product/cache/1/image/398x565/234c7c011ba026e66d29567e1be1d1f7/3/0/300775_23087019.jpg" alt="">
                            <h5 class="book-title">Intelligent Business</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://api.macmillanenglish.com/fileadmin/user_upload/Catalogue/Covers/Business_Builder/9780333990940-1.jpg" alt="">
                            <h5 class="book-title"> Business Builder</h5>
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
                    <img src="https://images-na.ssl-images-amazon.com/images/I/5175FWvpoWL._SX351_BO1,204,203,200_.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="name">Business Plus</h2>
                    <p>
                        Business Plus is a three-level, integrated-skills, business English course, from A1 
                        (false beginner) to B1 (pre-intermediate) levels. It has a strong emphasis on Asia. 
                        Aimed at pre-work experience, university or vocational college students, Business Plus 
                        is designed specifically to meet the growing demand for workplace English in the region. 
                        In addition to the Student's Book and Teacher's Manual, the website includes downloadable 
                        audio and supplementary worksheets to extend learning. Each level of the Student's Book has 
                        10 units. Designed to be easy and enjoyable to teach, each unit features integrated skills and 
                        language practice. Units also include cultural awareness sections that connect learners to their 
                        region and beyond. In addition, TOEIC®-style practice sections allow students' progress to be measured. 
                        The Teacher's Manual contains a general introduction, full unit-by-unit summaries, language notes and tips, and a complete answer key.
                    </p>
                    <div class="rating">
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                    </div>
                    <a href="" class="btn2" download>Download</a>
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

