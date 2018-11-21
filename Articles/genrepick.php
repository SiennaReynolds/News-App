<html>
<head>
<style type= "text/css">
body{
	background:#D5DED9;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3);
	border:3px solid white;
	border-radius:5px;
	margin:15px;
	color:#3f4446;
	text-align:center;
	text-decoration:none;
	text-transform:uppercase;
	font-family:open sans;
	font-size:30px;
}
.x{
	background: #465968;
    width: 97.2%;
    height: 94.5%;
    opacity: .7;
    border-radius: 5px;
    position: fixed;
    left: 18px;
    top: 18px;
    z-index: -1;
}
.articlebox{
	width: 20%;
    height: 45%;
	margin:5px;
	/*background:white;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3);*/
	word-break: break-word;
    overflow: auto;
}
.restart{
	position: absolute;
    bottom: 5%;
    left: 50%;
    font-size: 30px;
    border: 3px solid white;
	color:white;
    padding: 5px;
    border-radius: 100%;
	background:#E3CC86;
	transition: all 0.5s ease-out;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3);
}
.restart:hover{
	background:#AE9D78;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 14px 8px rgba(0,0,0,.3);
}
.innertext{
	font-size:20px;
}
.innertext2{
	font-size:5px;
	color: #2E4347;
}
.innertext3{
	font-size:10px;
}
.flowbox{
	display: flex;
    width: 100%;
    height: auto;
}
.display-none{
	display:none;
}
::-webkit-scrollbar {
			position:absolute;
			z-index:1000;
			height:5px;
			width:5px;
		}
		::-webkit-scrollbar-track {
			background: #f1f1f1; 
		}
		::-webkit-scrollbar-thumb {
			background: #274B52; 
			border-radius: 1px;
			
		}
		::-webkit-scrollbar-thumb:window-inactive {
			background: #505A53; 
		}
		
		::selection {
            background: #a7b6b9;
            color: black;
            }
            
            ::-moz-selection {
            background: #ffb26e;
            color: black;
            }
            
            ::-webkit-selection {
            background: #ffb26e;
            color: black;
            }
</style>
</head>
<body id = "body">
<script src="https://use.fontawesome.com/4fe18aaa6f.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans|Poiret+One" rel="stylesheet">
	<div class = "x"></div>
	<div class = "y" id = "y"></div>
	<div class="flowbox">
		<div class="articlebox" id= "a">
		<div class = "innertext" id = "a1"></div>
		<div class = "innertext2" id = "a2"></div>
		<div class = "innertext3" id = "a3"></div>
		</div>
		<div class="articlebox" id= "b">
		<div class = "innertext" id = "b1"></div>
		<div class = "innertext2" id = "b2"></div>
		<div class = "innertext3" id = "b3"></div>
		</div>
		<div class="articlebox" id= "c">
		<div class = "innertext" id = "c1"></div>
		<div class = "innertext2" id = "c2"></div>
		<div class = "innertext3" id = "c3"></div>
		</div>
		<div class="articlebox" id= "d">
		<div class = "innertext" id = "d1"></div>
		<div class = "innertext2" id = "d2"></div>
		<div class = "innertext3" id = "d3"></div>
		</div>
		<div class="articlebox" id= "e">
		<div class = "innertext" id = "e1"></div>
		<div class = "innertext2" id = "e2"></div>
		<div class = "innertext3" id = "e3"></div>
		</div>
	</div>
	<div class="flowbox">
		<div class="articlebox" id= "f">
		<div class = "innertext" id = "f1"></div>
		<div class = "innertext2" id = "f2"></div>
		<div class = "innertext3" id = "f3"></div>
		</div>
		<div class="articlebox" id= "g">
		<div class = "innertext" id = "g1"></div>
		<div class = "innertext2" id = "g2"></div>
		<div class = "innertext3" id = "g3"></div>
		</div>
		<div class="articlebox" id= "h">
		<div class = "innertext" id = "h1"></div>
		<div class = "innertext2" id = "h2"></div>
		<div class = "innertext3" id = "h3"></div>
		</div>
		<div class="articlebox" id= "i">
		<div class = "innertext" id = "i1"></div>
		<div class = "innertext2" id = "i2"></div>
		<div class = "innertext3" id = "i3"></div>
		</div>
		<div class="articlebox" id= "j">
		<div class = "innertext" id = "j1"></div>
		<div class = "innertext2" id = "j2"></div>
		<div class = "innertext3" id = "j3"></div>
		</div>
	</div>
	<a class = "restart" href= "/ScoreArticlesPage.html"><i class="fa fa-reply" aria-hidden="true"></i></a>
<?php
	$genre = $_GET["genre"];
	$count = 0;
	$link = mysqli_connect("name", "username", "password","gsudbproject_fall2018") or die(mysql_error());
	$check = mysqli_query($link,"SELECT title,text_body,news_site_name,articles.news_site_id FROM gsudbproject_fall2018.articles,gsudbproject_fall2018.sites WHERE genre_id = '$genre' AND sites.news_site_id = articles.news_site_id") or die(mysql_error());
	
	
	//$check = mysqli_query($link,"SELECT email,username FROM gsudbproject_fall2018.users") or die(mysql_error());
	
	if ($check && mysqli_num_rows($check) > 0){
		echo "<script type='text/javascript'> document.getElementById('y').innerHTML = 'Here are some articles from this genre';</script>";
			
		while ($row = mysqli_fetch_assoc($check)) {
			switch($count){
				case 0:
					$ver = 'a';
					$genre_name = 'Sports';
					break;
				case 1:
					$ver = 'b';
					$genre_name = 'News';
					break;
				case 2:
					$ver = 'c';
					$genre_name = 'Politics';
					break;
				case 3:
					$ver = 'd';
					$genre_name = 'Weather';
					break;
				case 4:
					$ver = 'e';
					$genre_name = 'Technology';
					break;
				case 5:
					$ver = 'f';
					$genre_name = 'Opinion';
					break;
				case 6:
					$ver = 'g';
					$genre_name = 'Local';
					break;
				case 7:
					$ver = 'h';
					$genre_name = 'Finance';
					break;
				case 8:
					$ver = 'i';
					$genre_name = 'Recreation';
					break;
				case 9:
					$ver = 'j';
					$genre_name = 'Crime';
					break;
			}
			//echo "<script type='text/javascript'> document.getElementById('",$ver,"').innerHTML = '", $row['title'] ," - ", $row['news_site_name'],"';</script>";
			echo "<script type='text/javascript'> document.getElementById('",$ver,"1').innerHTML = '", $row['title'] ," from ", $row['news_site_name'],"';</script>";
			//Put Scores here
			echo "<script type='text/javascript'> document.getElementById('",$ver,"3').innerHTML = '", $row['text_body'] ,"';</script>";
			echo "<script type='text/javascript'> document.getElementById('",$ver,"').style.background = 'white';</script>";
			echo "<script type='text/javascript'> document.getElementById('",$ver,"').style.boxShadow = '0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3)';</script>";
			$count = $count + 1;
		}	
	}
  
	else{
		echo "<script type='text/javascript'> document.getElementById('y').innerHTML = 'No articles within that genre.';</script>";
		echo "<script type ='text/javascript'>$('.articlebox').addClass('display-none');</script>";
	}
	?>
	
	</body>
</html>
