<!DOCTYPE html>
<html>
<head>
	<title>Attendance Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
</head>
<body class="login">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="index.html">
            <i class="fas fa-check-square fa-2x me-3" style="color: #ff6219;"></i><span>Attendance Portal</span>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Dashboard</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="div.php">Division A</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="div2.php">Division B</a>
            </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">

        <!-- Avatar -->
        <div class="dropdown">
          <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy"/>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
            <li>
              <a class="dropdown-item" href="login.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

    <h1 style="text-align: center; padding-top: 40px;">Dashboard</h1>
    <div style="display: flex; margin: 50px; justify-content: space-around;">
        <div class="card" style="width: 300px; margin: 20px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/student.jpg" class="img-fluid" style="height: 200px;" width="100%"/>
              <a href="">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Total Students (Division A + Division B)</h5>
              <p class="card-text">
                <?php 
                  $dbHost = 'localhost:3307';
                $dbName = 'tip';
                $dbUsername = 'root';
                $dbPassword = ''; 

                $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                    //echo "Connected Successfully";

                $sql = "select * from divA";
                $result1 = mysqli_query($conn, $sql);

                $sql = "select * from divB";
                $result2 = mysqli_query($conn, $sql);

                $total = mysqli_num_rows($result1) + mysqli_num_rows($result2);

                echo "<p>" . $total . "</p>";
                ?>
              </p>
            </div>
        </div>
        <div class="card" style="width: 300px; margin: 20px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/division.jpg" class="img-fluid" style="height: 200px;" width="100%"/>
              <a href="">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Total Divisions</h5>
              <p class="card-text">2</p>
            </div>
        </div>
        <div class="card" style="width: 300px; margin: 20px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/year.jpg" class="img-fluid" style="height: 200px;" width="100%"/>
              <a href="">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Year</h5>
              <p class="card-text">2021 - 2022</p>
            </div>
        </div>
    </div>
</body>
</html>