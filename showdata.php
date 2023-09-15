<?php
include("db_con.php");

$sql = "SELECT * FROM products";


$result = mysqli_query($conn, $sql);

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        echo "<table>";
        echo "<tr><th>Product Name</th><th>Product Price</th><th>Product Image</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["pname"] . "</td>";
            echo "<td>" . $row["pprice"] . "</td>";
            echo '<td><img src="' . $row["pimg"] . '" width="100" height="100"></td>';
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No products found in the database.";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
