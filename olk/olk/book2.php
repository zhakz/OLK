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
            <h1 class="title">Literature</h1> <br><br>
            <h1 class="title">Frequent queries</h1>

            <div class="slider-wrapper">
            <div class="swiper-container swiper-container-books">
                <div class="swiper-wrapper books-slider">
                    <?php
                        $query_to_select = "SELECT * FROM book WHERE genre_id = 2";
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
                            <img src="https://images-na.ssl-images-amazon.com/images/I/41Ed1Ucn09L._SX331_BO1,204,203,200_.jpg" alt="">
                            <h5 class="book-title">The Great Gatsby</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://upload.wikimedia.org/wikipedia/en/1/1e/JeanRhys_WideSargassoSea.jpg" alt="">
                            <h5 class="book-title">Wide Sargasso Sea</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/51DqoYbI3gL._SX328_BO1,204,203,200_.jpg" alt="">
                            <h5 class="book-title">I Capture The Castle</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/81+9w5nFMDL.jpg" alt="">
                            <h5 class="book-title">The Call of the Wild</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://www.penguin.co.uk/content/dam/prh/books/622/62240/9780142437247.jpg.transform/PRHDesktopWide_small/image.jpg" alt="">
                            <h5 class="book-title"> Moby-Dick</h5>
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
                    <img src="http://underground-writers.org/wp-content/uploads/2018/11/The-Go-Between-L.P.-Hartley.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="name">The Go-Between</h2>
                    <p>
                        “The past is a foreign country: they do things differently there.”

    Summering with a fellow schoolboy on a great English estate, Leo, the hero of L. P. Hartley’s finest novel, 
    encounters a world of unimagined luxury. But when his friend’s beautiful older sister enlists him as the unwitting
    messenger in her illicit love affair, the aftershocks will be felt for years. The inspiration for the brilliant 
    Joseph Losey/Harold Pinter film starring Julie Christie and Alan Bates, The Go-Between is a masterpiece—a richly layered, 
    spellbinding story about past and present, naïveté and knowledge, and the mysteries of the human heart. This volume includes, 
    for the first time ever in North America, Hartley’s own introduction to the novel.
                    </p>
                    <div class="rating">
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                        <span class="rated">☆</span>
                    </div>
                    <a href="http://www.ompersonal.com.ar/OMFIRST/TheGoBetween-LPHartley.pdf" class="btn2" download>Download</a>
                    <button type="button" class="btn inversed">To bookmarks</button>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="about">
                <h2 class="footer-title">About us</h2>
                <p>This site was created by SAMAL and ZHANEL FROM MT-2103</p>
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