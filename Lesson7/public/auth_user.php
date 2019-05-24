<?php

function getUser($login) {

   $query_auth = sprintf('SELECT * FROM authorization WHERE login = "%s" LIMIT 1', $login);

	require '../connection.php';
	
    $mysql_auth = mysqli_query($mysqli, $query_auth);

$user = NULL;

while ($row = mysqli_fetch_assoc($mysql_auth)) {

    $user[] = $row;
}

if (!is_null($user))
return $user[0];
return false;

}