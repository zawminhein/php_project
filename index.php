<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Index</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <div class="container text-center" style="max-width: 600px;">
      <h1 class="h3 my-3">Login</h1>

      <?php if(isset($_GET['incorrect'])) : ?>
         <div class="alert alert-warning">
            Incorrect email or password
         </div>
      <?php endif ?>

      <form action="_actions/login.php" method="post" class="mb-3">
         <input type="text" name="email" class="form-control" placeholder="Email" required>
         <input type="password" name="password" class="mb-2 form-control" placeholder="Password" required>
         <button class="btn btn-primary w-100">Login</button>
      </form>

      <a href="register.php">Register</a>
   </div>
</body>
</html>