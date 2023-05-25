
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h3"><i class="fa-solid fa-person-circle-plus"></i> Maudhurio | <?= $class_name; ?> | <small><?= date("Y/m/d"); ?></small>
        </h5>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <!--  <button type="button" class="btn btn-sm btn-outline-secondary">Extra</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Extra</button>----->
            </div>
        </div>
    </div>

    <!---Attendance Table begin-->

 <!--- <div class="alert alert-danger">
       Maudhurio Yameshakusanywa
    </div> --->


    <div class="container table-responsive py-5">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jina la Kwanza</th>
                    <th scope="col">Jina La Pili</th>
                    <th scope="col">Jina La Tatu</th>
                    <th scope="col">Jinsia</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php
                //Get Stduents For attendance

                $get_students = "SELECT * FROM students WHERE class_id='$class_id'";
                $run_students = mysqli_query($con,$get_students);
                $i = 0;
             while( $row_students = mysqli_fetch_array($run_students)){

                $first_name = $row_students['firstname'];
                $i++;
                $second_name = $row_students['secondname'];
                $last_name = $row_students['lastname'];
                $gender = $row_students['gender'];
                
                ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $first_name ?></td>
                    <td><?= $second_name ?></td>
                    <td><?= $last_name ?></td>
                    <td><?= $gender ?></td>
                    <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#checkattend"> <i class="fa-solid fa-person-circle-plus fa-xl"></i>
                            Kaudhuria</button></td>

                </tr>
       <?php 
       }
       
       ?>
            </tbody>
        </table>
    </div>


    <!----- Attendance Table end-->
