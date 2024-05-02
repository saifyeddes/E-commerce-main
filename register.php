<?php
include "lib/connection.php";
$result = null;

if (isset($_POST['u_submit'])) {
    $f_name = $_POST['u_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['c_pass'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = "Invalid email format";
    } elseif ($pass !== $cpass) {
        $result = "Passwords do not match";
    } else {
        // Hash password securely
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Use prepared statements to insert user data
        $stmt = $conn->prepare("INSERT INTO users(f_name ,l_name, email, pass) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $f_name, $l_name, $email, $hashed_password);

        if ($stmt->execute()) {
            $result = "Account opened successfully";
            header("location: login.php");
            exit(); // Ensure script stops executing after redirection
        } else {
            $result = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
 background-image: url('img/signup.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    <?php echo $result; ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" name="u_name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" name="l_name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="pass">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Repeat Password" name="c_pass">
                                </div>
                                <button type="submit" class="btn btn-primary" name="u_submit">Register Account</button>
                                <hr>
                                <div class="text-center">
                                    <a class="link" href="login.php">Already have an account? Login!</a>
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
