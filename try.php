<?php

require 'dbconnect.php';
$record=$mysqli->query('select * from dean');
foreach ($record as $key => $value) {
	echo record['$value'];
}
?>