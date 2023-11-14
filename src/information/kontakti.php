<?php
include "../CRUD/db_conn.php";
//ruajtja e te dhenave ne database
if (isset($_POST["submit"])) {
  $Name = $_POST['Emri'];
  $Email = $_POST['Email'];
  $ContactNumber = $_POST['ContactNumber'];
  $Message = $_POST['Message'];



  $sql = "INSERT INTO `contactus`(`id`, `Name`, `Email`, `ContactNumber`, `Message`) VALUES (NULL,'$Name','$Email','$ContactNumber','$Message')";
  $result = mysqli_query($conn, $sql);


  if ($result) {
    header("Location: http://localhost:3000/");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="./style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Contact Form</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h4>Na kontakto</h4>
        <form action="" method="post">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Emri</label>
            <input type="text" name="Emri" class="form-control" id="formGroupExampleInput" placeholder="Filan" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email</label>
            <input type="email" name="Email" class="form-control" id="formGroupExampleInput2"
              placeholder="Filan@gmail.com" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Numri telefonit</label>
            <input type="number" name="ContactNumber" class="form-control" id="formGroupExampleInput2"
              placeholder="+383-xx-xxx-xxx" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mesazhi</label>
            <textarea class="form-control" name="Message" id="exampleFormControlTextarea1" rows="3" required></textarea>
          </div>
          <button class="btn btn-secondary" type="submit" name="submit">Dergo</button>
        </form>
      </div>
      <div class="col-md-5 ">
        <h4>Contact us</h4>
        <hr>
        <div class="mt-4">
          <div class="d-flex" name="Address">
            <i class="bi bi-geo-alt-fill"></i>
            <p>Adresa: Brigada 123 , Suhareke</p>
          </div>
          <hr>
          <div class="d-flex" name="Contact">
            <i class="bi bi-telephone-fill"></i>
            <p>Numri telefonit : +38349826096</p>
          </div>
          <hr>
          <div class="d-flex" name="CompEmail">
            <i class="bi bi-envelope-fill"></i>
            <p>Email:- contact@eporosia.com</p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap javaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>