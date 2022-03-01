<?php include 'parts/header.php'; ?>
<?php

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "hackme";
$dbName = "shop_lt";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


$sql = 'SELECT * 
FROM ads 
JOIN users ON ads.user_id = users.id WHERE ads.id = ' . $id;

echo $sql;
$rez = $conn->query($sql);
$ads = $rez->fetchAll();


echo '<div class="wrapper">';
foreach ($ads as $ad) {
    echo '<div class="content-box">';
    echo '<h3>' . $ad["title"] . '</h3>';
    echo '<p>Price: ' . $ad["price"] . '$</p>';
    echo '<p>Year: ' . $ad["year"] . '</p>';
    echo '<p>About: ' . $ad["description"] . '</p>';
    echo '<p>Owner: ' . $ad["name"] . '</p>';
    echo '<p>Contact phone: ' . $ad["phone"] . '</p>';
    echo '<p>Email phone: ' . $ad["email"] . '</p>';
    echo '</div>';
}
echo '</div>';