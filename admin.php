<?php 
   include("vendor/autoload.php");

   use Libs\Database\MySQL;
   use Libs\Database\UsersTable;

   $table = new UsersTable(new MySQL);
   $users = $table->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   
   <script src="js/bootstrap.bundle.min.js" defer></script>
</head>
<body>
   <nav class="navbar bg-dark navbar-dark navbar-expand">
      <div class="container">
         <a href="#" class="navbar-brand">Admin</a>
      </div>
   </nav>

   <div class="container my-2">
      <table class="table table-dark table-striped table-bordered">
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th></th>
         </tr>

         <?php foreach($users as $user) : ?>
            <tr>
               <td><?= $user->id ?></td>
               <td><?= $user->name ?></td>
               <td><?= $user->email ?></td>
               <td><?= $user->phone ?></td>
               <!-- <td>< ?= $user->role ?></td> -->
               <td>
                  <?php if($user->role_id == 3) : ?>
                     <span class="badge bg-success">
                        <?= $user->role ?>
                     </span>
                  <?php elseif($user->role_id == 2) : ?>
                     <span class="badge bg-primary">
                        <?= $user->role ?>
                     </span>
                  <?php else : ?>
                     <span class="badge bg-secondary">
                        <?= $user->role ?>
                     </span>
                  <?php endif ?>
               </td>
               <td>
                  <div class="btn-group">
                     <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                  </div>

                  <div class="btn-group dropdown">
                     <a href="#" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Role</a>
                        
                     <div class="dropdown-menu dropdown-menu-dark">
                        <a href="_actions/role.php?id=<?= $user->id ?>&role=1" class="dropdown-item">User</a>
                        <a href="_actions/role.php?id=<?= $user->id ?>&role=2" class="dropdown-item">Manager</a>
                        <a href="_actions/role.php?id=<?= $user->id ?>&role=3" class="dropdown-item">Admin</a>
                     </div>

                     <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                  </div>
               </td>
            </tr>
         <?php endforeach ?>
      </table>
   </div>
</body>
</html>