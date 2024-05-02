<?php
 include'header.php';
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
include'lib/connection.php';
$sql = "SELECT * FROM orders";
$result = $conn -> query ($sql);

if(isset($_POST['update_update_btn'])){
  $update_value = $_POST['update_status'];
  $update_id = $_POST['update_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `orders` SET status = '$update_value' WHERE id = '$update_id'");
  if($update_quantity_query){
     header('location:pending_orders.php');
  };
};

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$remove_id'");
  header('location:pending_orders.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset des styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
              font-family: Arial, sans-serif;
                        background-image: url('../img/pending.jpg');
                        background-size: cover;
                        background-repeat: no-repeat;
        }

        /* Style de la container principale */
        .container {
            margin: 20px auto;
            width: 80%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Style de l'en-tête */
        h5 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Style du tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
            color: #555;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Style des champs de formulaire */
        .form-control {
            width: 150px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
        }

        .input-group {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .input-group-addon {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 6px 12px;
            border-radius: 4px 0 0 4px;
            margin-right: -1px;
        }

        /* Style du bouton */
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 10px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        /* Style du lien de suppression */
        .remove-link {
            color: red;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.3s;
        }

        .remove-link:hover {
            color: darkred;
        }
    </style>
</head>
<body>

<div class="container pendingbody">
  <h5>Order Status</h5>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Send Money Number</th>
      <th scope="col">Txid</th>
      <th scope="col">Total Product</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {

              ?>
    <tr>

      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["address"] ?></td>
      <td><?php echo $row["phone"] ?></td>
      <td><?php echo $row["mobnumber"] ?></td>
      <td><?php echo $row["txid"] ?></td>
      <td><?php echo $row["totalproduct"] ?></td>
      <td><?php echo $row["totalprice"] ?></td>
      <td><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="update_id"  value="<?php echo  $row['id']; ?>" >
        <div>
                                <select name="update_status" class="form-control">
                                <option><?php echo $row['status']; ?></option>
                                    <option value="Pending">Pending</option>
                                    <option value="Confirmed">Confirmed</option>
                                  <option value="Cancel">Cancel</option>
                                  <option value="Delivered">Delivered</option>
                                </select>
                            </div>
        <input type="submit" value="update" name="update_update_btn">
      </form></td>
      <td><a href="pending_orders.php?remove=<?php echo $row['id']; ?>">remove</a></td>
    </tr>
    <?php
    }
        }
        else
            echo "0 results";
        ?>

  </tbody>
</table>

<!-- Formulaire -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="update_id"  value="<?php echo  $row['id']; ?>" >
    <div class="input-group">
        <label for="update_status">Update Status:</label>
        <select name="update_status" class="form-control">
            <option value="Pending">Pending</option>
            <option value="Confirmed">Confirmed</option>
            <option value="Cancel">Cancel</option>
            <option value="Delivered">Delivered</option>
        </select>
    </div>
    <input type="submit" value="Update" name="update_update_btn" class="btn">
</form>

</div>

</body>
</html>
