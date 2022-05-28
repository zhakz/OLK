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
            <h1 class="title">Documentary literature</h1> <br><br>
            <h1 class="title">Frequent queries</h1>

            <div class="slider-wrapper">
            <div class="swiper-container swiper-container-books">
                <div class="swiper-wrapper books-slider">
                    <?php
                        $query_to_select = "SELECT * FROM book WHERE genre_id = 3";
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
                            <img src="https://groundedcuriosity.com/wp-content/uploads/2020/10/613xliMRGmL.jpg" alt="">
                            <h5 class="book-title">Into Thin Air</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://s1.livelib.ru/boocover/1002459465/o/880b/Anne_Frank__The_Diary_Of_A_Young_Girl.jpeg" alt="">
                            <h5 class="book-title">The Diary of a Young Girl</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://m.media-amazon.com/images/I/413xIek1FtL.jpg" alt="">
                            <h5 class="book-title">Bad Blood</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://m.media-amazon.com/images/I/51kyU734ymL.jpg" alt="">
                            <h5 class="book-title">Escape from Camp 14</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/71SgcbI-KqL.jpg" alt="">
                            <h5 class="book-title"> Voices from Chernobyl</h5>
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
                    <img src="https://images-na.ssl-images-amazon.com/images/I/91jj+OWbC1L.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="name">I Am Malala</h2>
                    <p>
                        When the Taliban took control of the Swat Valley in Pakistan, one girl spoke out. 
                        Malala Yousafzai refused to be silenced and fought for her right to an education.
                        On Tuesday, October 9, 2012, when she was fifteen, she almost paid the ultimate price. 
                        She was shot in the head at point-blank range while riding the bus home from school, and few expected her to survive.
                        Instead, Malala's miraculous recovery has taken her on an extraordinary journey from a remote valley in northern Pakistan 
                        to the halls of the United Nations in New York. At sixteen, she has become a global symbol of peaceful protest and the youngest-ever
                         Nobel Peace Prize laureate.I Am Malala is the remarkable tale of a family uprooted by global terrorism, of the fight for girls'
                         education, of a father who, himself a school owner, championed and encouraged his daughter to write and attend school,
                          and of brave parents who have a fierce love for their daughter in a society that prizes sons.
                    </p>
                    <div class="rating">
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                    </div>
                    <a href="https://eg4.nic.in/jnv/DFILES/EBOOKS/IR/IamMalala.pdf" class="btn2" download>Download</a>
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