
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="(min-width: 320px) and (max-width: 480px)" href="css/max-640px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 481px) and (max-width: 1020px)" href="css/max-1020px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 1021px) and (max-width: 2190px)" href="css/max-1700px.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 2191px)" href="css/styles2.css">
        <title>
        Thunderword Online
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
                <h1>Highline is looking for students who are interested in applying for jobs for the next school year starting in fall.</h1>
				<h3>By Ariana Thomas</h3>
                
                <img class="article" src="images/articleBlock4.png">
                
                <p><?php
						include "fileReader.php";
						$docObj = new DocxConversion("articles/articleBlock4.docx");
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