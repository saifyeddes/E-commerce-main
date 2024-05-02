<?php 

SESSION_START();

if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']==1)
    {
        header("location:home.php");
    }
}


include "lib/connection.php";
    if (isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $pass = ($_POST['password']);
        echo $email;
        echo $pass;

        $loginquery="SELECT * FROM admin WHERE userid='$email' AND pass='$pass'";
        $loginres = $conn->query($loginquery);

        echo $loginres->num_rows;

        if ($loginres->num_rows > 0) 
        {

            while ($result=$loginres->fetch_assoc()) 
            {
                $username=$result['userid'];
            }

            $_SESSION['username']=$username;
            $_SESSION['auth']=1;
            header("location:home.php");
        }
        else
        {
            echo "invalid";
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <style>
     body {
         font-family: Arial, sans-serif;
         background-image: url('../img/sign.jpg'); /* Updated path */
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         margin: 0;
         padding: 0;
             width: 100vw; /* 100% viewport width */
             height: 100vh; /* 100% viewport height */
     }

     .container {
         max-width: 500px;
         margin: 50px auto;
         padding: 20px;
         border-radius: 10px;
         background-color: rgba(255, 255, 255, 0.8); /* Added to make the form more readable */
         box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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

      .link {
          text-decoration: none;
          color: #4e73df;
      }

      .link:hover {
          text-decoration: underline;
      }

      .text-center {
          text-align: center;
      }

      .card {
          width: 100%;
          border: none;
          border-radius: 10px;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }

      .card-header {
          background-color: #4e73df;
          color: #fff;
          padding: 15px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
      }

      .card-body {
          padding: 20px;
      }

    </style>

</head>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="username" name="email">

                    </div>
                    <div class="input-group form-group">
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>