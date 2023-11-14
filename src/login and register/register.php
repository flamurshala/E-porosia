<?php
include "../CRUD/db_conn.php";
//ruajtja e te dhenave ne database
if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,'$first_name','$last_name','$email','$password')";

   $result = mysqli_query($conn, $sql);


   if ($result) {
      header("Location: login.php?msg=New user has  created successfully");
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

   <title>E-porosia regjistrohu</title>
   <style>
      body {
         background-color: rgba(37, 150, 190, .09);
      }

      .container {
         width: 65%;
         align-items: center;
         justify-content: center;
         margin-top: 3.5%;

      }
   </style>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5 text-light" style="background-color: #252525;">
      e-porosia
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Krijo nje perdorues te ri!</h3>
         <p class="text-muted">Ploteso te dhenat e tua!</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Emri:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Shkruani emrin tuaj..."
                     required>
               </div>

               <div class="col">
                  <label class="form-label">Mbiemri:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Shkruani mbimerin tuaj..."
                     required>
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="Filan@gmail.com" required>
            </div>

            <div class="form-group mb-3">
               <label>Fjalkalimi:</label>
               <input type="password" class="form-control" name="password" placeholder="fjalkalimi..." required>
            </div>

            <div>
               <button type="submit" class="btn btn-secondary " name="submit">regjistrohu</button>
               <a href="login.php" class="btn btn-secondary ">Anulo</a>
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