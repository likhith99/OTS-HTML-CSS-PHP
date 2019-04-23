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
            <a href="index.html" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.html" class="nav-link">Posts</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link active">Categories</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Users</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i>Welcome Neha
            </a>
            <div class="dropdown-menu">
               <a href="profile.html" class="dropdown-item"><i class="fas fa-user-circle"></i>Profile</a>
               <a href="profile.html" class="dropdown-item"><i class="fas fa-cog"></i>Settings</a>
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
  <header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fas fa-folder"></i>Categories</h1>
        </div>
      </div>
    </div>
  </header>

  <!--SEARCH-->
  <section id="search" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="search categories...">
              <div class="input-group-append">
                  <button class="btn btn-success">Search</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--CATEGORIES-->
  <section id="categories">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
           <div class="card">
             <div class="card-header">
               <h4>Latest Categories</h4>
             </div>
             <table class="table table-striped">
               <thead class="thead-dark">
                 <tr>
                   <th>#</th>
                   <th>Title</th>
                   <th>Date</th>
                   <th></th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>1</td>
                   <td>Web Development</td>
                   <td>Dec 3 2016</td>
                   <td>
                     <a href="details.html" class="btn btn-secondary">
                       <i class="fas fa-angle-double-right"></i>Details
                     </a>
                   </td>
                 </tr>
                 <tr>
                  <td>2</td>
                  <td>Tech Gadgets</td>
                  <td>Jan 5 2012</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i>Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Health & Wellness</td>
                  <td>Jan 3 2012</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i>Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Business</td>
                  <td>July 15 2011</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i>Details
                    </a>
                  </td>
                </tr>
               </tbody>
             </table>
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