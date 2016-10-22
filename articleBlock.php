<<<<<<< HEAD
<html>
    <head>
        
    </head>
    <body>
        <?php
		
		//Sub headlines
		
		$indexSub1 = "Supporters of a statewide minimum wage increase say it will boost the economy by putting more money into a worker's pocket.";
		$indexSub2 = "Highline student Shemara Larkin looked surprisingly serene and calm despite the darkness of the events she was describing.";
		$indexSub3 = "Many students who leave their cars in the Lowe's parking lot may come back to find something missing.";
		
		$artSub1 = "Teens in King County can get steeply discounted tickets to major arts events through a program called TeenTix";
		$artSub2 = "Between the books, bodies and backpacks on campus, a world only visible through the screen of your cell phone exists.";
		$artSub3 = "Students and families in the Des Moines and surrounding areas have a spooktacular array of Halloween festivities this October.";
		
		$opinionSub1 = "Abuse cycle is tough to break.";
		$opinionSub2 = "We all have our own opinions. It's OK to be different to share a different opinion than others. However, what I don't think is acceptable is to personally start attacking each other.";
		$opinionSub3 = "Your vote is your vote.  Voting is a right that every U.S. citizen has.";
		
		$sportsSub1 = "Jason Rodriguez is a 19-year old who has pursued becoming a professional soccer player most of his life.";
		$sportsSub2 = "The Highline women's volleyball team defeated Grays Harbor Oct. 12 in Aberdeen.";
		$sportsSub3 = "The T-Birds men's soccer team clinched a playoff berth with their latest win.";
		
		$newsSub1 = "Your opportunities may be limited by the candidates that get elected into office.";
		$newsSub2 = "Supporters of the Sound Transit 3 project say it is the best option to cut down on the traffic congestion many commuters face daily.";
		$newsSub3 = "National Coming Out Day is Tuesday, Oct. 11 and PFLAG will be hosting a discussion of the coming out process in Building 8.";
		
		$campusSub1 = "The COMPASS reading and writing tests, the bane of all unprepared college applicants, are no more.";
		$campusSub2 = "Highline student Eric Garay won a Highline College Student Achievement Award for 2015-16.";
		$campusSub3 = "One Highline professor understands that students need a little TLC.";
		
		
        if(strpos($url,'action=campus') !== false){
					echo "<div class='block'>
                    
                    <div class='headlines'>
                        <img src='images/logos/campusLifeLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/campusLifeArticleBlock1.png'>
                        <a href='index.php?action=campus1'>
                            <h2>$campus1</h2></a>
                            <p>$campusSub1</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/campusLifeLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/campusLifeArticleBlock2.png'>
                        <a href='index.php?action=campus2'>
                        <h2>$campus2</h2></a>
                            <p>$campusSub2</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/campusLifeLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/campusLifeArticleBlock3.png'>
                        <a href='index.php?action=campus3'>
                            <h2>$campus3</h2>
                        </a>
                            <p>$campusSub3</p>
                    </div>
                  

            </div>";
					}else if(strpos($url,'action=opinion') !== false){
						echo "<div class='block'>
            <div class='headlines'>
                <img src='images/logos/opinionLogo.png' class='headlineLogo'>
                <img class='thumb' src='images/opinionArticleBlock1.png'>
                <a href='index.php?action=opinion1'>
                    <h2>$opinion1</h2></a>
                    <p>$opinionSub1</p>
            </div>
            <br>
            <div class='headlines'>
                <img src='images/logos/opinionLogo.png' class='headlineLogo'>
                <img class='thumb' src='images/opinionArticleBlock2.png'>
                <a href='index.php?action=opinion2'>
                <h2>$opinion2</h2></a>
                    <p>$opinionSub2</p>
            </div>
            <br>
            <div class='headlines'>
                <img src='images/logos/opinionLogo.png' class='headlineLogo'>
                <img class='thumb' src='images/opinionArticleBlock3.png'>
                <a href='index.php?action=opinion3'>
                    <h2>$opinion3</h2></a>
                    <p>$opinionSub3</p>
            </div>
             
        </div>";
					}else if(strpos($url,'action=art') !== false){
                        echo"
						 <div class='block'>
                    <div class='headlines'>
                        <img src='images/logos/artLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/artArticleBlock1.png'>
                        <a href='index.php?action=art1'>
                            <h2>$art1</h2></a>
                            <p>$artSub1</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/artLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/artArticleBlock2.png'>
                        <a href='index.php?action=art2'>
                        <h2>$art2</h2></a>
                            <p>$artSub2</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/artLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/artArticleBlock3.png'>
                        <a href='index.php?action=art3'>
                            <h2>$art3</h2>
                        </a>
                            <p>$artSub3</p>
                    </div>
                    
                  
            </div>";
					}else if(strpos($url,'action=sports') !== false){
						echo "<div class='block'>
                    <div class='headlines'>
                        <img src='images/logos/sportsLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/sportsArticleBlock1.png'>
                        <a href='index.php?action=sports1'>
                            <h2>$sports1</h2></a>
                            <p>$sportsSub1</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/sportsLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/sportsArticleBlock2.png'>
                        <a href='index.php?action=sports2'>
                        <h2>$sports2</h2></a>
                            <p>$sportsSub2</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/sportsLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/sportsArticleBlock3.png'>
                        <a href='index.php?action=sports3'>
                            <h2>$sports3</h2></a>
                            <p>$sportsSub3</p>
                    </div>
                    
            </div>";
					}else if(strpos($url,'action=news') !== false){
						echo "<div class='block'>
                
                <div class='headlines'>
                    <img src='images/logos/newsLogo.png' class='headlineLogo'>
                    <img class='thumb' src='images/newsArticleBlock1.png'>
                    <a href='index.php?action=news1'>
                        <h2>$news1</h2></a>
                        <p>$newsSub1</p>
                </div>
                <br>
                <div class='headlines'>
                    <img src='images/logos/newsLogo.png' class='headlineLogo'>
                    <img class='thumb' src='images/newsArticleBlock2.png'>
                    <a href='index.php?action=news2'>
                        <h2>$news2</h2></a>
                        <p>$newsSub2</p>
                </div>
                <br>
                <div class='headlines'>
                    <img src='images/logos/newsLogo.png' class='headlineLogo'>
                    <img class='thumb' src='images/newsArticleBlock3.png'>
                    <a href='index.php?action=news3'>
                        <h2>$news3</h2>
                    </a>
                        <p>$newsSub3</p>
                </div>
            
               
                
        </div>";
					}else{
						echo "<div class='block'>
            <div class='headlines'>
                <img src='images/logos/thunderwordlogoSmall.png' class='headlineLogo'>
                <img class='thumb' src='images/articleBlock1.png'>
                <a href='index.php?action=index1'>
                    <h2>$index1</h2></a>
                    <p>$indexSub1</p>
                    <br><br>
                    
            </div>
            <br>
            <div class='headlines'>
                <img src='images/logos/thunderwordlogoSmall.png' class='headlineLogo'>
                <img class='thumb' src='images/articleBlock2.png'>
                <a href='index.php?action=index2'>
                <h2>$index2</h2></a>
                    <p>$indexSub2</p>
            </div>
            <br>
            <div class='headlines'>
                <img src='images/logos/thunderwordlogoSmall.png' class='headlineLogo'>
                <img class='thumb' src='images/articleBlock3.png'>
                <a href='index.php?action=index3'>
                    <h2>$index3</h2>
                </a>
                    <p>$indexSub3</p>
            </div>
            </div>";
					}
        ?>
        
    </body>
=======
<html>
    <head>
        
    </head>
    <body>
        <?php
		
		//Sub headlines
		
		$indexSub1 = "Supporters of a statewide minimum wage increase say it will boost the economy by putting more money into a worker's pocket.";
		$indexSub2 = "Highline student Shemara Larkin looked surprisingly serene and calm despite the darkness of the events she was describing.";
		$indexSub3 = "Many students who leave their cars in the Lowe's parking lot may come back to find something missing.";
		
		$artSub1 = "Teens in King County can get steeply discounted tickets to major arts events through a program called TeenTix";
		$artSub2 = "Between the books, bodies and backpacks on campus, a world only visible through the screen of your cell phone exists.";
		$artSub3 = "Students and families in the Des Moines and surrounding areas have a spooktacular array of Halloween festivities this October.";
		
		$opinionSub1 = "Abuse cycle is tough to break.";
		$opinionSub2 = "We all have our own opinions. It's OK to be different to share a different opinion than others. However, what I don't think is acceptable is to personally start attacking each other.";
		$opinionSub3 = "Your vote is your vote.  Voting is a right that every U.S. citizen has.";
		
		$sportsSub1 = "Jason Rodriguez is a 19-year old who has pursued becoming a professional soccer player most of his life.";
		$sportsSub2 = "The Highline women's volleyball team defeated Grays Harbor Oct. 12 in Aberdeen.";
		$sportsSub3 = "The T-Birds men's soccer team clinched a playoff berth with their latest win.";
		
		$newsSub1 = "Your opportunities may be limited by the candidates that get elected into office.";
		$newsSub2 = "Supporters of the Sound Transit 3 project say it is the best option to cut down on the traffic congestion many commuters face daily.";
		$newsSub3 = "National Coming Out Day is Tuesday, Oct. 11 and PFLAG will be hosting a discussion of the coming out process in Building 8.";
		
		$campusSub1 = "The COMPASS reading and writing tests, the bane of all unprepared college applicants, are no more.";
		$campusSub2 = "Highline student Eric Garay won a Highline College Student Achievement Award for 2015-16.";
		$campusSub3 = "One Highline professor understands that students need a little TLC.";
		
		
        if(strpos($url,'action=campus') !== false){
					echo "<div class='block'>
                    
                    <div class='headlines'>
                        <img src='images/logos/campusLifeLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/campusLifeArticleBlock1.png'>
                        <a href='index.php?action=campus1'>
                            <h2>$campus1</h2></a>
                            <p>$campusSub1</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/campusLifeLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/campusLifeArticleBlock2.png'>
                        <a href='index.php?action=campus2'>
                        <h2>$campus2</h2></a>
                            <p>$campusSub2</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/campusLifeLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/campusLifeArticleBlock3.png'>
                        <a href='index.php?action=campus3'>
                            <h2>$campus3</h2>
                        </a>
                            <p>$campusSub3</p>
                    </div>
                  

            </div>";
					}else if(strpos($url,'action=opinion') !== false){
						echo "<div class='block'>
            <div class='headlines'>
                <img src='images/logos/opinionLogo.png' class='headlineLogo'>
                <img class='thumb' src='images/opinionArticleBlock1.png'>
                <a href='index.php?action=opinion1'>
                    <h2>$opinion1</h2></a>
                    <p>$opinionSub1</p>
            </div>
            <br>
            <div class='headlines'>
                <img src='images/logos/opinionLogo.png' class='headlineLogo'>
                <img class='thumb' src='images/opinionArticleBlock2.png'>
                <a href='index.php?action=opinion2'>
                <h2>$opinion2</h2></a>
                    <p>$opinionSub2</p>
            </div>
            <br>
            <div class='headlines'>
                <img src='images/logos/opinionLogo.png' class='headlineLogo'>
                <img class='thumb' src='images/opinionArticleBlock3.png'>
                <a href='index.php?action=opinion3'>
                    <h2>$opinion3</h2></a>
                    <p>$opinionSub3</p>
            </div>
             
        </div>";
					}else if(strpos($url,'action=art') !== false){
                        echo"
						 <div class='block'>
                    <div class='headlines'>
                        <img src='images/logos/artLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/artArticleBlock1.png'>
                        <a href='index.php?action=art1'>
                            <h2>$art1</h2></a>
                            <p>$artSub1</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/artLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/artArticleBlock2.png'>
                        <a href='index.php?action=art2'>
                        <h2>$art2</h2></a>
                            <p>$artSub2</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/artLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/artArticleBlock3.png'>
                        <a href='index.php?action=art3'>
                            <h2>$art3</h2>
                        </a>
                            <p>$artSub3</p>
                    </div>
                    
                  
            </div>";
					}else if(strpos($url,'action=sports') !== false){
						echo "<div class='block'>
                    <div class='headlines'>
                        <img src='images/logos/sportsLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/sportsArticleBlock1.png'>
                        <a href='index.php?action=sports1'>
                            <h2>$sports1</h2></a>
                            <p>$sportsSub1</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/sportsLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/sportsArticleBlock2.png'>
                        <a href='index.php?action=sports2'>
                        <h2>$sports2</h2></a>
                            <p>$sportsSub2</p>
                    </div>
                    <br>
                    <div class='headlines'>
                        <img src='images/logos/sportsLogo.png' class='headlineLogo'>
                        <img class='thumb' src='images/sportsArticleBlock3.png'>
                        <a href='index.php?action=sports3'>
                            <h2>$sports3</h2></a>
                            <p>$sportsSub3</p>
                    </div>
                    
            </div>";
					}else if(strpos($url,'action=news') !== false){
						echo "<div class='block'>
                
                <div class='headlines'>
                    <img src='images/logos/newsLogo.png' class='headlineLogo'>
                    <img class='thumb' src='images/newsArticleBlock1.png'>
                    <a href='index.php?action=news1'>
                        <h2>$news1</h2></a>
                        <p>$newsSub1</p>
                </div>
                <br>
                <div class='headlines'>
                    <img src='images/logos/newsLogo.png' class='headlineLogo'>
                    <img class='thumb' src='images/newsArticleBlock2.png'>
                    <a href='index.php?action=news2'>
                        <h2>$news2</h2></a>
                        <p>$newsSub2</p>
                </div>
                <br>
                <div class='headlines'>
                    <img src='images/logos/newsLogo.png' class='headlineLogo'>
                    <img class='thumb' src='images/newsArticleBlock3.png'>
                    <a href='index.php?action=news3'>
                        <h2>$news3</h2>
                    </a>
                        <p>$newsSub3</p>
                </div>
            
               
                
        </div>";
					}else{
						echo "<div class='block'>
            <div class='headlines'>
                <img src='images/logos/thunderwordlogoSmall.png' class='headlineLogo'>
                <img class='thumb' src='images/articleBlock1.png'>
                <a href='index.php?action=index1'>
                    <h2>$index1</h2></a>
                    <p>$indexSub1</p>
                    <br><br>
                    
            </div>
            <br>
            <div class='headlines'>
                <img src='images/logos/thunderwordlogoSmall.png' class='headlineLogo'>
                <img class='thumb' src='images/articleBlock2.png'>
                <a href='index.php?action=index2'>
                <h2>$index2</h2></a>
                    <p>$indexSub2</p>
            </div>
            <br>
            <div class='headlines'>
                <img src='images/logos/thunderwordlogoSmall.png' class='headlineLogo'>
                <img class='thumb' src='images/articleBlock3.png'>
                <a href='index.php?action=index3'>
                    <h2>$index3</h2>
                </a>
                    <p>$indexSub3</p>
            </div>
            </div>";
					}
        ?>
        
    </body>
>>>>>>> fc49e85d4791137ce6ac02ee428ab3b9f1a112f0
</html>