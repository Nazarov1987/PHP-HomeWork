<?php

function getUser($login) {

   $query_auth = sprintf('SELECT * FROM users WHERE login = "%s" LIMIT 1', $login);


    $mysql_auth = mysqli_query(myDB_connect(), $query_auth);

$user = NULL;

while ($row = mysqli_fetch_assoc($mysql_auth)) {

    $user[] = $row;
}

if (!is_null($user))
return $user[0];
return false;

}