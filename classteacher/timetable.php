
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

   <?php  


//add subject to timetable

if(isset($_POST['add'])){

    $start_time_t = $_POST['start_time'];
    $end_time_t = $_POST['end_time'];
    $subject_t = $_POST['somo'];
    $day_t = $_POST['siku'];


            $add = "INSERT INTO timetable (day,subject_id,start_time,end_time,classteacher_id,class_id)
             VALUES
            ('$day_t','$subject_t','$start_time_t','$end_time_t','$classteacher_id','$class_id')";
            $run_add = mysqli_query($con,$add);

            if($run_add){

                echo "
                    <script> window.open('../classteacher/?timetable','_self') </script>
                ";

            }

}

   




    ?>
    <!-- Button to Open the Modal -->
<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
 <i class=" fa-solid fa-plus"></i>  Ongeza Somo Kwenye Ratiba
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ongeza Somo</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
      <form action="" method="post" class="mt-3">
                    <div class="mb-3 mt-3">
                    <label class="form-label">Mda wa Kuanza Kipindi</label>
                        <input type="time" class="form-control" placeholder="Ingiza jina la kwanza la mwanafunzi"
                            name="start_time" required>
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Muda wa Kumaliza Kipindi</label>
                        <input type="time" class="form-control" placeholder="Ingiza jina la pili la mwanafunzi"
                            name="end_time" required>
                    </div>
          
              

                    <div class="mb-3">
                    <label class="form-label">Somo</label>
                        <select class="form-select" name="somo" required>
                            <?php  
                            //Get Subjects
                            $subjects = "SELECT * FROM subjects WHERE class_id='$class_id'";
                            $run = mysqli_query($con,$subjects);

                            while($row = mysqli_fetch_array($run)){
                                $subject_name = $row['subject_name'];
                                $subject_id = $row['subject_id'];
                            
                            ?>

                            <option value="<?= $subject_id ?>"><?= $subject_name ?></option>
                           <?php 
                               }
                           ?>
                        </select>
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Siku</label>
                        <select class="form-select" name="siku" required>
                            <option value="Jumatatu">Jumatatu</option>
                            <option value="Jumanne">Jumanne</option>
                            <option value="Jumatano">Jumatano</option>
                            <option value="Alhamisi">Alhamisi</option>
                            <option value="Ijumaa">Ijumaa</option>
                        </select>
                    </div>
                            <div class="d-grid">
                    <button type="submit" name="add" class="btn btn-primary btn-block">Ongeza</button></div>
                </form>

      </div>  

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
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php 
                //get Classteacher timetable 
                    $get_timetable = "SELECT * FROM timetable WHERE classteacher_id ='$classteacher_id'";
                    $run_timetable = mysqli_query($con,$get_timetable);
                    $check_timetable = mysqli_fetch_array($run_timetable);

                    if($check_timetable <= 0){

                        echo '
                        <div class="alert alert-danger">
                        Darasa Halina Ratiba
                        </div>
                        ';

                    }

                 while( $row_timetable = mysqli_fetch_array($run_timetable)){

                    $day = $row_timetable['day'];
                    $subject_id  = $row_timetable['subject_id'];
                    $start_time = $row_timetable['start_time'];
                    $end_time = $row_timetable['end_time'];
                    $timetable_id = $row_timetable['timetable_id'];

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
                    <td scope="row"> <a href="../includes/delete.php?timetable=<?= $timetable_id ?>"> <button class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></button></a> </td>
                </tr>

                <?php 
                }
                
                ?>

            </tbody>
        </table>
    </div>


    <!----- Attendance Table end-->