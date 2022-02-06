<!DOCTYPE html>
<html>
<head>
	<title>Attendance Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
     <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>

    <style>
      .btn {
        background-color: black;
        color: white;
      }
    </style>
</head>
<body ng-app="myApp" ng-controller="myController" class="login">
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
            <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
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

      <h1 style="text-align: center; padding-top: 40px; color: white;">Division B</h1>
      <div class="text-center" style="padding-top: 40px;">
         <a href="div2.php"><button class="btn">View Student Details</button></a>
         <a href="divB_attendance.php"><button class="btn">Take Attendance</button></a>
      </div><br><br><br>

      <div class="table-responsive">

      <h3 class="text-center" style="color: white;">Attendance Record for February Month</h3><br>

        <table class="table" style="padding-top: 150px;color: white;">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">SAP ID</th>
              <th scope="col">Present</th>
              <th scope="col">Absent</th>
            </tr>
          </thead>
          <tbody>
            <tr>
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

                $sql = "select * from divB";

                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                              $absent = 28 - $row['attendance'];
                                echo "<tr><td>" . $row['name'] . "</td><td>" . $row['sapid'] . "</td><td>" .$row['attendance'] .  " days </td><td>" . $absent . " days </td></tr>";
                        }
                        mysqli_free_result($result);
                    } 
                    else{
                        //echo "No records could be retrieved.";
                    }
                }
              ?>
            </tr>
          </tbody>
        </table>
    </div><br>


    <script>
      var app = angular.module('myApp', []);
      app.controller('myController', function($scope) {

    });
    </script>

</body>
</html>