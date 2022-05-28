<?php include_once 'query_server.php';
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
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
	<section class="create_profile">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<form method="POST" action="creating_proccess.php">
					<div class="form-group">
						<label style="margin-bottom: 10px;" for="favGenresInpt">Your favourite genres</label>
						<input type="text" class="form-control" name="favGenresInpt" id="favGenresInpt" placeholder="Enter your favourite genres">
					</div>
					<div class="form-group">
						<label style="margin-top: 20px;margin-bottom: 10px;" for="ageInpt">Your age</label>
						<input type="number" class="form-control" name="ageInpt" id="ageInpt" placeholder="Enter your age">
					</div>
					<div class="form-group">
						<label style="margin-top: 20px;margin-bottom: 10px;" for="picLinkInpt">Link to your picture</label>
						<input type="text" class="form-control" name="picLinkInpt" id="picLinkInpt" placeholder="Enter link to your picture">
					</div>
					<div class="form-group">
						<label style="margin-top: 20px;margin-bottom: 10px;" for="aboutMeInpt">About me</label>
						<input type="text" style="height: 90px;margin-bottom: 20px;" class="form-control" name="aboutMeInpt" id="aboutMeInpt" placeholder="Please, enter some words about yourself">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>
</html>