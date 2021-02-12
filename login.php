<?php

session_start();

require_once("header.inc.php");

if(isset( $_REQUEST["useremail"] )){        $user = $_REQUEST["useremail"];         }else{     $user = FALSE; }
if(isset( $_REQUEST["userpassword"] )){     $password = $_REQUEST["userpassword"];  }else{     $password = FALSE; }

?>
<h4>Login Page</h4>

-- if you are funny -- or what ? <br><br>

<?php

echo "user: " . $user;
echo "password: " . $password;

require_once("footer.inc.php");

?>