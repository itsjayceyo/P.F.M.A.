<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="@itsjayceyo">
<title>PFMA</title>
<meta name="description" content="Define cultural iron..."/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="69.jpg" />
<link rel="icon" href="69.jpg">

<!-- Chrome, Firefox OS, Opera and Vivaldi -->
<meta name="theme-color" content="#e74c3c" />
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#e74c3c">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#e74c3c">


<!-- Link google font -->
<link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu" rel="stylesheet">



<!-- Stylesheet [SHOULD ONLY NEED THE ONE LOL] -->
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />


<!-- jquery link -->
<script data-require="jquery" data-semver="2.1.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<script type="text/javascript" charset="utf-8">

	
	$(document.body).ready(function () {
		var lines;
		var randomNumber;
		var lastRandomNumber;



	  // load the doc from the server
	  $.ajax({
	    url: 'Aword.csv'
	  }).done(function(content) {

	    // normalize the line breaks, then split into lines
	    lines = content.replace(/\r\n|\r/g, '\n').trim().split('\n');


	    // only set up the click handler if there were lines found
	    if (lines && lines.length) {
	      $('#defineMe').on('click', function () {
	        // loop to prevent repeating the last random number
	        while (randomNumber === lastRandomNumber) {
	          randomNumber = parseInt(Math.random() * lines.length);
	          // check to prevent infinite loop
	          if (lines.length === 1) { break; }
	        }
	        // keep track of the last random number
	        lastRandomNumber = randomNumber;

	        // show the corresponding line
	        $('#randomWordA').text(lines[randomNumber].toUpperCase());
	      });
	    }
	  });
	});



	$(document.body).ready(function () {
	var lines;
	var randomNumber;
	var lastRandomNumber;



	  // load the doc from the server
	  $.ajax({
	    url: 'Mword.csv'
	  }).done(function(content) {

	    // normalize the line breaks, then split into lines
	    lines = content.replace(/\r\n|\r/g, '\n').trim().split('\n');


	    // only set up the click handler if there were lines found
	    if (lines && lines.length) {
	      $('#defineMe').on('click', function () {
	        // loop to prevent repeating the last random number
	        while (randomNumber === lastRandomNumber) {
	          randomNumber = parseInt(Math.random() * lines.length);
	          // check to prevent infinite loop
	          if (lines.length === 1) { break; }
	        }
	        // keep track of the last random number
	        lastRandomNumber = randomNumber;

	        // show the corresponding line
	        $('#randomWordM').text(lines[randomNumber].toUpperCase());
	      });
	    }
	  });
	});

	$(document.body).ready(function () {
	var lines;
	var randomNumber;
	var lastRandomNumber;



	  // load the doc from the server
	  $.ajax({
	    url: 'Fword.csv'
	  }).done(function(content) {

	    // normalize the line breaks, then split into lines
	    lines = content.replace(/\r\n|\r/g, '\n').trim().split('\n');


	    // only set up the click handler if there were lines found
	    if (lines && lines.length) {
	      $('#defineMe').on('click', function () {
	        // loop to prevent repeating the last random number
	        while (randomNumber === lastRandomNumber) {
	          randomNumber = parseInt(Math.random() * lines.length);
	          // check to prevent infinite loop
	          if (lines.length === 1) { break; }
	        }
	        // keep track of the last random number
	        lastRandomNumber = randomNumber;

	        // show the corresponding line
	        $('#randomWordF').text(lines[randomNumber].toUpperCase());
	      });
	    }
	  });
	});

	$(document.body).ready(function () {
	var lines;
	var randomNumber;
	var lastRandomNumber;



	  // load the doc from the server
	  $.ajax({
	    url: 'Pword.csv'
	  }).done(function(content) {

	    // normalize the line breaks, then split into lines
	    lines = content.replace(/\r\n|\r/g, '\n').trim().split('\n');


	    // only set up the click handler if there were lines found
	    if (lines && lines.length) {
	      $('#defineMe').on('click', function () {
	        // loop to prevent repeating the last random number
	        while (randomNumber === lastRandomNumber) {
	          randomNumber = parseInt(Math.random() * lines.length);
	          // check to prevent infinite loop
	          if (lines.length === 1) { break; }
	        }
	        // keep track of the last random number
	        lastRandomNumber = randomNumber;

	        // show the corresponding line
	        $('#randomWordP').text(lines[randomNumber].toUpperCase());
	      });
	    }
	  });
	});




</script>

</head>




	















<body>


<h1> A feeling? </h1>
<h1> A way of life? </h1>
<h1> A rallying battlecry? </h2>





<div id="wrapper">
	<div>
		<p id="randomWordP">
			<?php
			
				$f_contents = file("Pword.csv");
				$line = $f_contents[array_rand($f_contents)];
				$data = $line;
				echo strtoupper("$line");
	
			?>		

		</p>
		<p id="randomWordF">
			<?php
			
				$f_contents = file("Fword.csv");
				$line = $f_contents[array_rand($f_contents)];
				$data = $line;
				echo strtoupper("$line");
	
			?>		
			

		</p>
		<p id="randomWordM">
			<?php
			
				$f_contents = file("Mword.csv");
				$line = $f_contents[array_rand($f_contents)];
				$data = $line;
				echo strtoupper("$line");
	
			?>		
			

		</p>
		<p id="randomWordA">
			<?php
			
				$f_contents = file("Aword.csv");
				$line = $f_contents[array_rand($f_contents)];
				$data = $line;
				echo strtoupper("$line");
	
			?>		
			

		</p>
	</div>

	<hr>
	<div id="theButton">
		<a id="defineMe" class="theButton" href="#">
		    What does it mean to you?
		</a>
	</div>

</div>




</body>
	




</html>