<?php 
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=' . $database . '',
        $user,
        $password
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>