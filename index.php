<?php 

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMS | Class Attendance Management System</title>
    <!--LInks Begin-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <!------LInks End-->
    <!-- #region Favicon-->
    <link rel="shortcut icon" href="img/logo.png" />
</head>

<body>

    <!---Header begin-->
    <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">C A M S </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#cams-navbar"
                aria-controls="cams-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="cams-navbar">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Ingia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Zaidi</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!--- Header End-->

    <!----- Login Area begin-->

    <div class="row">

        <!-------Logo begin-->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  logo-div">

            <center>
                <img src="img/logo.png" alt="CAMS logo">
            </center>
        </div>
        <!----Logo end-->


        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3 form-div">
            <div class="mt-3 card">

            <?php  
            
            if(isset($_POST['ingia'])){

               $user_id = $_POST['id'];
               $user_password = $_POST['password'];

               //Check if user is a class teacher 
                    $check_teacher = "SELECT * FROM classteacher WHERE classteacher_id='$user_id'";
                    $run_teacher = mysqli_query($con,$check_teacher);
                    $if_teacher = mysqli_num_rows($run_teacher);
                    $row_teacher = mysqli_fetch_array($run_teacher);

                    if($if_teacher < 1){
                        echo " <div class='alert alert-danger'>
                        Hauna Akaunti^G Help        ^O Write Out   ^W Where Is    ^K Cut         ^T Execute     ^C Location    M-U Undo       M-A Set Mark
                       </div>";
                    }

                    $stored_id = $row_teacher["classteacher_id"];
                   $stored_password = $row_teacher["password"];
                
                    if($user_password != $stored_password){

                        echo "<div class='alert alert-danger'>
                        Umekosea Neno Siri
                    </div>";
                        
                    }

                    if($if_teacher >= 1 AND $user_password == $stored_password){

                        $_SESSION['classteacher'] = $stored_id;

                 echo '
                    <script> 
                    window.open("classteacher/", "_self")
                    </script>
                    ';     
                        
                    }

                   

            }
            
            
            ?>
                

               

                <div class="card-body">

                    <form action="" method="post" class="mt-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Namba Ya Usajili:</label>
                            <input type="text" class="form-control" id="id" placeholder="Ingiza namba ya kitambulisho"
                                name="id">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Neno Siri:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Ingiza neno la siri"
                                name="password">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Nikumbuke
                            </label>
                        </div>
                        <button type="submit" name="ingia" class="btn btn-success">Ingia</button>
                    </form>
                </div>

                <div class="card-footer">
                    CAMS &copy;2023
                </div>

            </div>

        </div>
    </div>
    <!-------LOgin Area End-->

</body>

<!-----Footer Begin-->
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary"> &copy; Class Attendance Management System</span>
        </div>

        <!---LInks start-->
        <script src="node_modules/jquery/dist/jquery.slim.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
        <script src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
        <script src="js/styles.js"></script>
        <!-----Links End-->

    </footer>
</div>
<!----- Footer End-->

</html>