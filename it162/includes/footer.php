<!-- footer start here -->    
<footer>
      <p><small>&copy; 2020 - 2021 by 
          <a href="contact.php" target='blank'></a> Nicholas Novick, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a href="https://validator.w3.org/nu/?doc=http://web-students.net/siteXX/it161/test.html">Check CSS</a></small>
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