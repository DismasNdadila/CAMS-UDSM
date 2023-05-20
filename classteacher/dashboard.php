<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
        <?php 
        
        $classteacher_id = $_SESSION['classteacher'];

        //Get Class Teacher Informaion
        $get_classteacher = "SELECT * FROM classteacher WHERE classteacher_id='$classteacher_id'";
        $run_classteacher = mysqli_query($con,$get_classteacher);
        $row_classteacher = mysqli_fetch_array($run_classteacher);

        $firstname = $row_classteacher['firstname'];
        $middlename = $row_classteacher['middle_name'];
        $lastname = $row_classteacher['lastname'];
        $class_id =$row_classteacher['class_id'];

        //Get Class Teacher Class
        
        
        ?>
       
        <h5 class="h3"><i class="fa-solid fa-chalkboard-user"></i> Darasa la 4 A</h5>
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
                        <h2 class="text-right"><i class="fa-solid fa-users"></i><span class="f-right">5</span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Wanafunzi Wakiume</h6>
                        <h2 class="text-right"><i class="fa-solid fa-child"></i><span class="f-right">3</span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Wanafunzi Wakike</h6>
                        <h2 class="text-right"><i class="fa-solid fa-child-dress"></i><span class="f-right">2</span>
                        </h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Masomo</h6>
                        <h2 class="text-right"><i class="fa-solid fa-book-open"></i><span class="f-right">6</span></h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----- Class Cards End-->

    <br>
    <h4>Majina Ya Wanafunzi</h4>
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


                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juma</td>
                    <td>Mango</td>
                    <td>Majani</td>
                    <td>M</td>

                </tr>
                <tr>
                    <td>Henry </td>
                    <td>Memebe</td>
                    <td>Kitochi</td>
                    <td>M</td>
                </tr>

                <tr>
                    <td>Lucia</td>
                    <td>membe</td>
                    <td>Masawe</td>
                    <td>F</td>
                </tr>

                <tr>
                    <td>Quick </td>
                    <td>fast</td>
                    <td>Sky</td>
                    <td>M</td>
                </tr>

                <tr>
                    <td>lucia </td>
                    <td>mango</td>
                    <td>Nembo</td>
                    <td>F</td>
                </tr>

            </tbody>
        </table>
    </div>





    <!--------Dashboard Content Finish------->