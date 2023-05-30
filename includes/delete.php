<?php 

include("db.php");

//delete timetable

if(isset($_GET['timetable'])){

    $delete_id  = $_GET['timetable'];

    $delete = "DELETE  FROM timetable WHERE timetable_id='$delete_id'";
    $run = mysqli_query($con,$delete);

    if($run){
        echo "
            <script>window.open('../classteacher/?timetable','_self') </script>
        ";
    }

}

//Delete students

if(isset($_GET['student'])){

    $delete_id = $_GET['student'];

    $delete = "DELETE FROM students WHERE student_id='$delete_id'";
    $run = mysqli_query($con,$delete);

    if($run){

        echo "
            <script>window.open('../','_self') </script>
        ";

    }

}

?>