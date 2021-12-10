<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Nicholas Novick's IT162 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/portal.css" />
  <link rel="stylesheet" href="../css/nav.css" />
  <link rel="stylesheet" href="../css/forms.css" />
 </head>
 <body>
     <header>
       <h1>Liberty Landscaping</h1>
     <nav class="topnav" id="myTopnav">
       <a class='active' href="template.html" >Home</a>
       <a href="aboutus.html">About Us</a>
       <a href="services.html">Services</a>
       <a href="gallery.html">Gallery</a>
       <a href="contactus.php">Contact Us</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <main class="wrapper">
   <h2 class="page-header">Contact Liberty Landscaping</h2>
       
       <!-- START HTML FORM -->
<form action="contactus.php" method="post">
<div>
  <label>
    Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
  </label>
</div>
<div>	
  <label>
    Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
  </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
  <label>
    Message:<br /><textarea name="Message" cols="36" rows="4" placeholder="Say something to Liberty Landscaping!" tabindex="30"></textarea>
  </label>
</div>	
  <div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div> 
<div>
  <input type="submit" value="submit" />
</div>
  </form>
<!-- END HTML FORM -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
  <script>
      /**
      * requires reCAPTCHA so user doesn't lose form data 
      *
      * https://stackoverflow.com/questions/27706594/how-can-i-make-recaptcha-a-required-field
      * 
      * In this version, jQuery is required and code will find first form on page and require 
      * the reCAPTCHA for that form using document.forms[0]
      */
  
      function checkRecaptcha() {
          res = $('#g-recaptcha-response').val();
          if (res == "" || res == undefined || res.length == 0)
              return false;
          else
              return true;
      }
      $(function() {
          let thisForm = document.forms[0];
          $(thisForm).submit(function(e) {            
              if(!checkRecaptcha()) {
                  alert("Please confirm you are not a robot.");
                  return false;
              }
          });
      }); 
  </script>
     <footer>
      <p><small>&copy; 2021 by 
          <a href="contactus.php" target='blank'></a> Nicholas Novick, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a href="https://validator.w3.org/nu/?doc=http://web-students.net/site102/it161/test.html">Check CSS</a> ~ 
          <a href='https://scedu-my.sharepoint.com/:w:/g/personal/nicholas_novick_seattlecolleges_edu/EfE3CqsUYHFDvrVQNM_xHHcBiQy3CQKa_PepAQLO-DroDA?e=puBKE3'>Disclaimer</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>