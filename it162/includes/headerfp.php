<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Final Project</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/portal.css" />
  <link rel="stylesheet" href="../css/nav.css" />
 </head>
 <body style="background-color:rgb(75, 167, 39)">
 <header>
     <h1><a href="index.php"><i class="logo fa fa-home <?=$logo?>"></i>Nicholas's IT162 Website</a></h1>
     <nav>
       <ul class="topnav" id="myTopnav">
       <?=makeLinks($nav1)?>
        <!-- START COMMENT OUT NAV 
        <li><a href="fp/template.php" class="selected">Welcome</a></li>
        <li><a href="fp/aboutus.php">AIA</a></li>
        <li><a href="fp/gallery.php">BIG</a></li>
        <li><a href="fp/services">Services</a></li>
        <li><a href="contact.php">Contact Liberty Landscaping</a></li>
        END COMMENT OUT NAV -->
        <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>
       </ul>
     </nav>
</header>
     
   <div class="wrapper">
    <!-- closing of header --> 