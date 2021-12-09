<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <style>
      body{
        background: #383a3d;
        padding-top: 25vh;
      }
    </style>
  </head>
  <body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">MSN APARTMENTS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="adminLogin.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 cols-md-4">
              <form action="login_process.php" class="form-container" method="post" enctype="multipart/form-data">
                <div class = "form-group">
                    <h4 class = "text-cent font-weight-bold">LOGIN</h4>
                    <label for="UserType1">User Type</label>
                    <br/>
                    <select name="UserType1" id="UserType1">
                      <option value="selectUser" disabled selected>Select</option>
                      <option value="admin">Admin</option>
                      <option value="resident">Resident</option>
                      <option value="visitor">Visitor</option>
                    </select>
                </div>
            <br/>
                <div class="form-group">
                    <label for="InputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="Enter email">
                </div>
            <br/>
                <div class = "form-group">
                    <label for="InputPassword1">Password</label>
                    <input type="password" class="form-control" id="InputPassword1" name="pass" placeholder="Password">
                </div>
            <br/>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <div class = "form-footer">
                    <p> Don't have an account? <a href = "signUp.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
      <div class="footer">
          <p>Copyright &copy; 2021 MSN Apartments</p>
      </div>

</body>
</html>
