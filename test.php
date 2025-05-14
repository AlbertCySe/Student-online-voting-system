<!DOCTYPE html>
<html lang="en">
<head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: poppins;
    }
    
    .side-navbar {
        height: 100vh;
        width: 100px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: indigo;
        overflow-x: hidden;
        padding-top: 0;
    }
    
    .side-navbar a {
        padding: 80px 5px 10px 20px;
        text-decoration: none;
        font-size: 15px;
        display: block;
        text-transform: uppercase;
        color: #fff;
    }
    
    .side-navbar a:hover {
        color: deeppink;
    }
    
    .content-area {
        margin-left: 230px;
        padding: 0 10px;
    }
    
    .menu-bar {
        background: indigo;
        text-align: center;
    }
    
    .menu-bar ul {
        display: inline-flex;
        list-style: none;
        color: #fff;
    }
    
    .menu-bar ul li {
        width: 120px;
        margin: 15px;
        padding: 5px;
    }
    
    .menu-bar ul li a {
        text-decoration: none;
        color: #fff;
    }
    
    .sub-menu-1 {
        display: none;
    }
    
    .menu-bar ul li:hover .sub-menu-1 {
        display: block;
        position: absolute;
        background: #B73049;
        margin-top: 15px;
        margin-left: -15px;
    }
    
    .menu-bar ul li:hover .sub-menu-1 ul {
        display: block;
        margin: 10px;
    }
    
    .menu-bar ul li:hover .sub-menu-1 ul li {
        width: 150px;
        padding: 10px;
        border-bottom: 1px solid #fff;
        background: transparent;
        border-radius: 0;
        text-align: left;
    }
    
    .menu-bar ul li:hover .sub-menu-1 ul li:last-child {
        border-bottom: none;
    }
    
    .menu-bar ul li:hover .sub-menu-1 ul li a:hover {
        color: #6964EE;
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
</body>
</html>