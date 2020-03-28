<?php
ini_set("display_errors", 1);
include_once './include.php';
print_r($_POST);

$connection->where('email', $_POST['Username']);
$connection->where('password', $_POST['Password']);
$member = $connection->getOne( 'users_1' );

if( true == is_array( $member ) ) {
	header('Location: ./index.html?msg=Login successfuly');
} else {
	header('Location: ./login.html?error=invalid username password');
}

?>