<?php

include_once './include.php';

$connection->insert( 'users_1', $_POST );
header('Location: ./index.html?msg=Record inserted successfuly');


?>