<?php
include 'header.php';
SESSION_START();

if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth'] != 1) {
        header("location:login.php");
    }
} else {
    header("location:login.php");
}
include 'lib/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('../img/dash.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #000; /* Text color based on background */
        }

        .main-content {
            padding: 20px;
        }

        .content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header {
            margin-bottom: 20px;
            text-align: center ;
            color: #fff; /* Header text color */
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Admin Dashboard</h1>
    </header>
    <main class="main-content">
        <section class="content">
            <div class="card">
                <h2>Recent Activity</h2>
                <ul>
                    <li>User A logged in</li>
                    <li>User B created a new post</li>
                    <li>User C updated profile</li>
                    <li>User D deleted a comment</li> <!-- New item added -->
                </ul>
            </div>
            <div class="card">
                <h2>Statistics</h2>
                <canvas id="statistics-chart"></canvas>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        // Sample data for chart
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Users',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: [65, 59, 80, 81, 56, 55, 40]
            }]
        };

        // Creating a chart
        const ctx = document.getElementById('statistics-chart').getContext('2d');
        const statisticsChart = new Chart(ctx, {
            type: 'line',
            data: data
        });
    </script>
</body>

</html>
