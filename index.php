<?php 
require_once "includes/functions.php";
require_once  "includes/header.twig.php";
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

<?php
if(isset($_SESSION["userid"]))
{
    ?>
    <li><a href="#"><?php echo $_SESSION["useruid"];?></a></li>
     <li><a href="includes/logout.inc.php" class="header -login- a">LOGOUT</a></li>
     <?php
}
else {
    ?>
    <li><a href="login.php">SIGN UP</a></li>
    <li><a href="login.php" class="header -login- a">LOGIN</a></li>
    <?php
}
?>
<?php require_once "includes/footer.twig.php";?>

<p>welcome
</p>