<?php
session_start();

include_once 'dbconnect.php';

if (isset($_POST['update'])) {
    $uid = $_POST['uid'];
    $bid = $_POST['bid'];
    $date = $_POST['date'];

    if (mysql_query("UPDATE `demand` SET `dpid`='$uid',`bagid`='$bid',`date`='$date' WHERE `dpid` = $uid")) {
        ?>

        <script>alert('successfully registered ');</script>
        <?php
    } else {
        ?>
        <script>alert('error while registering you...');</script>
        <?php
    }
}
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
   <title>Insert any Data in Database</title>
</head>
<body>

<div id='cssmenu'>
<ul>
    <li><a href='home.php'>Home</a></li>
   <li><a href='insert.php'>Insert</a></li>
   <li class='active'><a href='update.php'>Update</a></li>
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
	<a>Update Database</a>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome to Blood Donation Management</title>
        <link rel="stylesheet" href="style.css" type="text/css" />

    </head>
    <body>
        <center>
            <div id="login-form">
                <form method="post">
                    <table align="center" width="30%" border="0">
                          <tr>
                            <td><input type="text" name="uid" placeholder="Patient ID" required /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="bid" placeholder="Bag ID" required /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="date" placeholder="Date" required /></td>
                        </tr>
                        <tr>
                        <tr>
                            <td><button type="submit" name="update">Update</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </center>
    </body>
</html>
   
  </section></div>
    

</body></html>