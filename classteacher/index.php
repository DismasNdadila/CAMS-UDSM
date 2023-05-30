<?php

include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");


?>

<?php 
        
        if(isset($_SESSION['classteacher'])){

             $classteacher_id = $_SESSION['classteacher'];

        //Get Class Teacher Informaion
        $get_classteacher = "SELECT * FROM classteacher WHERE classteacher_id='$classteacher_id'";
        $run_classteacher = mysqli_query($con,$get_classteacher);
        $row_classteacher = mysqli_fetch_array($run_classteacher);

        $firstname = $row_classteacher['first_name'];
        $middlename = $row_classteacher['middle_name'];
        $lastname = $row_classteacher['last_name'];
        $class_id =$row_classteacher['class_id'];


        //Get Class whicj the teacher teaches
        $get_class = "SELECT * FROM classes WHERE class_id='$class_id'";
        $run_class = mysqli_query($con,$get_class);
        $row_class = mysqli_fetch_array($run_class);

        $class_id = $row_class['class_id'];
        $class_name = $row_class['name'];

            //Total Students
        $get_students_totals = "SELECT COUNT(student_id) AS total_students FROM students WHERE class_id='$class_id' AND classteacher_id='$classteacher_id'";
        $run_students_totals = mysqli_query($con,$get_students_totals);
        $row_students_totals = mysqli_fetch_array($run_students_totals);

        $total_students = $row_students_totals['total_students'];


      //Male Students
      $get_male_students = "SELECT  COUNT(student_id) AS male_students FROM students WHERE gender='M' AND class_id='$class_id' AND classteacher_id='$classteacher_id'";
      $run_male_students = mysqli_query($con,$get_male_students);
      $row_male_students = mysqli_fetch_array($run_male_students);

      $total_students_male = $row_male_students['male_students'];


      //Female Students 
      $get_female_students = "SELECT COUNT(student_id) AS female_students FROM students WHERE gender='F' AND class_id='$class_id' AND classteacher_id='$classteacher_id'";
      $run_female_students = mysqli_query($con,$get_female_students);
      $row_female_students = mysqli_fetch_array($run_female_students);

      $total_female_students = $row_female_students['female_students'];

         //Class Subjects
         $get_class_subjects = "SELECT COUNT(subject_id) AS class_subjects FROM subjects WHERE class_id='$class_id' ";
         $run_class_subjects = mysqli_query($con,$get_class_subjects);
         $row_class_subjects = mysqli_fetch_array($run_class_subjects);

         $total_class_subjects = $row_class_subjects['class_subjects'];

        }
      
        
        ?>
        
        <?php


        if(!isset($_SESSION['classteacher'])){
            echo '
            <script> 
            window.open("../", "_self")
            </script>
            ';   
        }

        if (!isset($_GET['attendance']) and !isset($_GET['timetable']))  {

            include("../classteacher/dashboard.php");
        }
        if (isset($_GET['attendance'])) {

            include("../classteacher/attendance.php");
        }

        if (isset($_GET['timetable'])) {
            include("../classteacher/timetable.php");
        }

     
        ?>


<?php

include("../includes/footer.php");

?>