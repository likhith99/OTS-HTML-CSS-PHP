<?php
   session_start();
   //connect to the database
   $conn = mysqli_connect("localhost", "root", "") or die("cannot connect");
   mysqli_select_db($conn, "authentication") or die("cannot select DB");
   $result = mysqli_query($conn, "select * from posts")

           or die("Failed to query database" .mysqli_error());

     $num =mysqli_num_rows ($result);
     $comr = mysqli_query($conn, "select * from comments ")
           or die("Failed to query database" .mysqli_error());

           if(isset($_POST['register'])) {
             $name= $_SESSION['name'];
              $comment = $_POST['comment'];

           $comm = mysqli_query($conn, "INSERT INTO comments (username, comment) VALUES('$name','$comment')");
           header('Location: StudentDashboard.php');
           exit;
         }

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
  <title>OTS</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.php" class="navbar-brand">OTS</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="StudentDashboard.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="StudentDashboard.php" class="nav-link active">Posts</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i>Welcome <?php
              //session_start();
              $name= $_SESSION['name'];
              echo $name;
               ?>
            </a>
            <div class="dropdown-menu">
               <a href="profile.html" class="dropdown-item"><i class="fas fa-user-circle"></i>Profile</a>
               <a href="profile.html" class="dropdown-item"><i class="fas fa-cog"></i>Settings</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
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
          <h1><i class="fas fa-pencil-alt"></i>Welcome <?php
            echo $name ;
           ?></h1>
        </div>
      </div>
    </div>
  </header>

  <!--SEARCH-->
  <!-- <section id="search" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="search posts...">
              <div class="input-group-append">
                  <button class="btn btn-primary">Search</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!--POSTS-->
  <br>
  <br>
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
           <div class="card">
             <div class="card-header">
               <h4>Latest Posts</h4>
             </div>
             <table class="table table-striped">
               <thead class="thead-dark">
                 <tr>
                   <th>Title</th>
                   <th>Category</th>
                   <th>Uploaded On</th>
                   <th>Author</th>
                   <th></th>
                 </tr>
               </thead>
               <tbody>
                 <?php
               while ($row= mysqli_fetch_assoc($result)) {

                    echo "<tr>";
                    echo "<th>".$row['title']."</th>";
                    echo "<td>".$row['category']."</td>";
                    echo "<td>".$row['date']."</td>";
                    echo "<td>".$row['author']."</td>";


                 }
                 ?>

                   </tr>
               </tbody>
             </table>

             <!--PAGINATION-->
             <nav class="ml-4">
                 <ul class="pagination">
                     <li class="page-item disabled">
                         <a href="#" class="page-link">Previous</a>
                     </li>
                     <li class="page-item active">
                         <a href="#" class="page-link">1</a>
                     </li>
                     <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">Next</a>
                    </li>
                 </ul>
             </nav>
           </div>
        </div>
      </div>
    </div>
  </section>
  <br><br>

  <!--COMMENT SECTION-->
  <section id="comments">
  <div class="container">
  <div class="row">
      <div class="col-md-9">
          <div class="comment-wrapper">
              <div class="panel panel-info">
                  <div class="panel-heading">
                    <h4>  Comments</h4>
                  </div>

                  <?php
                  while ($row= mysqli_fetch_assoc($comr)) {
                     echo "<h5>". $row['username']."<br>"."</h5>";
                     echo $row['comment']."<hr>";
                   }
                     ?>


                  <div class="panel-body">
                    <form method="post" action="StudentDashboard.php" name="myForm" onsubmit = "return(validate());">
                      <div class="form-group">
                        <label for="comment">Comment Below!</label>
                        <textarea class="form-control" name= "comment" rows="3" required></textarea>
                      </div>
                            <br>
                            <div class="form-group">
                            <input type="submit" name= "register" class="btn btn-info" value="COMMENT">
                      </div>
                      </form>
                      <hr>
                      <ul class="media-list">
                          <li class="media">

                          </li>
                      </ul>
                  </div>
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

            <span id="year"></span>
            Online Tutoring System | SSDI Spring project
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

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());



  </script>
</body>

</html>
