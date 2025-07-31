<html>

<head>
  <title> Made up League</title>
  <link href="css/main.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
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

</head>
<header>
  <div class="topnav">
    <nav role="navigation">
    </nav>

   <?php

    if (isset($_POST["user"])) {
      $username = $_POST["user"];
      setcookie('user', $username, time() + (86400 * 7), "/");
    }

    $cookie_value = "Guest";
    if (isset($_COOKIE['user'])) {
      $cookie_value = $_COOKIE['user'];
    }

    ?>
    <h2> Welcome <?php echo $cookie_value; ?></h2>
</header>
<main>
