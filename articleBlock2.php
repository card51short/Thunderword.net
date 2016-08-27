
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="(min-width: 320px) and (max-width: 480px)" href="css/max-640px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 481px) and (max-width: 1020px)" href="css/max-1020px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 1021px) and (max-width: 1380px)" href="css/max-1380px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 1381px) and (max-width: 2190px)" href="css/max-1700px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 2191px)" href="css/styles2.css">
        
    </head>
    
     <?php
		include "header.php";
	?>
        
            
                
            
        <div class="main">
           
            <?php
				include "headlineBar.php";
			?>
			<html>
    <head>
        
    </head>
    <body>
		
        <article>
                <h1>International students get back into career fields</h1>
				
                
                <img class="mainArticle" src="images/articleBlock2.png">
				<h3>By Taylor Lee - Staff Reporter</h3>
                
                <p><?php
						include "fileReader.php";
						$docObj = new DocxConversion("articles/articleBlock2.docx");
						$docText= $docObj->convertToText();
						echo nl2br(nl2br($docText));
					?>
                </p>
				
        </article>
		
			<?php
				include "articleBlock.php";
				include "footer.php";
			?>

		</div>
    </body>
    
</html>