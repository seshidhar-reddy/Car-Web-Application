<?php
    $data = $_GET['data'];
    require_once 'dbh.inc.php';
    $sql = "SELECT * FROM " . $data . ";";
    $result = mysqli_query($conn, $sql);
    echo "<option>~~~ Select Car ~~~</option>";
    while ($row = mysqli_fetch_array($result))
    {
        echo "<option>" . $row["car"] . "</option>";
    }


?>