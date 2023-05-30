<?php

if (isset($_GET['attendance'])) {
    $attendance_active = "active";
}

if(isset($_GET['timetable'])){
    $timetable_active = "active";
}

if(isset($_GET['addstudent'])){
    $addstudent_active = "active";
}

if (!isset($_GET['attendance']) AND !isset($_GET['timetable']) AND !isset($_GET['addstudent'])) {
    $mwanzo_active = "active";
}


?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">C A M S </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--<input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">-->
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#"></a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?= $mwanzo_active ?>" aria-current="page" href="../classteacher/">
                            <i class="fa-solid fa-home align-text-bottom"></i>
                            Mwanzo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $attendance_active ?>" href="../classteacher/?attendance">
                            <i class="fa-solid fa-person-circle-plus align-text-bottom"></i>
                            Maudhurio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= $timetable_active ?>" href="../classteacher/?timetable">
                            <i class="fa-solid fa-table align-text-bottom"></i>
                            Ratiba
                        </a>
                    </li>
                  
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                    <span>AKAUNTI</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            <i class="fa-solid fa-right-from-bracket"></i> Ondoka
                        </a>
                    </li>

                </ul>
            </div>
        </nav>