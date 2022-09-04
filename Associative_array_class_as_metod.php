<?php
//@ Diypa571
//@ Associative array
//@ Experiment
// Creating an array of users
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  class Users{
    function usersList() {
    $UserArray = [];
    $UserArray[] = array(
       "firstname" => "Diypa",
       "lastname" => "Parwana",
       "username" => "diypa",
       "password" => '$2y$10$ovctuw7KN8TDck8xg0zGqeHCBteQvwjQk7el6p2yWPNK9XCxuPBeu'
    );
    $UserArray[] = array(
       "firstname" => "Borg",
       "lastname" => "Pickard",
       "username" => "UCCS",
       "password" => '$2y$10$ovctuw7KN8TDck8xg0zGqeHCBteQvwjQk7el6p2yWPNK9XCxuPBeu'
    );
    $UserArray[]= array(
       "firstname" => "Nilix",
       "lastname" => "Voyager",
       "username" => "nilix",
       "password" => '$2y$10$ovctuw7KN8TDck8xg0zGqeHCBteQvwjQk7el6p2yWPNK9XCxuPBeu'
    );
    return $UserArray;
    }


   function whoToBeFound(string $user, string $password, array $UserArray) {
     foreach ($UserArray as $index => $value) {
       //  print_r($value['username']);
  if($value['username'] ===  $user && password_verify($password, $value['password'])) {
         echo 'This user is found... ';
           }
     }
   }



 }

$ob = new Users();
$ob->whoToBeFound('UCCS','dynamics',$ob->usersList());
?>
