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

// $id = $table->insert([
//    "name" => "Babe",
//    "email" => "babe@gmail.com",
//    "phone" => "238904233",
//    "address" => "Some Address",
//    "password" => "password",
// ]);

// echo $id;

$user = $table->find("alice@gmail.com", "password");

print_r($user);

// $faker = Faker::create();
// echo $faker->name;