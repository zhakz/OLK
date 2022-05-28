
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
    
        <?php
        include 'query_server.php';
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <div id="signinmodal" class="savecardmodal" style="display: none;">
        <div id="modaleewindow">
            <form method="POST" action="authorization.php" class="savecardinner">
                <div class="modalheader">
                    <h1>Sign in</h1>
                    <span id="signCloseBtn" class="closesavecard closemodalwindow">
                        &#10005;
                    </span>
                </div>
                <div class="formgroup">
                    <label>E-mail</label>
                    <input type="email" name="email" required/>
                </div>
                <div class="formgroup">
                    <label>Password</label>
                    <input type="password" name="password" required/>
                </div>
                <div class="formcontrol">
                    <button class="inverted" type="button" id="signCloseBtn">Close</button>
                    <button type="submit">Sign in</button>
                </div>
            </form>
            <div class="overlay" class="closemodalwindow"></div>
        </div>
    </div>

    <div id="signupmodal" class="savecardmodal" style="display: none;">
        <div id="modaleewindow">
            <form method="POST" action="registration.php" class="savecardinner">
                <div class="modalheader">
                    <h1>Sign up</h1>
                    <span id="signUpCloseBtn" class="closesavecard closemodalwindow">
                        &#10005;
                    </span>
                </div>
                <div class="formgroup">
                    <label>First name</label>
                    <input type="text" name="first_name" required/>
                </div>
                <div class="formgroup">
                    <label>Last name</label>
                    <input type="text" name="last_name" required/>
                </div>
                <div class="formgroup">
                    <label>E-mail</label>
                    <input type="email" name="email" required/>
                </div>
                <div class="formgroup">
                    <label>Password</label>
                    <input type="password" name="password" required/>
                </div>
                <div class="formcontrol">
                    <button class="inverted" type="button" id="signUpCloseBtn">Close</button>
                    <button type="submit">Sign up</button>
                </div>
            </form>

            <div class="overlay" class="closemodalwindow"></div>
        </div>
    </div>

    <header class="header">
        <div class="container">
            <div class="menu">
                <img src="images/menu.svg" alt="Menu" class="icon" id="menu">
                <ul style="padding-left: 0;" class="list" id="menuList">
                    <li><img src="images/home.svg" alt=""><a style="color: #000;text-decoration: none;" href="index.php">Home</a></li>
                    <li><img src="images/list/academic.svg" alt=""><a style="color: #000;text-decoration: none;" href="book.php">Academic Library</a></li>
                    <li><img src="images/list/papyrus.svg" alt=""><a style="color: #000;text-decoration: none;" href="book2.php">Literature</a></li>
                    <li><img src="images/list/book.svg" alt=""><a style="color: #000;text-decoration: none;" href="book3.php">Documentary literature</a></li>
                    <li><img src="images/list/portfolio.svg" alt=""><a style="color: #000;text-decoration: none;" href="book4.php">Business</a></li>
                    <li><img src="images/list/other.svg" alt=""><a style="color: #000;text-decoration: none;" href="book5.php">Other</a></li>
                </ul>
            </div>
            <a href="/">
                <img src="images/logo.jpg" alt="OLK" class="logo">
            </a>
            <div class="actions">
                <img src="images/user.svg" alt="Profile" id="userIcon">
                <img src="images/search.svg" alt="Search" id="searchButton">
                <ul style="padding-left: 0;" class="list" id="authMenu">
                    <?php 
                    if(isset($_SESSION['user_id'])){
                        echo "<li><a style=\"color: #000;text-decoration: none;\" id=\"myProfileBtn\" href=\"my_profile.php\">My Profile</a></li>
                              <li><a style=\"color: #000;text-decoration: none;\" id=\"myBookmarksBtn\" href=\"\">My Bookmarks</a></li>
                              <li><a style=\"color: #000;text-decoration: none;\" id=\"quitBtn\" href=\"quit.php\">Quit</a></li>";
                    }
                    else{
                        echo "<li><a style=\"color: #000;text-decoration: none;\" id=\"signinBtn\" href=\"\">Sign in</a></li>
                              <li><a style=\"color: #000;text-decoration: none;\" id=\"signupBtn\" href=\"\">Sign up</a></li>";
                    }
                    ?>
                    
                </ul>
                <ul class="list searchBar" id="searchBar">
                    <form action="search_bar.php" method="POST">
                        <input style="width: 130px;" class="search_input" name="search_input" placeholder="Search here..." type="text">
                        <button type="submit" class="search_button"><i style="color: #fff;" class="bi bi-search"></i></button>
                    </form>
                </ul>
            </div>
        </div>
    </header>
    <main class="main-library">
        <div class="container">
            <div class="row">
                <?php
                        $query_to_select = "SELECT * FROM book WHERE genre_id = 6";
                        $result = $connect->query($query_to_select);
                        $rows = array();
                        while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                        }
                        for($i = 0; $i < count($rows); $i++){
                            echo "<div class=\"col-lg-2\">
                                      <a style=\"text-decoration: none;\" href=\"chosen_book.php?book_id=" . $rows[$i]['book_id'] . "\" class=\"book-slide\">
                                          <img width=\"80%\" src=\" " . $rows[$i]['picture'] . " \" alt=\"\">
                                          <h5 style=\"color: #000;text-decoration: none;\" class=\"book-title\">" . $rows[$i]['name'] . " </h5>
                                      </a>
                                  </div>";
                        }
                    ?>

            </div>
                    
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
           

                <!-- If we need pagination -->
            </div>
        </div>
    </div>
    </main>
   
<!--     <main class="main-profile">
        <div class="container">
            <h1 class="title">Recommended book</h1>
            <div class="profile-box">
                                        
                </div>
            </div>
        </div>
    </main> -->

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
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
