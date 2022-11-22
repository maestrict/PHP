<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <meta name="description" content="More design pls">
    <meta name="author" content="Raphael Verheyen">
    <!-- Reset all browser default css -->
    <link rel="stylesheet" href="../ressources/reset.css">
    <!-- Reset all browser default css -->
    <!-- Call a font via googlefont -->
    <link rel="preconnect"href="https://fonts.googleapis.com">
    <link rel="preconnect"href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <!-- Call a font via googlefont -->
    <!-- Your style -->
    <link rel="stylesheet" href="../ressources/style.css">
    <!-- Your style -->
    <!-- Your Js -->
    <!-- <script src="ressources/main.js"></script> -->
    <!-- Your Js -->
  </head>
  <body>
    <img src="../ressources/logo.png" alt="Paradise" class="logo">
    <form action="..\controller\login.php" method="post" class="form_center">

      <h1>Login <span>to paradise</span></h1>
      <p class="pb_hi">Lorem ipsum COUCOU sit amet, consectetur adip. Trackmania. Consectetur adipisicing elit. Veritatis totam HIBOU eum officiis.</p>

      <div class="input_bloc">
        <label>Login :</label>
        <input type="text" name="login" placeholder="...">
      </div>

      <div class="input_bloc">
        <label>Password :</label>
        <input type="password" name="pass" placeholder="...">
      </div>

      <div class="cta">
        <input type="submit" value="Log in">
        <span class="color_behind"></span>
      </div>

    </form>

  </body>
</html>
