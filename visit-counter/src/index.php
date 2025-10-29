<?php
$host = 'db';
$user = 'root';
$passwd = '123';
$dbname = 'visit_counter';

$conn = new mysqli($host, $user, $passwd, $dbname);

$conn->query("CREATE TABLE IF NOT EXISTS visits (id INT AUTO_INCREMENT PRIMARY KEY, count INT NOT NULL)");

$res = $conn->query("SELECT count FROM visits WHERE id = 1");
if ($res->num_rows == 0) {
    $conn->query("INSERT INTO visits (count) VALUES(0)");
}

$conn->query("UPDATE visits SET count = count + 1 WHERE id=1");

$res = $conn->query("SELECT count FROM visits WHERE id = 1");
$row = $res->fetch_assoc();
$vis_count = $row['count'];

echo "Number of visits: " . $vis_count;

$conn->close();
?>