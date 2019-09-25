<?php
include 'include/dbinfo.php';
// mysql -u -p
// use database;
include 'include/db.php';
// select * from tweet
$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet JOIN users ON tweet.user_id = users.id ORDER BY updated_at DESC');
$sth->execute();
$result = $sth->fetchALL(PDO::FETCH_ASSOC);

include 'views/index_layout.php';
?>