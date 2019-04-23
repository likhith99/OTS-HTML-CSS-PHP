<?php
   session_start();
   //connect to the database
   $conn = mysqli_connect("localhost", "root", "") or die("cannot connect");
   mysqli_select_db($conn, "authentication") or die("cannot select DB");
   $result = mysqli_query($conn, "select * from users")
           or die("Failed to query database" .mysqli_error());
   //$row = mysqli_fetch_array($result);
   $num =mysqli_num_rows ($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Bootstrap Theme</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">OTS</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link active"> Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Users</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i>Welcome admin
            </a>
            <div class="dropdown-menu">
               <a href="profile.html" class="dropdown-item"><i class="fas fa-user-circle"></i>Profile</a>
               <a href="settings.html" class="dropdown-item"><i class="fas fa-cog"></i>Settings</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="fas fa-user-times"></i>Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--HEADER-->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fas fa-cog"></i> Admin Dashboard</h1>
        </div>
      </div>
    </div>
  </header>

  <!--ACTIONS-->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        </div>
        <div class="col-sm-3">
          <a href="register.php"><i class="btn btn-warning btn-block" data-toggle="modal" data-target="register.php">
            <i class="fas fa-plus"></i>Add User</i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!--POSTS-->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">

           <!--SUBMITTED TUTORS TABLE-->

           <div class="card">
             <div class="card-header">
               <h4>Submitted Tutors</h4>
             </div>
             <table class="table table-striped">
               <thead class="thead-dark">
                 <tr>
                   <th>#</th>
                   <th>Emails</th>
                   <th>Category</th>
                   <th>Date</th>
                   <th></th>
                 </tr>
               </thead>
               <tbody>

                <?php
              while ($row= mysqli_fetch_assoc($result)) {
               if ($row['role'] == '0' && $row['approved'] == '1' ) {
                   //echo "Login successful!! Welcome" . $row['email'];
                   echo "<tr>";
                   echo "<th>".$row['firstname']."</th>";
                   echo "<td>".$row['lastname']."</td>";
                   echo "<td>".$row['course']."</td>";
                   echo "<td>".$row['email']."</td>";
                  }

                }
                ?>



               </tbody>
             </table>
           </div>
           <br><br>

           <!--APPROVED TUTORS TABLE-->
           <div class="card">
             <div class="card-header">
               <h4>Approved Tutors</h4>
             </div>
             <table class="table table-striped">
               <thead class="thead-dark">
                 <tr>
                   <th>#</th>
                   <th>Emails</th>
                   <th>Category</th>
                   <th>Date</th>
                   <th></th>
                 </tr>
               </thead>
               <tbody>
                 <?php

               while ($row= mysqli_fetch_assoc($result)) {
              if ($row['role'] == '0' && $row['approved'] == '0' ) {
                    //echo "Login successful!! Welcome" . $row['email'];
                    echo "<tr>";
                    echo "<td>".$row['firstname']."</td>";
                    echo "<td>".$row['lastname']."</td>";
                    echo "<td>".$row['course']."</td>";
                    echo "<td>".$row['email']."</td>";
                  }

                 }
                 ?>




               </tbody>
             </table>
           </div>


        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h4 class="display-4">
                <i class="fas fa-users"></i> <?php echo $num ?>
              </h4>
              <!-- <a href="users.html" class="btn btn-outline-light btn-sm">View</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--FOOTER-->

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            OTS
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // CKEDITOR.replace( 'editor1' );

  </script>
</body>

</html>
