<?php
include("db_con.php");

if(isset($_POST['submit'])){
    $pname = $_POST["pname"];
    $pprice = $_POST["pprice"];

    $targetDirectory = "images/"; 
    $targetFile = $targetDirectory . basename($_FILES["pimg"]["name"]);
    

    if (move_uploaded_file($_FILES["pimg"]["tmp_name"], $targetFile)) {
     
        $sql = "INSERT INTO `products` (`pname`, `pprice`, `pimg`) VALUES (?, ?, ?)";
      
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $pname, $pprice, $targetFile);
        
        if (mysqli_stmt_execute($stmt)) {
           
            echo "Product added successfully.";
        } else {
       
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "File upload failed.";
    }
}
?>
