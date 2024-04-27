<?php 

// $email = $_POST['email'];
// $password = $_POST['password'];

// if($email == "alice@gmail.com" and $password == "password") {
//    session_start();
//    $_SESSION['user'] = ['name' => 'Alice'];
//    header("location: ../profile.php");
// } else {
//    header("location: ../index.php?incorrect=login");
// } 

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$email = $_POST['email'];
$password = $_POST['password'];

$table = new UsersTable(new MySQL);
$user = $table->find($email, $password);

if($user) {
   session_start();
   $_SESSION['user'] = $user;
   HTTP::redirect("/profile.php");
} else {
   HTTP::redirect("/index.php", "incorrect=login");
}
