<?php
   session_start();
   //connect to the database
   $db = mysqli_connect("localhost", "root", "", "authentication");

   //tutor table
   if(isset($_POST['register'])) {
     $title = $_POST['title'];
     $category = $_POST['category'];
     $date = $_POST['date'];
     $author = $_POST['author'];
     // $password = $_POST['password'];
     // $password2 = $_POST['password2'];
     // $role = $_POST['role'];


       //create user
       $sql = "INSERT INTO posts(title, category, date, author) VALUES('$title', '$category', '$date', '$author')";
       mysqli_query($db, $sql);
       echo "Registration successful" . $title;
       //header("location: index.php");


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
  <title>Bootstrap Theme</title>

  <!--Validation for tutor form-->
  <script type = "text/javascript">
   <!--
      function validate() {

         if( document.myForm.title.value == "" ) {
            alert( "Please provide your title!" );
            document.myForm.title.focus() ;
            return false;
         }
         if( document.myForm.category.value == "" ) {
            alert( "Please provide your category!" );
            document.myForm.category.focus() ;
            return false;
         }
         if( document.myForm.date.value == "" ) {
            alert( "Please provide your date!" );
            document.myForm.date.focus() ;
            return false;
         }
         if( document.myForm.author.value == "" ) {
            alert( "Please provide your author!" );
            document.myForm.author.focus() ;
            return false;
         }
         // if( document.myForm.password.value == "" ) {
         //
         //    alert( "Please provide a password" );
         //    document.myForm.password.focus() ;
         //    return false;
         // }
         return( true );
      }


   //-->
</script>



</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="addpost.php" class="navbar-brand">OTS</a>
    </div>
  </nav>

  <!--HEADER-->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fas fa-user"></i>New Course</h1>
        </div>
      </div>
    </div>
  </header>

  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>

  <!--Add Post-->
  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
            <div class="card-header">
                <h4>Add Course</h4>
            </div>
            <div class="card-body">
                      <div class="">

                        <form method="post" action="addpost.php" name="myForm" onsubmit = "return(validate());">

                             <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" name= "title" class="form-control">
                             </div>
                             <div class="form-group">
                                <label for="category">category</label>
                                <input type="text" name="category" class="form-control">
                             </div>
                             <div class="form-group">
                              <label for="date">date</label>
                              <input type="text" name= "date" class="form-control">
                           </div>
                             <div class="form-group">
                                <label for="author">author</label>
                                <input type="text" name= "author" class="form-control">
                             </div>
                              <div class="form-group">
                              <input type="submit" name= "register" class="btn btn-info" value="Add Course">
                              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick= "goBack();">Close</button>
                              <script>
                              function goBack() {
                              window.history.back(-2);
                              }
                            </script>
                          </div>
                        </form>

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

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());



  </script>
</body>

</html>
