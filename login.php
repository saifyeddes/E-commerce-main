<?php 

SESSION_START();

if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']==1)
    {
        header("location:index.php");
    }
}

include "lib/connection.php";
if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $loginquery="SELECT * FROM users WHERE email='$email' AND pass='$pass'";
    $loginres = $conn->query($loginquery);

    echo $loginres->num_rows;

    if ($loginres->num_rows > 0)
    {

        while ($result=$loginres->fetch_assoc())
        {
            $username=$result['f_name'];
            $userid=$result['id'];
        }

        $_SESSION['username']=$username;
        $_SESSION['userid']=$userid;
        $_SESSION['auth']=1;
        header("location:index.php");
    }
    else
    {
        echo "invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/signup.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
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
    </style>

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                name="email"
                                                placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">

                                        </div>

                                            <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="login">

                                        <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

      </form>

    </div>


</body>

</html>
