<?php

require_once("header.inc.php");

?>
<h4>Login with Jquery</h4>

<div>
  <form class="px-4 py-3" action="login.php" method="post">
    <div class="form-group">
      <label for="Email1">Email address</label>
      <input type="email" class="form-control" id="Email1" placeholder="email@example.com" name="useremail">
    </div>
    <div class="form-group">
      <label for="Password1">Password</label>
      <input type="password" class="form-control" id="Password1" placeholder="Password" name="userpassword">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="login_register.php">New around here? Sign up</a>
  <a class="dropdown-item" href="login_forget_password.php">Forgot password?</a>
</div>

<?php

require_once("footer.inc.php");

?>