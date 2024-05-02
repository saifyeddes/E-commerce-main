<?php
session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
    header("location: login.php");
    exit;
}

include 'header.php';
include 'lib/connection.php';

$result = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $catagory = $_POST['catagory'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $filename = $_FILES["uploadfile"]["name"];

    $insertSql = "INSERT INTO product(name, catagory, description, quantity, price, imgname) VALUES ('$name', '$catagory', '$description', $quantity, $price, '$filename')";

    if ($conn->query($insertSql)) {
        $result = "<h2>*******Data insert success*******</h2>";
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "product_img/" . $filename;

        move_uploaded_file($tempname, $folder);
    } else {
        die($conn->error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #DAF7A6;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4e73df;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #375ab5;
        }
    </style>
</head>
<body>
<div class="container">
    <?php echo $result; ?>
    <h4>Add Product</h4>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName">
        </div>
        <div class="mb-3">
            <label for="exampleInputType" class="form-label">Category</label>
            <input type="text" name="catagory" class="form-control" id="exampleInputType">
        </div>
        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputDescription">
        </div>
        <div class="mb-3">
            <label for="exampleInputQuantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="exampleInputQuantity">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputPrice">
        </div>
        <div class="mb-3">
            <label for="uploadfile" class="form-label">Image</label>
            <input type="file" name="uploadfile" class="form-control" id="uploadfile">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
