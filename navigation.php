<html>
<head>
<style>
ul {
    list-style-type: none;
    margin:20;
    padding:0;
    overflow:hidden;
    background-color: #336;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: red;
    text-align: center;
    padding: 18px 30px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/RMK_Engineering_College.gif/220px-RMK_Engineering_College.gif
" alt="R.M.K ENGINEERING COLLEGE" style="width:180px;height:200px;" align="top">

<img src="http://icacci-conference.org/images/rmk22.gif" alt="R.M.K ENGINEERING COLLEGE" style="width:1100px;height:200px;" align="right">

 
<h1><marquee>R.M.K ENGINEERING COLLEGE</marquee></h1>
<?php
{
$regno = $_SESSION['login_user'];
}
?>
<ul>
  <li><a href="navigation.php">Home</a></li>
  <li><a href="studentprofile.php">Profile</a></li>  
<li><a href="#news">Update password</a></li>
  <li><a href="#exam marks">internalmarks</a><li>
  <li><a href="#news">result</a></li>
  <li><a href="#news">Notes</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>
</html>

