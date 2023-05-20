<?php
include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");


?>
        
        <?php


        if(!isset($_SESSION['classteacher'])){
            echo '
            <script> 
            window.open("../", "_self")
            </script>
            ';   
        }

        if (!isset($_GET['attendance']) and !isset($_GET['timetable'])) {

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