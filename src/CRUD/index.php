<?php
include "db_conn.php";
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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>e-porosia</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5 text-light" style="background-color: #252525;">
    E-porosia
    <a href="redirectPage.php"><button type="button"
        class="btn btn-outline-light position-absolute top-0 start-0">Paneli Admin</button></a>
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="create.php" class="btn btn-dark mb-3">Krijo perdorues te ri</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Emri</th>
          <th scope="col">Mbiemri</th>
          <th scope="col">Email</th>
          <th scope="col">Fjalkalimi</th>
          <th scope="col">Roli</th>
          <th scope="col">Operimet</th>
        </tr>
      </thead>
      <tbody>
        <!-- marrja e te dhenave nga databaza -->
        <?php
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td>
              <?php echo $row["id"] ?>
            </td>
            <td>
              <?php echo $row["first_name"] ?>
            </td>
            <td>
              <?php echo $row["last_name"] ?>
            </td>
            <td>
              <?php echo $row["email"] ?>
            </td>
            <td>
              <?php echo $row["password"] ?>
            </td>
            <td>
              <?php echo $row["role"] ?>
            </td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-primary"
                style="text-decoration: none;">Perditeso</a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-danger"
                style="text-decoration: none;">Fshije</a>
            </td>
          </tr>

          <?php
        }
        ?>
      </tbody>
  </div>

  <!-- Bootstrap  javaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>

</html>