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
                <ul class="list" id="menuList">
                    <li><img src="images/home.svg" alt=""><a href="index.php">Home</a></li>
                    <li><img src="images/list/academic.svg" alt=""><a href="book.php">Academic Library</a></li>
                    <li><img src="images/list/papyrus.svg" alt=""><a href="book2.php">Literature</a></li>
                    <li><img src="images/list/book.svg" alt=""><a href="book3.php">Documentary literature</a></li>
                    <li><img src="images/list/portfolio.svg" alt=""><a href="book4.php">Business</a></li>
                    <li><img src="images/list/other.svg" alt=""><a href="book5.php">Other</a></li>
                    <li><img src="images/list/other.svg" alt=""><a href="book6.php">Books added by users</a></li>
                </ul>
            </div>
            <a href="/">
                <img src="images/logo.jpg" alt="OLK" class="logo">
            </a>
            <div class="actions">
                <img src="images/user.svg" alt="Profile" id="userIcon">
                <img src="images/search.svg" alt="Search" id="searchButton">
                <ul class="list" id="authMenu">
                    <?php 
                    if(isset($_SESSION['user_id'])){
                        echo "<li><a id=\"myProfileBtn\" href=\"my_profile.php\">My Profile</a></li>
                              <li><a id=\"myBookmarksBtn\" href=\"myBookmarks.php\">My Bookmarks</a></li>
                              <li><a id=\"quitBtn\" href=\"quit.php\">Quit</a></li>";
                    }
                    else{
                        echo "<li><a id=\"signinBtn\" href=\"\">Sign in</a></li>
                              <li><a id=\"signupBtn\" href=\"\">Sign up</a></li>";
                    }
                    ?>
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