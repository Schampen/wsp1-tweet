<?php

$userId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

include 'include/dbinfo.php';

include 'include/db.php';

$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet JOIN users ON tweet.user_id = users.id WHERE users.id =' . $userId . 'ORDER BY updated_at DESC ');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);

include 'views/users_layout.php';
?>