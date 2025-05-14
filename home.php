<html>
<head>
<title>Home Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: Gainsboro;
 background-attachment: fixed;  
 background-size: cover;
}  

*
{
	padding: 0;
	margin: 0;
	box-sizing:border-box;
}

.menu-bar
{
	background:purple;
	text-align:center;
}
.menu-bar ul 
{
	display:inline-flex;
	list-style:none;
	color: #fff;
	padding: 0;
	margin: 0;
	box-sizing:border-box;
}
.menu-bar ul li
{
	width:150px;
	margin:3px;
	padding:10px;
	font-size: 1.2em;
	font-weight: bold;
	letter-spacing: 0.03em;
	text-transform: uppercase;

}
.menu-bar ul li a 
{
	text-decoration:none;
	color: #fff;
	display: block;
	transition: 0.3s;
	text-align: center;
}
.active, .menu-bar ul li:hover 
{
background:#CCAEB4 ;
	border-radius: 3px;
	transition: 0.3s;
}
.sub-menu-1
{
	display:none;
}
.menu-bar ul li:hover .sub-menu-1
{
	display:block;
	border-radius:10px;
	position:absolute;
	background:purple;
	background-color:rgba(0,0,0,.5);
	margin-top:10px;
	margin-left:0px;
	transition: 0.3s;
}
.menu-bar ul li:hover .sub-menu-1 ul
{
	display:block;
	margin:10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li
{
	width:110px;
	padding:20px;
	border-bottom: 1px dotted #fff;
	background:transparent;
	border-radius:0;
	text-align:left;
	font-size: 0.9em;
	font-weight: bold;
	letter-spacing: 0.03em;
	text-transform: uppercase;
	transition: 0.3s;

}
.menu-bar ul li:hover .sub-menu-1 ul li:last-child
{
	border-bottom:none;
	transition: 0.3s;

}
.menu-bar ul li:hover .sub-menu-1 ul li a:hover
{
	color:Chartreuse ;
	transition: 0.3s;

}
.carousel-inner img {
    width: 100%;
    height: 100%;
  }
  


</style>

</head>
<body>
    <div class="menu-bar">
	
<ul>
<li><a href="home.php"> Home </a>
      
		 </li>
<li><a href="#">Instruction</a>
<div class="sub-menu-1">
	     <ul>
		 <li><a href="instruct_nomi.php">Nomination</a></li>
		 <li><a href="instruct_vote.php">Voting</a></li>
		 </ul>
		 </div>
		 
 </li>
<li><a href="instruct_nomination.php">Nomination</a></li>

<li><a href="#">Login</a>
<div class="sub-menu-1">
	     <ul>
		 <li><a href="student_login.php">Student</a></li>
		 <li><a href="admin_login.php">Admin</a></li>
	     </ul>
		 </div>
		 </li>
<li><a href="#">Result</a>
<div class="sub-menu-1">
	     <ul>
		 <li><a href="result.php">Result-2023</a></li>
	     </ul>
		 </div>
		 </li>	
<li><a href="about.php">About</a></li>		 
		 
 </ul>
		 
		 
</div>
<h2 style="text-align:center;font-family:algerian;font-size:300%;">St.Joseph's College , Tiruchirappalli</h2>
<h2 style="text-align:center;font-family:'Brush Script MT', cursive;font-size:250%;">Department Of Computer Science</h2>
<h2 style="text-align:center;font-family:'Brush Script MT', cursive;font-size:250%;">Online Voting - 2023</h2>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
	<li data-target="#carousel-example-2" data-slide-to="3"></li>
		<li data-target="#carousel-example-2" data-slide-to="4"></li>
			<li data-target="#carousel-example-2" data-slide-to="5"></li>
				<li data-target="#carousel-example-2" data-slide-to="6"></li>
					<li data-target="#carousel-example-2" data-slide-to="7"></li>
						<li data-target="#carousel-example-2" data-slide-to="8"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="sjc9.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="sjc2.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      
    </div>
	<div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="vote2.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="sjc3.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
     
	   </div>
	    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="sjc6.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
	 <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="sjc7.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
	 <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="sjc8.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
	 <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="sjc4.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
	 <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="sjc5.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

</body>
</html>