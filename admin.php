<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
<style>
body
{
	font-family:poppins;
}
.side-navbar{
	height:100%;
	width:100px;
	position:fixed;
	z-index:1;
	top:0;
	left:0;
	background-color:indigo;
	overflow-x:hidden;
	padding-top:0px;
}
.side-navbar a{
	padding:80px 5px 10px  20px;
	text-decoration:none;
	font-size:15px;
	display:block;
	text-transform:uppercase;
	color:#fff;
}
.side-navbar a:hover{
	color:deeppink;
}
.content-area{
	margin-left:230px;
	pading:0 10px;
}


*
{
	padding: 0;
	margin: 0;
	box-sizing:border-box;
}
.menu-bar
{
	background:indigo;
	text-align:center;
}
.menu-bar ul 
{
	display:inline-flex;
	list-style:none;
	color: #fff;
}
.menu-bar ul li
{
	width:120px;
	margin:15px;
	padding:5px;
}
.menu-bar ul li a 
{
	
	text-decoration:none;
	color: #fff;
	
}

.sub-menu-1
{
	display:none;
}
.menu-bar ul li:hover .sub-menu-1
{
	display:block;
	position:absolute;
	background:#B73049;
	margin-top:15px;
	margin-left:-15px;
}
.menu-bar ul li:hover .sub-menu-1 ul
{
	
	display:block;
	border-radius:10px;
	position:absolute;
	background:purple;
	margin-top:5px;
	margin-left:-15px;
	transition: 0.3s;
}
.menu-bar ul li:hover .sub-menu-1 ul li
{
	width:150px;
	padding:10px;
	border-bottom: 1px dotted #fff;
	background:transparent;
	border-radius:0;
	text-align:left;
}
.menu-bar ul li:hover .sub-menu-1 ul li:last-child
{
	border-bottom:none;
}
.menu-bar ul li:hover .sub-menu-1 ul li a:hover
{
	color:#6964EE ;
}
</style>
<meta char set="UTF-8">
<title>Admin Page</title>

</head>
<body>
<div class="menu-bar">
<ul>
<li><a style="font-family:algerian;font-size:200%;" > Admin</a></style>
</li>

 <li>
 </li>
 <li>
 </li>
 <li>
 </li>
 <li>
 </li>
 <li>
 </li>
 
<li><a  href="#">Logout</a>
<div class="sub-menu-1">
	     <ul>
		 <li><a href="home.php">Logout</a></li>
	     </ul>
		 </div>
		 </li>
</ul>


      <div class="side-navbar">
     <a href="student.php">Upload Student Details</a>
      <a href="printstudent.php">View Student Details</a>
      <a href="printnominate.php">Nominators-2023</a>
	  <a href="result.php">View Result-2023</a>
</div>
</div>
</div>
<h2 style="text-align:center;font-family:algerian;font-size:300%;">St.Joseph's College , Tiruchirappalli</h2>
<h2 style="text-align:center;font-family:'Brush Script MT', cursive;font-size:250%;">Department Of Computer Science</h2>
<h2 style="text-align:center;font-family:'Brush Script MT', cursive;font-size:250%;">Online Voting - 2023</h2>
</body>
</html>