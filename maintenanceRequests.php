<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Page</title>    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <!-- Datepicker for this template -->
    <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js"></script>
    <link href="https://cdn.syncfusion.com/ej2/material.css" rel="stylesheet">

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
                <a class="nav-link" href="adminLogin.php">Login</a>
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

    <div class="container py-4">

        <!-- Bootstrap 5 starter form -->
        <form id="visitorForm">
          <div class="contact-title">
            <h1>Maintenance Requests</h1>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Apartment Number</th>
                <th scope="col">Priority</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "root", "project_db");
                if ($conn-> connect_error) {
                  die("Connection failed:". $conn-> connect_error);
                }
                $sql = "SELECT id, name, email, apartmentNumber, priority, category, description from maintenanceRequests";
                $result = $conn-> query($sql);

                if ($result-> num_rows > 0){
                  while ($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["apartmentNumber"] ."</td><td>". $row["priority"] ."</td><td>". $row["category"] ."</td><td>". $row["description"] ."</td></tr>";
                  }
                  echo "</table>";
                }
                else {
                  echo "0 result";
                }
                $conn-> close();
                ?>
              </tr>
          </table>
        </form>    
      </div>
      <div class="footer">
          <p>Copyright &copy; 2021 MSN Apartments</p>
      </div>
  </body>
  </html>
