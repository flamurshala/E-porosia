<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 text-light" style="background-color: #252525;">
        E-porosia
        <a href="redirectPage.php"><button type="button"
                class="btn btn-outline-light position-absolute top-0 start-0">Paneli admin</button></a>
    </nav>

    <?php
    if (isset($_GET["msg"])) {
        $msg = $_GET["msg"];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Emri konsumatorit</th>
                <th scope="col">Email</th>
                <th scope="col">Numri kontaktues </th>
                <th scope="col">Mesazhi</th>
                <th scope="col">Fshije</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
        <?php
        $sql = "SELECT * FROM `contactus`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row["id"] ?>
                </td>
                <td>
                    <?php echo $row["Name"] ?>
                </td>
                <td>
                    <?php echo $row["Email"] ?>
                </td>
                <td>
                    <?php echo $row["ContactNumber"] ?>
                </td>
                <td>
                    <?php echo $row["Message"] ?>
                </td>


                <td>
                    <a href="deleteCont.php?id=<?php echo $row["id"] ?>" class="link-danger"
                        style="text-decoration: none;">Fshije</a>
                </td>
            </tr>

            <?php
        }
        ?>
    </table>
    </div>



    <!-- Bootstrap  javaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>