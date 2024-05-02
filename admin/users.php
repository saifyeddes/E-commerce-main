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

 $sql = "SELECT * FROM users";
 $result = $conn -> query ($sql);
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
            background-image: url('../img/users.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        /* Style de la container principale */
        .container {
            margin: 20px auto;
            width: 80%;
            background-color: rgba(255, 255, 255, 0.9); /* Arrière-plan semi-transparent pour améliorer la lisibilité */
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
        .table {
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

<div class="container">
    <h5>All Users</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["f_name"] ?></td>
                <td><?php echo $row["l_name"] ?></td>
                <td><?php echo $row["email"] ?></td>
            </tr>
            <?php
                }
            }
            else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
