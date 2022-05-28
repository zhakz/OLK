<?php
	include_once 'query_server.php';
	$queryToCheck = "SELECT * FROM profile WHERE user_id = " . $_SESSION['user_id'];
	$result = $connect->query($queryToCheck);
	$row;
	if($result->num_rows == 1 && isset($_SESSION['user_id'])){
		$row = $result->fetch_assoc();
	}
	else{
		header('Location: create_profile.php');
	}
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
<!-- 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
</head>
<body>
	<?php 
		include 'header.php';
	?>
	<main class="main-profile">
        <div class="container">
            <h1 class="title">My Profile</h1>
            <div class="profile-box">
                <div class="pfp">
                    <img src="<?php echo $row['picture'] ?>" alt="">
                </div>
                <div class="content">
                    <h2 class="name"><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></h2>
                    <p>
                        Age: <?php echo $row['age']; ?> <br>
                        Favourite genres: <?php echo $row['favourite_genre']; ?> <br> <br>
                        <?php echo $row['about_me']; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>
</html>