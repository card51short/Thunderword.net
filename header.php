<<<<<<< HEAD
<html>
    <head>
        
    </head>
    <body>
		
		<?php
			$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			if(strpos($url,'action=campus') !== false){
			   echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoCampusLife.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate blue' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else if(strpos($url,'action=opinion') !== false){
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoOpinion.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate blue' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else if(strpos($url,'action=art') !== false){
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoArt.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate blue' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else if(strpos($url,'action=sports') !== false){
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoSports.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate blue' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else if(strpos($url,'action=news') !== false){
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoNews.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate blue' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else{
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogo.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate blue' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}
			   
		?>            
        
    </body>
=======
<html>
    <head>
        
    </head>
    <body>
		
		<?php
			$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			if(strpos($url,'action=campus') !== false){
			   echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoCampusLife.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate blue' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else if(strpos($url,'action=opinion') !== false){
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoOpinion.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate blue' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else if(strpos($url,'action=art') !== false){
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoArt.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate blue' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else if(strpos($url,'action=sports') !== false){
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoSports.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate blue' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else if(strpos($url,'action=news') !== false){
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogoNews.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate green' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate blue' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}else{
				echo "
				<div class='header'>
					<img src='images/logos/thunderwordlogo.PNG' alt='ThunderWord Logo' class='logo'>
				</div>
				<nav>
					<a class='action-button shadow animate blue' href='index.php'>Home</a>
					<a class='action-button shadow animate green' href='index.php?action=campus'>CampusLife</a>
					<a class='action-button shadow animate green' href='index.php?action=opinion'>Opinion</a>
					<a class='action-button shadow animate green' href='index.php?action=art'>Art</a>
					<a class='action-button shadow animate green' href='index.php?action=sports'>Sports</a>
					<a class='action-button shadow animate green' href='index.php?action=news'>News</a><br>
		
				</nav>";
			}
			   
		?>            
        
    </body>
>>>>>>> fc49e85d4791137ce6ac02ee428ab3b9f1a112f0
</html>