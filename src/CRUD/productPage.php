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
    <a href="createProd.php" class="btn btn-dark mb-3">Shto produkt</a>
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Emri fajllit</th>
                <th scope="col">Titulli</th>
                <th scope="col">Çmimi me vize</th>
                <th scope="col">Çmimi </th>
                <th scope="col">Pershkrimi</th>
                <th scope="col">Transporti</th>
                <th scope="col">Kategoria</th>
                <th scope="col">Operimet</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <?php
        $sql = "SELECT * FROM `product_content`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row["id"] ?>
                </td>
                <td>
                    <?php echo $row["img_file"] ?>
                </td>
                <td>
                    <?php echo $row["product_title"] ?>
                </td>
                <td>
                    <?php echo $row["sale"] ?>
                </td>
                <td>
                    <?php echo $row["product_price"] ?>
                </td>
                <td>
                    <?php echo $row["product_description"] ?>
                </td>
                <td>
                    <?php echo $row["product_shipping_fee"] ?>
                </td>
                <td>
                    <?php echo $row["category"] ?>
                </td>
                <td>
                    <a href="editProd.php?id=<?php echo $row["id"] ?>" class="link-primary"
                        style="text-decoration: none;">Perditso</a>
                    <a href="deleteProd.php?id=<?php echo $row["id"] ?>" class="link-danger"
                        style="text-decoration: none;">Fshij</a>
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