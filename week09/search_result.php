<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2.b</title>
</head>
<body>
    <h1>Car(s) result</h1>

    <?php
    require_once("settings.php");
    mysqli_report(MYSQLI_REPORT_OFF);
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if ($conn) {
        if (isset($_GET['model'])) {
            $model = trim($_GET['model'] ?? '');
            $result = $conn->execute_query("SELECT * FROM cars WHERE model = ?", [$model]);

            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1' cellpadding='5'>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Make</th>";
                echo "<th>Model</th>";
                echo "<th>Price</th>";
                echo "<th>YOM</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['car_id'] . "</td>";
                    echo "<td>" . $row['make'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['yom'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No matching car(s) found.";
            }
        } else {
            echo "Please enter a model to search.";
        }

        mysqli_close($conn);
    } else {
        echo "Database connection failed.";
    }
    ?>
</body>
</html>