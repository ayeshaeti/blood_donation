<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
    
}
$res=mysql_query("SELECT * FROM users WHERE username=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>CSS MenuMaker</title>
</head>
<body>

<div id='cssmenu'>
<ul>
    <li class='active'><a href='home.php'>Home</a></li>
   <li><a href='insert.php'>Insert</a></li>
   <li><a href='update.php'>Update</a></li>
   <li><a href='delete.php'>Delete</a></li>
   <li><a href='search.php'>Search</a></li>
</ul>
</div>

</body>
<html><html class="" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome to Blood Donation Management </title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body><html class="" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome to Blood Donation Management </title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="header">
	<div id="left">
    <label>Blood Donation Management</label>
    </div>
    <div id="right">
    	<div id="content">
            hi <?php session_start();
echo $_SESSION ['user'];?><a href="logout.php?logout"> Sign Out</a>
        </div>
    </div>
</div>
<div id="body">
	<a>Welcome to Blood Donation Management</a>
    </div><div style="margin-top: 100px;" class="container">
      <h1 class="page-title">Develop By</h1>

            
          <section class="section stories-other">
    <div style="margin-top: 50px;" class="container">
      
      
        <ul class="stories">
    <li style="padding-left: 0px; padding-right: 0px; margin-left: auto; margin-right: auto;" class="person hcard">
      <ul style="margin-left: -42px;" class="head-stats">
                <li style="margin-left: 0px;" class="stat-worldwide"><strong style="margin-bottom: 15px;">Woliul Hasan</strong>Dept. CSE</li>
          <li style="margin-top: 95px; margin-left: -310px;" class="stat-worldwide">Id. 133400017</li>  
      </ul>
      
      
    <img style="margin-left: -95px;" src="f2.jpg" alt=""></li>
    
    <li style="margin-left: 430px;" class="person hcard">
      <ul style="margin-left: -50px;" class="head-stats">
          <li class="stat-worldwide"><strong style="padding-top: 0px; margin-bottom: 15px;">Yousuf Al Azad</strong></li>
          <li style="margin-right: 0px; margin-left: -310px; margin-top: 95px;">Id. 133400017</li>
          <li style="margin-left: -310px; margin-top: 60px;">Dept. CSE</li>
      </ul>
      
      
    <img style="margin-left: -97px;" src="f1.jpg" alt=""></li>
  </ul>
    </div>
  </section></div>
    

</body></html>