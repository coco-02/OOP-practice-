<?php
require_once  "includes/header.twig.php";
require_once "includes/functions.php";

?>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>

<h>SignUp</h>
<form action="includes/signup.inc.php" method="post">
    <input type="text" name="uid" id="uid" placeholder="Username">
    <input type="password" name="pwd" id="pwd" placeholder="Password">
    <input type="password" name="pwdRepeat" id="pwdRepeat" placeholder="Repeat Password">
    <input type="text" name="email" id="email" placeholder="E-mail">
    <br>
    <button type="submit" name="submit">Sign Up</button>
</form>
</div>
<h1>Log-in</h1>
    <form method="post">
        <div class= "signin">
        <label for=username> Please enter your username </label>
        <input type="text" id="username" name="username" placeholder="" autocomplete="off" class="form-control-material">
        <label for="password"> Please enter your password </label>
        </div>
        <div>
        <input type="password" id="password" name="password" autocomplete="off" class="form-control-material" required/>
        <button type="submit" class="btn btn-primary btn-ghost">Log-in</button>
    </form>
</div>

<?php require_once "includes/footer.twig.php";?>