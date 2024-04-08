<?php 

include("vendor/autoload.php");

use Helpers\HTTP;
use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

// $user = Auth::check();
// print_r($user);
// HTTP::redirect('/index.php', 'http=test');

// $mysql = new MySQL;
// $db = $mysql->connect();

// $result = $db->query("SELECT *FROM roles");

// print_r($result->fetchAll());

$mysql = new Mysql;
$table = new UsersTable($mysql);

$id = $table->insert([
   "name" => "Alice",
   "email" => "alice@gmail.com",
   "phone" => "23890423",
   "address" => "Some Address",
   "password" => "password",
]);

echo $id;

// $table->insert();

// $faker = Faker::create();
// echo $faker->name;