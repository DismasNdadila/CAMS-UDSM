<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h3"><i class="fa-solid fa-chalkboard-user"></i> CAMS ADMIN</h5>
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
                        <h6 class="m-b-20">Wanafunzi</h6>
                        <?php  
                        
                        $query  = "SELECT COUNT(student_id) AS students FROM students";
                        $run = mysqli_query($con,$query);
                        $row = mysqli_fetch_array($run);

                        $students = $row['students'];
                    
                    ?>
                        <h2 class="text-right"><i class="fa-solid fa-users"></i><span class="f-right">
                            <?= $students ?></span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Walimu</h6>
                        <?php  
                        
                            $query  = "SELECT COUNT(classteacher_id) AS teachers FROM classteacher";
                            $run = mysqli_query($con,$query);
                            $row = mysqli_fetch_array($run);

                            $teachers = $row['teachers'];
                        
                        ?>
                        <h2 class="text-right"><i class="fa-solid fa-person-chalkboard"></i><span
                                class="f-right"><?= $teachers ?></span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Madarasa</h6>
                        <?php  
                        
                        $query  = "SELECT COUNT(class_id) AS classes FROM classes";
                        $run = mysqli_query($con,$query);
                        $row = mysqli_fetch_array($run);

                        $classes = $row['classes'];
                    
                    ?>
                        <h2 class="text-right"><i class="fa-solid fa-school"></i><span class="f-right">
                            <?= $classes ?></span>
                        </h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Masomo</h6>
                        <?php  
                        
                        $query  = "SELECT COUNT(subject_id) AS subjects FROM subjects";
                        $run = mysqli_query($con,$query);
                        $row = mysqli_fetch_array($run);

                        $subjects = $row['subjects'];
                    
                    ?>
                        <h2 class="text-right"><i class="fa-solid fa-book-open"></i><span class="f-right">
                            <?= $subjects ?></span></h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----- Class Cards End-->

    <div class="container table-responsive py-5">
        <h4>Wanafunzi</h4>
        <table class="table table-unbordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Jina la Kwanza</th>
                    <th scope="col">Jina La Pili</th>
                    <th scope="col">Jina La Tatu</th>
                    <th scope="col">Jinsia</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php  

             
                  //Get students In class
        $get_students = "SELECT * FROM students  ORDER BY student_id DESC";
        $run_students = mysqli_query($con,$get_students);
        $check_students = mysqli_num_rows($run_students);
  

  while( $row_students = mysqli_fetch_array($run_students)){     

        $student_id = $row_students['student_id'];
        $s_firstname = $row_students['firstname'];
        $s_secondname = $row_students['secondname'];
        $s_lastname = $row_students['lastname'];
        $s_gender = $row_students['gender'];
        

      
                
                ?>
                <tr>
                <td > <a href="../includes/delete.php?student=<?= $student_id ?>"> <button class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></button></a> </td>
                
                    <td><?= $s_firstname ?></td>
                    <td><?= $s_secondname ?></td>
                    <td><?= $s_lastname ?></td>
                    <td><?= $s_gender ?></td>
                   
                </tr>

                <?php 

  }

?>
            </tbody>
        </table>
    </div>




    <!--  <div class="alert alert-danger">
                Darasa Halina Wanafunzi
            </div> --->




    <!--------Dashboard Content Finish------->