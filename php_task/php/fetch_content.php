<?php
include 'config.php';

$sql = "SELECT heading, paragraph FROM content WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $heading = $row["heading"];
        $paragraph = $row["paragraph"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
