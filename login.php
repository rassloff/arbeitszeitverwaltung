<?php

session_start();

require_once("header.inc.php");

if(isset( $_REQUEST["useremail"] )){        $user = $_REQUEST["useremail"];         }else{     $user = FALSE; }
if(isset( $_REQUEST["userpassword"] )){     $password = $_REQUEST["userpassword"];  }else{     $password = FALSE; }

?>
<h4>Login Page</h4>

-- if you are funny -- or what ? <br><br>

<?php

if( $user == "email@example.com" ){
    echo "ha ha -- nice try !!! <br>";
}

echo "user: " . $user . "<br>";
echo "password: " . $password . "<br>";

require_once("footer.inc.php");

?>