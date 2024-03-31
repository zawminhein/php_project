<?php 
   session_start();
   $login = isset($_SESSION['user']);

   if(!$login) {
      header("location: index.php");
      exit();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <div class="container" style="max-width: 800px;">
      <h1 class="h3 my-3">Profile</h1>

      <?php if(file_exists("_actions/photos/profile.php")) : ?>
         <img src="_actions/photos/profile.jpg" width="300" class="img-thumbnail">
      <?php endif ?>

      <form action="_actions/upload.php" method="post" enctype="multipart/form-data"      class="input-group my-3">
         <input type="file" class="form-control" name="photo">
         <button class="btn btn-secondary">Upload</button>
      </form>

      <ul class="list-group mb-3">
         <li class="list-group-item">Name: Alice</li>
         <li class="list-group-item">Email: alice@gmail.com</li>
         <li class="list-group-item">Phone: 237890</li>
         <li class="list-group-item">Address: Some Address</li>
      </ul>
      <a href="_actions/logout.php" class="text-danger">Logout</a>
   </div>
</body>
</html>