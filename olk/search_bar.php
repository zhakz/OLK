<?php 
	include_once 'query_server.php';
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
	<?php 
	$search_string = $_POST['search_input'];
	$search_string = trim($search_string); 
    $search_string = htmlspecialchars($search_string);
	$queryToGetResult = "SELECT * FROM book WHERE name LIKE '%$search_string%'";
	//$queryToGetResult = "SELECT * FROM book WHERE book_id = '$search_string'";
	$result = $connect->query($queryToGetResult);
	$rows = array();
	while($row = $result->fetch_assoc()){
		$rows[] = $row;
	}
	$available = "";
	if(!isset($_SESSION['user_id'])){ $available = "disabled"; }
			echo "<h1 class=\"title\">Search result</h1>";
	if(count($rows) == 0){
		echo "<h1 style=\"text-align:center;margin-top:100px;font-size: 100px\">Nothing Found</h1>";
	}
	else{
		for($i = 0; $i < count($rows); $i++){

		echo "<main class=\"main-profile\">
        <div class=\"container\">
            <div class=\"profile-box\">
                <div class=\"pfp\">
                    <img src=\" " . $rows[$i]['picture'] . " \" style=\"width: 100%;\" alt=\"\">
                </div>
                <div class=\"content\">
                    <h2 class=\"name\"> " . $rows[$i]['name'] . "</h2>
                    <p>" . $rows[$i]['description'] . "</p>
                    <button type=\"button\" class=\"btn\">Download</button>
                    <button onclick=\"window.location.href='addToBookmarks.php?book_id=". $rows[$i]['book_id'] . " \" type=\"button\" class=\"btn inversed\" " . $available . " >To bookmarks</button>
                </div>
            </div>
        </div>
    </main>";
	}
	
	}
	?>
	
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
		</body>
		</html>
		<%  itemList.forEach(function(item){ %>
    <form  action="/delete" method="post">
      <p><input onChange="this.form.submit()" type="checkbox" name="check" value="<%=item._id%>">
      <label> <%=item.name%></label></p>
      <input type="hidden" name="listName" value="<%=title%>">
    </form>

  <%  })%>