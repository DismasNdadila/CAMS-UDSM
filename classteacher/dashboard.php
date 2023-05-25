<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
     
       
        <h5 class="h3"><i class="fa-solid fa-chalkboard-user"></i> <?= $class_name ?> </h5>
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
                        <h2 class="text-right"><i class="fa-solid fa-users"></i><span class="f-right"><?= $total_students; ?></span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Wanafunzi Wakiume</h6>
                        <h2 class="text-right"><i class="fa-solid fa-child"></i><span class="f-right"><?= $total_students_male; ?></span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Wanafunzi Wakike</h6>
                        <h2 class="text-right"><i class="fa-solid fa-child-dress"></i><span class="f-right"><?= $total_female_students; ?></span>
                        </h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Masomo</h6>
                        <h2 class="text-right"><i class="fa-solid fa-book-open"></i><span class="f-right"><?= $total_class_subjects; ?></span></h2>

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


    <div class="container table-responsive py-5">
        <table class="table table-unbordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Jina la Kwanza</th>
                    <th scope="col">Jina La Pili</th>
                    <th scope="col">Jina La Tatu</th>
                    <th scope="col">Jinsia</th>
                    <th scope="col">Maudhurio</th>

                </tr>
            </thead>
            <tbody>
                <?php  
                
                  //Get students In class
        $get_students = "SELECT * FROM students WHERE class_id='$class_id'";
        $run_students = mysqli_query($con,$get_students);

  while( $row_students = mysqli_fetch_array($run_students)){     

        $students_id = $row_students['student_id'];
        $s_firstname = $row_students['firstname'];
        $s_secondname = $row_students['secondname'];
        $s_lastname = $row_students['lastname'];
        $s_gender = $row_students['gender'];
        
                
                ?>
                <tr>
                    <td><?= $s_firstname ?></td>
                    <td><?= $s_secondname ?></td>
                    <td><?= $s_lastname ?></td>
                    <td><?= $s_gender ?></td>
                    <td class=" bg-primary text-center ">100%</td>

                </tr>
             
<?php 

  }

?>
            </tbody>
        </table>
    </div>





    <!--------Dashboard Content Finish------->