<!DOCTYPE html> 
<html lang="ru"> 
<head> 
	<meta charset="utf-8">  
	<title>Главная</title> 
	<style type="text/css">

        body{
        font-family: sans-serif;
        font-size: 20px;
        background-image: url("https://img.freepik.com/free-vector/winter-blue-and-pink-gradient-background-vector_53876-117276.jpg");
        background-size: 100%;
        }

        th, td {
        padding: 15px;
        margin: 15px;
        text-align: left;
        }

		h1 {
  		font-size: 50px;
  		font-weight: 600;
  		background-image: linear-gradient(to left, #553c9a, #b393d3);
  		color: transparent;
  		background-clip: text;
  		-webkit-background-clip: text;
		}


		input[type="button"], [type="reset"]{
		width: 10%;
  		color: #9f9ad0;
  		font-size: 14px;
  		text-decoration: none;
  		margin-right: 30px;
 		border: 2px solid #9f9ad0;
  		text-transform: uppercase;
  		overflow: hidden;
		}


		input, textarea {
    	width: 20%;
    	height: 50px;
    	padding: 12px 20px;
        margin: 8px 8px;
        border: 0;
        border-radius: 30px;
        resize: none;
		}

	</style>
</head> 
<body>  
	<?php 
		include 'views/'.$content_view; 
	?> 
</body> 
</html> 