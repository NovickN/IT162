<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <script src="https://use.fontawesome.com/537a582da3.js"></script>
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="noindex,nofollow" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/form.css" />
 </head>
 <body>
     <header>
     <h1><a href="index.php"><i class="logo fa fa-home <?=$logo?>"></i>Nicholas's IT162 Website</a></h1>
     <nav>
       <ul class="topnav" id="myTopnav">
       <?=makeLinks($nav1)?>
        <!-- START COMMENT OUT NAV 
        <li><a href="index.php" class="selected">Welcome</a></li>
        <li><a href="aia.php">AIA</a></li>
        <li><a href="big.php">BIG</a></li>
        <li><a href="https://docs.google.com/document/d/1AHl450XCVUffbIiLwdy_5xy2E575wK8j7y-Pj6Muv2E/edit" target="_blank">Flowchart Doc</a></li>
        <li><a href="fp/template.php" target='_blank'>Final Project</a></li>
        <li><a href="contact.php">Contact Nicholas</a></li>
        END COMMENT OUT NAV -->
        <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>
       </ul>
     </nav>
     </header>
     
   <div class="wrapper">
    <!-- closing of header --> 