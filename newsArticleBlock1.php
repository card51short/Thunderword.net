
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="(min-width: 320px) and (max-width: 480px)" href="css/max-640px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 481px) and (max-width: 1020px)" href="css/max-1020px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 1021px) and (max-width: 1380px)" href="css/max-1380px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 1381px) and (max-width: 2190px)" href="css/max-1700px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 2191px)" href="css/styles2.css">
        <title>
        Thunderword News
        </title>
    </head>
     <?php
		include "header.php";
	?>
        <div class="main">
           
            <?php
				include "headlineBar.php";
			?>
    <body>
        <article>
			<h1>Quantum computing launches tech light years into the future</h1>
			
            <img class="frontPageArticle tallPic" src="images/newsArticleBlock1.png">
			<h3>By David Moran - Staff Reporter</h3>
                
			<p>
				<?php
					include "fileReader.php";
					$docObj = new DocxConversion("articles/newsArticleBlock1.docx");
					$docText= $docObj->convertToText();
					echo nl2br(nl2br($docText));
				?>
			</p>
        </article>
		
			<?php
				include "newsArticleBlock.php";
				include "footer.php";
			?>

		</div>
    </body>
</html>