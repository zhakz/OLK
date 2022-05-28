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
    
    <div id="signinmodal" class="savecardmodal" style="display: none;">
        <div id="modaleewindow">
            <form method="POST" action="" class="savecardinner">
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
            <form method="POST" action="" class="savecardinner">
                <div class="modalheader">
                <h1>Sign up</h1>
                <span id="signUpCloseBtn" class="closesavecard closemodalwindow">
                    &#10005;
                </span>
                </div>
                <div class="formgroup">
                    <label>Full name</label>
                    <input type="text" name="name" required/>
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
                <ul class="list" id="menuList">
                    <li><img src="images/list/academic.svg" alt="book.html"><a href="">Academic Library</a></li>
                    <li><img src="images/list/papyrus.svg" alt=""><a href="">Literature</a></li>
                    <li><img src="images/list/book.svg" alt=""><a href="">Documentary literature</a></li>
                    <li><img src="images/list/portfolio.svg" alt=""><a href="">Business</a></li>
                    <li><img src="images/list/other.svg" alt=""><a href="">Other</a></li>
                    <li><img src="images/list/other.svg" alt=""><a href="book6.php">Books added by users</a></li>
                </ul>
            </div>
            <a href="/">
                <img src="images/logo.jpg" alt="OLK" class="logo">
            </a>
            <div class="actions">
                <img src="images/user.svg" alt="Profile" id="userIcon">
                <img src="images/search.svg" alt="Search">
                <ul class="list" id="authMenu">
                    <li><a id="signinBtn" href="">Sign in</a></li>
                    <li><a id="signupBtn" href="">Sign up</a></li>
                </ul>
                <ul class="list searchBar" id="searchBar">
                    <form action="search_bar.php" method="POST">
                        <input class="search_input" name="search_input" placeholder="Search here..." type="text">
                        <button type="submit" class="search_button"><i style="color: #fff;" class="bi bi-search"></i></button>
                    </form>
                </ul>
            </div>
        </div>
    </header>

    <main class="main-profile">
        <div class="container">
            <h1 class="title">My Profile</h1>
            <div class="profile-box">
                <div class="pfp">
                    <img src="images/profile.svg" alt="">
                </div>
                <div class="content">
                    <h2 class="name">Amelia Davis</h2>
                    <p>
                        Age: 24 <br>
                        Favourite genres: Fantasy, Romance, Thriller. <br> <br>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit alias explicabo eum soluta ipsa nihil error id reiciendis quis? Commodi.
                    </p>
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
</body>
</html>