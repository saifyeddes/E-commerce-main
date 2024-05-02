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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animated Waves</title>
<style>

    body {
        margin: auto;
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        overflow: auto;
        background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);
        animation: gradient 15s ease infinite;
        background-size: 400% 400%;
        background-attachment: fixed;
    }

    @keyframes gradient {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    .wave {
        background: rgb(255 255 255 / 25%);
        border-radius: 1000% 1000% 0 0;
        position: fixed;
        width: 200%;
        height: 12em;
        animation: wave 10s -3s linear infinite;
        transform: translate3d(0, 0, 0);
        opacity: 0.8;
        bottom: 0;
        left: 0;
        z-index: -1;
    }

    .wave:nth-of-type(2) {
        bottom: -1.25em;
        animation: wave 18s linear reverse infinite;
        opacity: 0.8;
    }

    .wave:nth-of-type(3) {
        bottom: -2.5em;
        animation: wave 20s -1s reverse infinite;
        opacity: 0.9;
    }

    @keyframes wave {
        2% { transform: translateX(1); }
        25% { transform: translateX(-25%); }
        50% { transform: translateX(-50%); }
        75% { transform: translateX(-25%); }
        100% { transform: translateX(1); }
    }
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
  <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
  </div>
</body>
</html>

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
