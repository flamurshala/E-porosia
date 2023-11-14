<?php
include "db_conn.php";
//ruajtja e te dhenave ne database
if (isset($_POST["submit"])) {
    $img_file = $_POST['img_file'];
    $product_title = $_POST['product_title'];
    $sale = $_POST['sale'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_shipping_fee = $_POST['product_shipping_fee'];
    $category = $_POST['category'];

    $sql = "INSERT INTO `product_content`(`id`,`img_file`, `product_title`, `sale`,`product_price`,`product_description`, `product_shipping_fee`,`category`) VALUES (NULL,'$img_file','$product_title','$sale','$product_price','$product_description','$product_shipping_fee','$category')";

    $result = mysqli_query($conn, $sql);


    if ($result) {
        header("Location: productPage.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- "Font Awesome"- linku per fontin e perdorur -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>E-porosia</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 text-light" style="background-color: #252525;">
        e-porosia
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Shto product</h3>
            <p class="text-muted">Ploteso te dhenat me poshte per te shtuar produkt</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="mb-3">
                        <label class="form-label">Emri fajllit(URL)</label>
                        <input type="text" class="form-control" name="img_file" placeholder="filename" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Titulli</label>
                        <input type="text" class="form-control" name="product_title" placeholder="titulli" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Çmimi me vize per zbritje</label>
                    <input type="text" class="form-control" name="sale" placeholder="Çmimi">
                </div>
                <div class="mb-3">
                    <label class="form-label">Çmimi produktit €</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Çmimi" required>
                </div>

                <div class="form-group mb-3">
                    <label>Pershkrimi</label>
                    <input type="text" class="form-control" name="product_description" placeholder="Pershkruaj"
                        required>
                </div>

                <div class="form-group mb-3">
                    <label>Çmimi transportit €</label>
                    <input type="text" class="form-control" name="product_shipping_fee" placeholder="Çmimi transportit"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label>Kategoria(sensitive)</label>
                    <input type="text" class="form-control" name="category" placeholder="Kategoria" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Ruaj</button>
                    <a href="productPage.php" class="btn btn-danger">Anulo</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>