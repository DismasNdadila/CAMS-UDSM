'<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h5 class="h3"><i class="fa-solid fa-chalkboard-user"></i> <?= $class_name ?> ( <small>ID:<?= $classteacher_id ?></small> ) </h5> 
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <!--  <button type="button" class="btn btn-sm btn-outline-secondary">Extra</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Extra</button>----->
            </div>
        </div>
    </div>

    <!------Dashboard Content start-->

    <!------Class Cards begin-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Wanafunzi Jumla</h6>
                        <h2 class="text-right"><i class="fa-solid fa-users"></i><span
                                class="f-right"><?= $total_students; ?></span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Wanafunzi Wakiume</h6>
                        <h2 class="text-right"><i class="fa-solid fa-child"></i><span
                                class="f-right"><?= $total_students_male; ?></span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Wanafunzi Wakike</h6>
                        <h2 class="text-right"><i class="fa-solid fa-child-dress"></i><span
                                class="f-right"><?= $total_female_students; ?></span>
                        </h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Masomo</h6>
                        <h2 class="text-right"><i class="fa-solid fa-book-open"></i><span
                                class="f-right"><?= $total_class_subjects; ?></span></h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----- Class Cards End-->

    <br>
    <h4>Maudhurio Ya Wanafunzi</h4>
    <hr>

    <!--  <div class="alert alert-danger">
                Darasa Halina Wanafunzi
            </div> --->

            <?php  
    
    if(isset($_POST['add'])){


        $firstname = $_POST['firstname'];
        $secondname = $_POST['secondname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];

        $classteacher_id = $_SESSION['classteacher'];

        $add = "INSERT INTO students (firstname,secondname,lastname,gender,class_id,classteacher_id) VALUES ('$firstname','$secondname','$lastname','$gender','$class_id','$classteacher_id')";
        $run = mysqli_query($con,$add);

        if($run){
                echo "
                    <script>window.open('../classteacher/','_self') </script>
                ";
        }

    }
    
    
    ?>

    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
        <i class="fa-solid fa-plus-circle align-text-bottom"></i>
        Ongeza Mwanafunzi
    </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Ongeza Mwanafunzi Darasani</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">


                    <form action="" method="post" class="mt-3">
                        <div class="mb-3 mt-3">
                            <label class="form-label">Jina la Kwanza</label>
                            <input type="text" class="form-control" placeholder="Ingiza jina la kwanza la mwanafunzi"
                                name="firstname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jina la Pili</label>
                            <input type="text" class="form-control" placeholder="Ingiza jina la pili la mwanafunzi"
                                name="secondname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jina la Mwisho</label>
                            <input type="text" class="form-control" placeholder="Ingiza jina la mwisho la mwanafunzi"
                                name="lastname" required>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Jinsia</label>
                            <select class="form-select" name="gender">
                                <option value="M">Mvulana</option>
                                <option value="F">Msichana</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="add" class="btn btn-primary btn-block">Ongeza</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

    <div class="container table-responsive py-5">
        <table class="table table-unbordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Jina la Kwanza</th>
                    <th scope="col">Jina La Pili</th>
                    <th scope="col">Jina La Tatu</th>
                    <th scope="col">Jinsia</th>
                    <th scope="col">Maudhurio</th>
                </tr>
            </thead>
            <tbody>
                <?php  

                //Get class attendance number

                $class_attendance = "SELECT COUNT(attendance_id) AS all_attendance FROM attendance WHERE classteacher_id='$classteacher_id'";
                $run_class_attendance = mysqli_query($con,$class_attendance);
                $row_class_attendance = mysqli_fetch_array($run_class_attendance);
               
                $overall_attendance = $row_class_attendance['all_attendance'];

                  //Get students In class
        $get_students = "SELECT * FROM students WHERE class_id='$class_id' AND classteacher_id='$classteacher_id' ORDER BY student_id DESC";
        $run_students = mysqli_query($con,$get_students);
        $check_students = mysqli_num_rows($run_students);

        if($check_students <= 0){

            echo '<div class="alert alert-danger">
            Darasa Halina Wanafunzi
        </div>';

        }

  while( $row_students = mysqli_fetch_array($run_students)){     

        $student_id = $row_students['student_id'];
        $s_firstname = $row_students['firstname'];
        $s_secondname = $row_students['secondname'];
        $s_lastname = $row_students['lastname'];
        $s_gender = $row_students['gender'];
        

        //Calculate Percentage 
        $get_attendance = "SELECT COUNT(attendance_id) As attended_times FROM attendance WHERE student_id='$student_id'";
        $run_attendance = mysqli_query($con,$get_attendance);
        $row_attendance = mysqli_fetch_array($run_attendance);

        $attended_times = $row_attendance['attended_times'];

        $percentage =   $attended_times * 100 / $overall_attendance;

        $percentage_attendance = number_format($percentage,1);

        if($percentage_attendance >= 50){

            $color = "bg-primary";

        }

        if($percentage_attendance <= 50){

            $color = "bg-warning";

        }
                
                ?>
                <tr>
                <td > <a href="../includes/delete.php?student=<?= $student_id ?>"> <button class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></button></a> </td>
                
                    <td><?= $s_firstname ?></td>
                    <td><?= $s_secondname ?></td>
                    <td><?= $s_lastname ?></td>
                    <td><?= $s_gender ?></td>
                    <td class=" <?= $color ?> text-center "><?= $percentage_attendance ?>%</td>
                </tr>

                <?php 

  }

?>
            </tbody>
        </table>
    </div>





    <!--------Dashboard Content Finish------->