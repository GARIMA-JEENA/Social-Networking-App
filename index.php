<?php
if(!isset($_SESSION)) 
     { 
         session_start(); 
     }
 //session_start();
 require_once 'header.php';
 echo "<div class='center'>Welcome to our site.";
 if ($loggedin) echo " $user, you are logged in";
 else echo ' Please sign up or log in';
 echo <<<_END
</div><br>

 </div>
 <div data-role="footer">
<h4>Thank you .</
h4>
 </div>
 </body>
</html>
_END;
?>
