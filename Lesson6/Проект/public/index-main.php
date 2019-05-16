<?php
require './db.php';

$query = mysqli_query($mysqli, "SELECT * FROM gallery ORDER BY gallery.view ASC");

$result = [];

while($row = mysqli_fetch_assoc($query)) {
	$result[] = $row;
}
