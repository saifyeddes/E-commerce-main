<?php
SESSION_START();

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:login.php");
   }
}
else
{
   header("location:login.php");
}
 include'header.php';
 include'lib/connection.php';

 $sql = "SELECT * FROM product";
 $result = $conn->query($sql);

 if(isset($_POST['update_update_btn'])){
  $name = $_POST['update_name'];
  $catagory = $_POST['update_catagory'];
  $quantity = $_POST['update_quantity'];
  $price = $_POST['update_Price'];
  $update_id = $_POST['update_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `product` SET quantity = '$quantity' , name='$name' , catagory='$catagory' ,price='$price'  WHERE id = '$update_id'");
  if($update_quantity_query){
     header('location:all_product.php');
  };
};

 if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `product` WHERE id = '$remove_id'");
  header('location:all_product.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
                       background-image: url('../img/add.jpg');
                       background-size: cover;
                       background-position: center;
                       background-repeat: no-repeat;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        .table th {
            background-color: #f8f9fc;
            font-weight: bold;
        }
        .table img {
            width: 50px;
        }
        .form-control {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn-primary {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            background-color: #4e73df;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }
        .btn-primary:hover {
            background-color: #375ab5;
        }
    </style>
</head>
<body>
    <div class="container pendingbody">
        <h2>All Products</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><img src="product_img/<?php echo $row['imgname']; ?>"></td>
                    <td>
                        <input type="text" name="update_name" value="<?php echo $row['name']; ?>" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="update_catagory" value="<?php echo $row['catagory']; ?>" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="update_quantity" value="<?php echo $row['quantity']; ?>" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="update_Price" value="<?php echo $row['Price']; ?>" class="form-control">
                    </td>
                    <td>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Update" name="update_update_btn" class="btn-primary">
                        </form>
                        <a href="all_product.php?remove=<?php echo $row['id']; ?>" class="btn-primary">Remove</a>
                    </td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>0 results</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
