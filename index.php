<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="(min-width: 320px) and (max-width: 480px)" href="css/max-640px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 481px) and (max-width: 1020px)" href="css/max-1020px.css">
		
		<link rel="stylesheet" type="text/css" media="(min-width: 1021px)" href="css/styles2.css">
        <title>
			The Thunderword - Official Newspaper of Highline College
        </title>
    </head>
	<body> 
		<?php
			include 'header.php';
			include "headlineBar.php";   
		?>            
			<div class="main">
		<?php
			include 'article.php';
		?>
			<div class="articleBlock">
		<?php
				include 'articleBlock.php';
		?>
			</div>
		<?php
			include "footer.php";
		?>
		</div>
    </body>
</html>