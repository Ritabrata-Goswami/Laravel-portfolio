<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
	<title>404 Not Found</title>
	<style type="text/css">
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
		}
		.container {
			margin: 0 auto;
			max-width: 700px;
			text-align: center;
			padding-top: 100px;
		}
		h1 {
			font-size: 50px;
			color: #444;
			margin-bottom: 15px;
		}
		p {
			font-size: 22px;
			color: red;
			margin-bottom: 30px;
			height: 10px;
		}
		.container{
			display: flex;
			flex-direction: column;
			padding: 1rem;
			/* border: 1px solid red; */
			border-radius: 5px;
			/* background-image: linear-gradient(#040e9d,#08b30b 55%, #f705a3 45%, green ); */
		}
		.img1{
			width: 185px;
			height: 130px;
			margin: 0 auto;
			display: block;
			filter: grayscale(50%);
		}
		.back-btn{margin-top: 80px;}
	</style>
</head>
<body>
	<div class="container">
		<div class="Rain">
		</div>
		
		<img class = "img1" src="./portfolio-files/photos/404.png"/>
		<div style="font-size:35px; margin-top:15px;">Page Not Found !</div>
		<p>We're sorry, but the page you requested could not be found.</p>
		<p>Please check the URL and try again.</p>
	</div>
	<div class="w3-center back-btn">
		<a href="/"><button class="w3-button w3-green w3-hover-black w3-btn">Go Back to Home</button></a>
	</div>

</body>
</html>
