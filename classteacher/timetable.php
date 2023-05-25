<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h3"><i class="fa-solid fa-table"></i> Ratiba | <?= $class_name; ?>    </h5>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <!--  <button type="button" class="btn btn-sm btn-outline-secondary">Extra</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Extra</button>----->
            </div>
        </div>
    </div>

    <!---Attendance Table begin-->

  <!--  <div class="alert alert-danger">
        Darasa Halina Ratiba
</div> --->

    <div class="container table-responsive py-5">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Siku</th>
                    <th scope="col">Somo</th>
                    <th scope="col">Muda</th>
                    

                </tr>
            </thead>
            <tbody>
                <?php 
                //get Classteacher timetable 
                    $get_timetable = "SELECT * FROM timetable WHERE classteacher_id ='$classteacher_id'";
                    $run_timetable = mysqli_query($con,$get_timetable);

                 while( $row_timetable = mysqli_fetch_array($run_timetable)){

                    $day = $row_timetable['day'];
                    $subject_id  = $row_timetable['subject_id'];
                    $start_time = $row_timetable['start_time'];
                    $end_time = $row_timetable['end_time'];

                    //Get Subject NAme
                    $get_subject = "SELECT subject_name FROM subjects WHERE subject_id='$subject_id'";
                    $run_subject = mysqli_query($con,$get_subject);
                    $row_subject = mysqli_fetch_array($run_subject);

                    $subject = $row_subject['subject_name'];

                
                ?>
                <tr>
                    <td scope="row"><?= $day; ?></td>
                    <td scope="row"><?= $subject ?></td>
                    <td scope="row"><?= $start_time ?> - <?= $end_time ?></td>
                
                </tr>

                <?php 
                }
                
                ?>

            </tbody>
        </table>
    </div>


    <!----- Attendance Table end-->