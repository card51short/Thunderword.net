<<<<<<< HEAD
<html>
    <head>
        
    </head>
    <body>
      <article>
			<?php
				//Main page
				$index = "Earthquake drill shakes things up";
				$indexAuthor = "By Joey Gomez - Staff Reporter";
				
				$index1 = "More dollars in your pocket";
				$index1Author = "By Michael Simpson - Staff Reporter";
				
				$index2 = "Highline helps to create safe place for survivors";
				$index2Author = "By Jacqueline Robinson - Staff Reporter";
				
				$index3 = "Now you see it, now you don't";
				$index3Author = "By Olivia Sullivan - Staff Reporter";
				
				//Campus Life page
				$campus = "Saving souls and sinners";
				$campusAuthor = "By Michael Simpson- Staff Reporter";
				
				$campus1 = "COMPASS tests get new direction";
				$campus1Author = "By Dylan You - Staff Reporter";
				
				$campus2 = "Summit explores barriers";
				$campus2Author = "By Zico Dumo - Staff Reporter";
				
				$campus3 = "Highline professor leads research group to diversify calculus field";
				$campus3Author = "By Olivia Sullivan - Staff Reporter";
				
				//Art page
				$art = "Planting the seeds of art";
				$artAuthor = "By Kelsey Par - Staff Reporter";
				
				$art1 = "Cheap tickets for teens in King County";
				$art1Author = "By Kelsey Par - Staff Reporter";
				
				$art2 = "Hello Pikachu";
				$art2Author = "By Thunderword Staff";
				
				$art3 = "Pumpkin Pandemonium";
				$art3Author = "By Kelsey Par - Staff Reporter";
				
				//Opinion page
				$opinion = "Highline needs attractive rides";
				$opinionAuthor = "By Thunderword Staff";
				
				$opinion1= "Abuse cycle is tough to break";
				$opinion1Author = "By Jessica Strand - Staff Reporter";
				
				$opinion2 = "We can disagree and not be disagreeable";
				$opinion2Author = "By Cinthia Velez-Regalado - Staff Reporter";
				
				$opinion3 = "Voter registration drive here Oct. 10";
				$opinion3Author = "By Thunderword Staff";
				
				//Sports page
				$sports = "T-Birds shut out all opposing teams";
				$sportsAuthor = "By Konner Hancock - Staff Reporter";
				
				$sports1 = "Rodriguez hopes to score pro career";
				$sports1Author = "By Konner Hancock  - Staff Reporter";
				
				$sports2 = "Lady T-Birds leave Grays Harbor dry after shutout win";
				$sports2Author = "By Aleyah Bennett - Staff Reporter";
				
				$sports3 = "T-Birds kick it into overdrive, burn SPS";
				$sports3Author = "By Konner Hancock - Staff Reporter";
				
				//News page
				$news = "School funds divide FW candidates";
				$newsAuthor = "By Michael Simpson - Staff Reporter";
				
				$news1 = "Presidential hopefuls get dissected at forum";
				$news1Author = "By Jessica Strand - Staff Reporter";
				
				$news2 = "Waiting for the train";
				$news2Author = "By Olivia Sullivan - Staff Reporter";
				
				$news3 = "Long time Highline professor passes away";
				$news3Author = "By Jessica Strand - Staff Reporter";
				
				
                $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
				if(strpos($url,'action=campus') !== false){
					if(strpos($url,'action=campus1') !== false){
						echo "<h1>" . $campus1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/campusLifeArticleBlock1.png'>";
						echo "<h3>" . $campus1Author . "</h3>";
					}else if(strpos($url,'action=campus2') !== false){
						echo "<h1>" . $campus2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/campusLifeArticleBlock2.png'>";
						echo "<h3>" . $campus2Author . "</h3>";
					}else if(strpos($url,'action=campus3') !== false){
						echo "<h1>" . $campus3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/campusLifeArticleBlock3.png'>";
						echo "<h3>" . $campus3Author . "</h3>";
					}else{
						echo "<h1>" . $campus . "</h1>";
						echo "<img class='frontPageArticle tallPic' src='images/mainCampusLifeArticle.png'>";
						echo "<h3>" . $campusAuthor . "</h3>";
					}
				}else if(strpos($url,'action=opinion') !== false){
					if(strpos($url,'action=opinion1') !== false){
						echo "<h1>" . $opinion1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/opinionArticleBlock1.png'>";
						echo "<h3>" . $opinion1Author . "</h3>";
					}else if(strpos($url,'action=opinion2') !== false){
						echo "<h1>" . $opinion2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/opinionArticleBlock2.png'>";
						echo "<h3>" . $opinion2Author . "</h3>";
					}else if(strpos($url,'action=opinion3') !== false){
						echo "<h1>" . $opinion3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/opinionArticleBlock3.png'>";
						echo "<h3>" . $opinion3Author . "</h3>";
					}else{
						echo "<h1>" . $opinion . "</h1>";
						echo "<img class='frontPageArticle ' src='images/mainOpinionArticle.png'>";
						echo "<h3>" . $opinionAuthor . "</h3>";
					}
				}else if(strpos($url,'action=art') !== false){
					if(strpos($url,'action=art1') !== false){
						echo "<h1>" . $art1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/artArticleBlock1.png'>";
						echo "<h3>" . $art1Author . "</h3>";
					}else if(strpos($url,'action=art2') !== false){
						echo "<h1>" . $art2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/artArticleBlock2.png'>";
						echo "<h3>" . $art2Author . "</h3>";
					}else if(strpos($url,'action=art3') !== false){
						echo "<h1>" . $art3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/artArticleBlock3.png'>";
						echo "<h3>" . $art3Author . "</h3>";
					}else{
						echo "<h1>" . $art . "</h1>";
						echo "<img class='frontPageArticle tallPic' src='images/mainArtArticle.png'>";
						echo "<h3>" . $artAuthor . "</h3>";
					}
				}else if(strpos($url,'action=sports') !== false){
					if(strpos($url,'action=sports1') !== false){
						echo "<h1>" . $sports1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/sportsArticleBlock1.png'>";
						echo "<h3>" . $sports1Author . "</h3>";
					}else if(strpos($url,'action=sports2') !== false){
						echo "<h1>" . $sports2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/sportsArticleBlock2.png'>";
						echo "<h3>" . $sports2Author . "</h3>";
					}else if(strpos($url,'action=sports3') !== false){
						echo "<h1>" . $sports3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/sportsArticleBlock3.png'>";
						echo "<h3>" . $sports3Author . "</h3>";
					}else{
						echo "<h1>" . $sports . "</h1>";
						echo "<img class='frontPageArticle ' src='images/mainSportsArticle.png'>";
						echo "<h3>" . $sportsAuthor . "</h3>";
					}
					
				}else if(strpos($url,'action=news') !== false){
					if(strpos($url,'action=news1') !== false){
						echo "<h1>" . $news1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/newsArticleBlock1.png'>";
						echo "<h3>" . $news1Author . "</h3>";
					}else if(strpos($url,'action=news2') !== false){
						echo "<h1>" . $news2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/newsArticleBlock2.png'>";
						echo "<h3>" . $news2Author . "</h3>";
					}else if(strpos($url,'action=news3') !== false){
						echo "<h1>" . $news3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/newsArticleBlock3.png'>";
						echo "<h3>" . $news3Author . "</h3>";
					}else{
						echo "<h1>" . $news . "</h1>";
						echo "<img class='frontPageArticle ' src='images/mainNewsArticle.png'>";
						echo "<h3>" . $newsAuthor . "</h3>";
					}
				}else{
					if(strpos($url,'action=index1') !== false){
						echo "<h1>" . $index1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/articleBlock1.png'>";
						echo "<h3>" . $index1Author . "</h3>";
					}else if(strpos($url,'action=index2') !== false){
						echo "<h1>" . $index2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/articleBlock2.png'>";
						echo "<h3>" . $index2Author . "</h3>";
					}else if(strpos($url,'action=index3') !== false){
						echo "<h1>" . $index3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/articleBlock3.png'>";
						echo "<h3>" . $index3Author . "</h3>";
					}else{
						echo "<h1>" . $index . "</h1>";
						echo "<img class='frontPageArticle tallPic' src='images/mainArticle.png'>";
						echo "<h3>" . $indexAuthor . "</h3>";
					}
				}
			?>
			<p>
				<?php
					include "fileReader.php";
					if(strpos($url,'action=campus') !== false){
						if(strpos($url,'action=campus1') !== false){
							$docObj = new DocxConversion("articles/campusLifeArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=campus2') !== false){
							$docObj = new DocxConversion("articles/campusLifeArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=campus3') !== false){
							$docObj = new DocxConversion("articles/campusLifeArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainCampusLifeArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else if(strpos($url,'action=opinion') !== false){
						if(strpos($url,'action=opinion1') !== false){
							$docObj = new DocxConversion("articles/opinionArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=opinion2') !== false){
							$docObj = new DocxConversion("articles/opinionArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=opinion3') !== false){
							$docObj = new DocxConversion("articles/opinionArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainOpinionArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else if(strpos($url,'action=art') !== false){
						if(strpos($url,'action=art1') !== false){
							$docObj = new DocxConversion("articles/artArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=art2') !== false){
							$docObj = new DocxConversion("articles/artArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=art3') !== false){
							$docObj = new DocxConversion("articles/artArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainArtArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else if(strpos($url,'action=sports') !== false){
						if(strpos($url,'action=sports1') !== false){
							$docObj = new DocxConversion("articles/sportsArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=sports2') !== false){
							$docObj = new DocxConversion("articles/sportsArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=sports3') !== false){
							$docObj = new DocxConversion("articles/sportsArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainSportsArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else if(strpos($url,'action=news') !== false){
						if(strpos($url,'action=news1') !== false){
							$docObj = new DocxConversion("articles/newsArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=news2') !== false){
							$docObj = new DocxConversion("articles/newsArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=news3') !== false){
							$docObj = new DocxConversion("articles/newsArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainNewsArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else{
						if(strpos($url,'action=index1') !== false){
							$docObj = new DocxConversion("articles/articleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=index2') !== false){
							$docObj = new DocxConversion("articles/articleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=index3') !== false){
							$docObj = new DocxConversion("articles/articleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}
					
					
				?>
			</p>
        </article>
    </body>
=======
<html>
    <head>
        
    </head>
    <body>
      <article>
			<?php
				//Main page
				$index = "Earthquake drill shakes things up";
				$indexAuthor = "By Joey Gomez - Staff Reporter";
				
				$index1 = "More dollars in your pocket";
				$index1Author = "By Michael Simpson - Staff Reporter";
				
				$index2 = "Highline helps to create safe place for survivors";
				$index2Author = "By Jacqueline Robinson - Staff Reporter";
				
				$index3 = "Now you see it, now you don't";
				$index3Author = "By Olivia Sullivan - Staff Reporter";
				
				//Campus Life page
				$campus = "Saving souls and sinners";
				$campusAuthor = "By Michael Simpson- Staff Reporter";
				
				$campus1 = "COMPASS tests get new direction";
				$campus1Author = "By Dylan You - Staff Reporter";
				
				$campus2 = "Summit explores barriers";
				$campus2Author = "By Zico Dumo - Staff Reporter";
				
				$campus3 = "Highline professor leads research group to diversify calculus field";
				$campus3Author = "By Olivia Sullivan - Staff Reporter";
				
				//Art page
				$art = "Planting the seeds of art";
				$artAuthor = "By Kelsey Par - Staff Reporter";
				
				$art1 = "Cheap tickets for teens in King County";
				$art1Author = "By Kelsey Par - Staff Reporter";
				
				$art2 = "Hello Pikachu";
				$art2Author = "By Thunderword Staff";
				
				$art3 = "Pumpkin Pandemonium";
				$art3Author = "By Kelsey Par - Staff Reporter";
				
				//Opinion page
				$opinion = "Highline needs attractive rides";
				$opinionAuthor = "By Thunderword Staff";
				
				$opinion1= "Abuse cycle is tough to break";
				$opinion1Author = "By Jessica Strand - Staff Reporter";
				
				$opinion2 = "We can disagree and not be disagreeable";
				$opinion2Author = "By Cinthia Velez-Regalado - Staff Reporter";
				
				$opinion3 = "Voter registration drive here Oct. 10";
				$opinion3Author = "By Thunderword Staff";
				
				//Sports page
				$sports = "T-Birds shut out all opposing teams";
				$sportsAuthor = "By Konner Hancock - Staff Reporter";
				
				$sports1 = "Rodriguez hopes to score pro career";
				$sports1Author = "By Konner Hancock  - Staff Reporter";
				
				$sports2 = "Lady T-Birds leave Grays Harbor dry after shutout win";
				$sports2Author = "By Aleyah Bennett - Staff Reporter";
				
				$sports3 = "T-Birds kick it into overdrive, burn SPS";
				$sports3Author = "By Konner Hancock - Staff Reporter";
				
				//News page
				$news = "School funds divide FW candidates";
				$newsAuthor = "By Michael Simpson - Staff Reporter";
				
				$news1 = "Presidential hopefuls get dissected at forum";
				$news1Author = "By Jessica Strand - Staff Reporter";
				
				$news2 = "Waiting for the train";
				$news2Author = "By Olivia Sullivan - Staff Reporter";
				
				$news3 = "Long time Highline professor passes away";
				$news3Author = "By Jessica Strand - Staff Reporter";
				
				
                $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
				if(strpos($url,'action=campus') !== false){
					if(strpos($url,'action=campus1') !== false){
						echo "<h1>" . $campus1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/campusLifeArticleBlock1.png'>";
						echo "<h3>" . $campus1Author . "</h3>";
					}else if(strpos($url,'action=campus2') !== false){
						echo "<h1>" . $campus2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/campusLifeArticleBlock2.png'>";
						echo "<h3>" . $campus2Author . "</h3>";
					}else if(strpos($url,'action=campus3') !== false){
						echo "<h1>" . $campus3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/campusLifeArticleBlock3.png'>";
						echo "<h3>" . $campus3Author . "</h3>";
					}else{
						echo "<h1>" . $campus . "</h1>";
						echo "<img class='frontPageArticle tallPic' src='images/mainCampusLifeArticle.png'>";
						echo "<h3>" . $campusAuthor . "</h3>";
					}
				}else if(strpos($url,'action=opinion') !== false){
					if(strpos($url,'action=opinion1') !== false){
						echo "<h1>" . $opinion1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/opinionArticleBlock1.png'>";
						echo "<h3>" . $opinion1Author . "</h3>";
					}else if(strpos($url,'action=opinion2') !== false){
						echo "<h1>" . $opinion2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/opinionArticleBlock2.png'>";
						echo "<h3>" . $opinion2Author . "</h3>";
					}else if(strpos($url,'action=opinion3') !== false){
						echo "<h1>" . $opinion3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/opinionArticleBlock3.png'>";
						echo "<h3>" . $opinion3Author . "</h3>";
					}else{
						echo "<h1>" . $opinion . "</h1>";
						echo "<img class='frontPageArticle ' src='images/mainOpinionArticle.png'>";
						echo "<h3>" . $opinionAuthor . "</h3>";
					}
				}else if(strpos($url,'action=art') !== false){
					if(strpos($url,'action=art1') !== false){
						echo "<h1>" . $art1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/artArticleBlock1.png'>";
						echo "<h3>" . $art1Author . "</h3>";
					}else if(strpos($url,'action=art2') !== false){
						echo "<h1>" . $art2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/artArticleBlock2.png'>";
						echo "<h3>" . $art2Author . "</h3>";
					}else if(strpos($url,'action=art3') !== false){
						echo "<h1>" . $art3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/artArticleBlock3.png'>";
						echo "<h3>" . $art3Author . "</h3>";
					}else{
						echo "<h1>" . $art . "</h1>";
						echo "<img class='frontPageArticle tallPic' src='images/mainArtArticle.png'>";
						echo "<h3>" . $artAuthor . "</h3>";
					}
				}else if(strpos($url,'action=sports') !== false){
					if(strpos($url,'action=sports1') !== false){
						echo "<h1>" . $sports1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/sportsArticleBlock1.png'>";
						echo "<h3>" . $sports1Author . "</h3>";
					}else if(strpos($url,'action=sports2') !== false){
						echo "<h1>" . $sports2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/sportsArticleBlock2.png'>";
						echo "<h3>" . $sports2Author . "</h3>";
					}else if(strpos($url,'action=sports3') !== false){
						echo "<h1>" . $sports3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/sportsArticleBlock3.png'>";
						echo "<h3>" . $sports3Author . "</h3>";
					}else{
						echo "<h1>" . $sports . "</h1>";
						echo "<img class='frontPageArticle ' src='images/mainSportsArticle.png'>";
						echo "<h3>" . $sportsAuthor . "</h3>";
					}
					
				}else if(strpos($url,'action=news') !== false){
					if(strpos($url,'action=news1') !== false){
						echo "<h1>" . $news1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/newsArticleBlock1.png'>";
						echo "<h3>" . $news1Author . "</h3>";
					}else if(strpos($url,'action=news2') !== false){
						echo "<h1>" . $news2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/newsArticleBlock2.png'>";
						echo "<h3>" . $news2Author . "</h3>";
					}else if(strpos($url,'action=news3') !== false){
						echo "<h1>" . $news3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/newsArticleBlock3.png'>";
						echo "<h3>" . $news3Author . "</h3>";
					}else{
						echo "<h1>" . $news . "</h1>";
						echo "<img class='frontPageArticle ' src='images/mainNewsArticle.png'>";
						echo "<h3>" . $newsAuthor . "</h3>";
					}
				}else{
					if(strpos($url,'action=index1') !== false){
						echo "<h1>" . $index1 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/articleBlock1.png'>";
						echo "<h3>" . $index1Author . "</h3>";
					}else if(strpos($url,'action=index2') !== false){
						echo "<h1>" . $index2 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/articleBlock2.png'>";
						echo "<h3>" . $index2Author . "</h3>";
					}else if(strpos($url,'action=index3') !== false){
						echo "<h1>" . $index3 . "</h1>";
						echo "<img class='frontPageArticle ' src='images/articleBlock3.png'>";
						echo "<h3>" . $index3Author . "</h3>";
					}else{
						echo "<h1>" . $index . "</h1>";
						echo "<img class='frontPageArticle tallPic' src='images/mainArticle.png'>";
						echo "<h3>" . $indexAuthor . "</h3>";
					}
				}
			?>
			<p>
				<?php
					include "fileReader.php";
					if(strpos($url,'action=campus') !== false){
						if(strpos($url,'action=campus1') !== false){
							$docObj = new DocxConversion("articles/campusLifeArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=campus2') !== false){
							$docObj = new DocxConversion("articles/campusLifeArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=campus3') !== false){
							$docObj = new DocxConversion("articles/campusLifeArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainCampusLifeArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else if(strpos($url,'action=opinion') !== false){
						if(strpos($url,'action=opinion1') !== false){
							$docObj = new DocxConversion("articles/opinionArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=opinion2') !== false){
							$docObj = new DocxConversion("articles/opinionArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=opinion3') !== false){
							$docObj = new DocxConversion("articles/opinionArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainOpinionArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else if(strpos($url,'action=art') !== false){
						if(strpos($url,'action=art1') !== false){
							$docObj = new DocxConversion("articles/artArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=art2') !== false){
							$docObj = new DocxConversion("articles/artArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=art3') !== false){
							$docObj = new DocxConversion("articles/artArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainArtArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else if(strpos($url,'action=sports') !== false){
						if(strpos($url,'action=sports1') !== false){
							$docObj = new DocxConversion("articles/sportsArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=sports2') !== false){
							$docObj = new DocxConversion("articles/sportsArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=sports3') !== false){
							$docObj = new DocxConversion("articles/sportsArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainSportsArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else if(strpos($url,'action=news') !== false){
						if(strpos($url,'action=news1') !== false){
							$docObj = new DocxConversion("articles/newsArticleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=news2') !== false){
							$docObj = new DocxConversion("articles/newsArticleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=news3') !== false){
							$docObj = new DocxConversion("articles/newsArticleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainNewsArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}else{
						if(strpos($url,'action=index1') !== false){
							$docObj = new DocxConversion("articles/articleBlock1.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=index2') !== false){
							$docObj = new DocxConversion("articles/articleBlock2.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else if(strpos($url,'action=index3') !== false){
							$docObj = new DocxConversion("articles/articleBlock3.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}else{
							$docObj = new DocxConversion("articles/mainArticle.docx");
							$docText = $docObj->convertToText();
							echo nl2br(nl2br($docText));
						}
					}
					
					
				?>
			</p>
        </article>
    </body>
>>>>>>> fc49e85d4791137ce6ac02ee428ab3b9f1a112f0
</html>