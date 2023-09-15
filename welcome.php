<?php
session_start();

if(!isset($_SESSION["name"])) {
    header("Location: login.php");
    exit;
}
?>

<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="create_tb2.php" method="post" enctype="multipart/form-data">
        <label for="pname"><b>Product Name:</b></label>
        <input type="text" placeholder="Enter Product Name" name="pname" required>
        
        <label for="pprice"><b>Product Price:</b></label>
        <input type="text" placeholder="Enter Price" name="pprice" required>

        <label for="pimg"><b>Select Image:</b></label>
        <input type="file" id="pimg" name="pimg" accept="image/*" required>

        <button type="submit" name="submit">Submit</button>
    </form>
    
    <a href="logout.php" title="Logout">Logout</a>
</body>
</html>
