<?php
if (isset($_GET["msg"])) {
    $msg = $_GET["msg"];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    ' . $msg . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
require('../CRUD/db_conn.php');
$error = '';
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from users where email='$email' and password='$password'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['ROLE'] = $row['role'];
        $_SESSION['IS_LOGIN'] = 'yes';
        if ($row['role'] == 1) {
            header('location:http://localhost:3000/');
            die();
        }
        if ($row['role'] == 2) {
            header('location:../CRUD/redirectPage.php');
            die();
        }
    } else {
        $error = 'Email or password is incorrect!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>e-porosia Kyçu</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 12%;

        }

        .card {
            background-color: rgba(37, 150, 190, .09);
        }

        .card-header {
            text-align: center;
            font-size: 25px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container container-fluid container-sm">
        <!-- <div class="card card-login mx-auto mt150"> -->
        <div class="card login " style="width: 30rem; height: 23rem;  ">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="post">
                    <div class=".container">
                        <div class="form-group text-center container-fluid  ">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" placeholder="name@example.com"
                                    required="required">
                                <label for="email">Email adresa</label><br>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required="required">
                                <label for="password">Fjalkalimi</label><br>
                            </div>
                            <?php
                            $Color = "red";

                            echo '<div style="Color:' . $Color . '">' . $error . '</div>'; ?><br>
                            <input type="submit" name="submit" class="btn btn-secondary"><br><br>
                            <div class="text --bs-dark-text-emphasis">Perdorues i ri?
                                <a class=" fst-italic" href="register.php"> Regjistrohu</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>