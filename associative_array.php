<?php
//@ Diypa571
//@ Associative array
//@ Experiment

// Creating an array of users
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


// A metod for finding a username with the right password
// This metod will take two string param and one array
function whoToBeFound(string $user, string $password, array $UserArray) {
for($x=0; $x < count($UserArray); ++$x) {


if($UserArray[$x]['username'] ===  $user && password_verify($password, $UserArray[$x]['password'])) {
    echo 'This user is found... ';
    echo "Username:  {$UserArray[$x]['username']}   ";
    echo "Password:  {$UserArray[$x]['password']}   ";
  }

}

 }

 whoToBeFound('UCCS','dynamics',$UserArray);
 
 ?>
