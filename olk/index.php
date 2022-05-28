<?php include('query_server.php');
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

    <main class="main">
        <div class="container mobile-full-w">
            <h1 class="title">New books of the week</h1>
            <div class="swiper-container books-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide swiper-books-slide">
                      <div class="cover-wrapper">
                          <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1486131451l/853510._SY475_.jpg" alt="">
                      </div>
                      <div class="content">
                          <h1 class="name">Murder on the Orient Express</h1>
                          <p class="description">
                            Just after midnight, a snowdrift stops the Orient Express in its tracks. The luxurious train is surprisingly full for the time of the year, but by the morning it is one passenger fewer. An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside.
                            Isolated and with a killer in their midst, detective Hercule Poirot must identify the murderer—in case he or she decides to strike again.
                          </p>
                      </div>
                  </div>
                  <div class="swiper-slide swiper-books-slide">
                    <div class="cover-wrapper">
                        <img src="https://images.penguinrandomhouse.com/cover/9780307277671" alt="">
                    </div>
                    <div class="content">
                        <h1 class="name">The Da Vinci Code</h1>
                        <p class="description">
                            While in Paris, Harvard symbologist Robert Langdon is awakened by a phone call in the dead of the night. The elderly curator of the Louvre has been murdered inside the museum, his body covered in baffling symbols. As Langdon and gifted French cryptologist Sophie Neveu sort through the bizarre riddles, they are stunned to discover a trail of clues hidden in the works of Leonardo da Vinci—clues visible for all to see and yet ingeniously disguised by the painter.

                            Even more startling, the late curator was involved in the Priory of Sion—a secret society whose members included Sir Isaac Newton, Victor Hugo, and Da Vinci—and he guarded a breathtaking historical secret. Unless Langdon and Neveu can decipher the labyrinthine puzzle—while avoiding the faceless adversary who shadows their every move—the explosive, ancient truth will be lost forever.
                        </p>
                    </div>
                </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <div class="container">
            <div class="exchange">
                <div class="exchange-container">
                    <img src="images/exchange.svg" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="title">Book exchange</h1>
            <form action="" method="" class="add-block">
                <label>The book you want to exchange</label>
                <input type="text" placeholder="Enter the book you want to exchange">
                <label>The book you want to exchange for</label>
                <input type="text" placeholder="Enther the book you want to exchange for">
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="container">
            <div class="exchange">
                <div class="exchange-container">
                    <img src="images/list/papyrus.svg" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="title">Add your book</h1>
            <form action="addBook.php" method="POST" class="add-block">
                <label>Title of the book</label>
                <input type="text" name="titleOfBook" placeholder="Enter the title of book">
                <label>Description</label>
                <input type="text" name="descriptionOfBook" placeholder="Enther the description of book">
                <label>Book release year</label>
                <input type="num" placeholder="Enther the release year">
                <label>Image of book</label>
                <input type="text" name="picture_link" placeholder="Link to image of book">
                <label>Link to download book</label>
                <input type="text" name="download_link" placeholder="Link to download book">
                <button type="submit">Submit</button>
            </form>
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


