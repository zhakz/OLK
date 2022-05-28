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
            <h1 class="title">Academic Library</h1> <br><br>
            <h1 class="title">Frequent queries</h1>

            <div class="slider-wrapper">
            <div class="swiper-container swiper-container-books">
                <div class="swiper-wrapper books-slider">
                    <?php
                        $query_to_select = "SELECT * FROM book WHERE genre_id = 1";
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
                            <img src="https://assets.cambridge.org/97811089/48630/cover/9781108948630.jpg" alt="">
                            <h5 class="book-title">Ruling by Cheating</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://assets.cambridge.org/97811087/45871/cover/9781108745871.jpg" alt="">
                            <h5 class="book-title">A Loud but Noisy Signal?</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://assets.cambridge.org/97811070/62931/cover/9781107062931.jpg" alt="">
                            <h5 class="book-title">Skills and Inequality</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://assets.cambridge.org/97811084/22543/cover/9781108422543.jpg" alt="">
                            <h5 class="book-title">The Semantic Conception of Logic</h5>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="book-slide">
                            <img src="https://assets.cambridge.org/97811089/65576/cover/9781108965576.jpg" alt="">
                            <h5 class="book-title">Entropy and Diversity</h5>
                        </a>
                    </div> -->
                </div>
                <!-- 
                    INSERT INTO book( name, description, picture, genre_id ) VALUES( 'Ruling by Cheating', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', '', 2);
                     -->
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
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AbfOT9BIL._SX366_BO1,204,203,200_.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="name">Cambridge Academic English</h2>
                    <p>
                        A three-level (B1+ to C1) integrated skills course for higher education students at university or on foundation courses.

    The C1 Advanced Student's Book consolidates academic study skills. Students' analytical skills are challenged with an increased range of authentic written and spoken academic texts. 
    From essay organisation, taking notes, group discussion to writing references and paraphrasing texts, the students are presented with a wealth of practice opportunities to enhance all academic skills at this level.
    The course further develops independent learning skills and critical thinking through 'Study tips' sections and allows for personalisation of learning in the 'Focus on your subject' sections. 
    Lecture and seminar skills units provide authentic practice in listening to lectures and participating in seminars.
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