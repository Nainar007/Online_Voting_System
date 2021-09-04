<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="vote.jpg">
  <title>RESULTS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    #nm {
        width: 80%;
    }

h4 {text-align: center;}
</style>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" type="text/css" href="footer.css">
  

</head>
<body style="background-color: #f4f5f7;">
  
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="tnelelogo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="tnelelogo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="tnelelogo.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<marquee bgcolor="#92a8d1" style="color: white; text-shadow: 4px 4px 6px #000000; font-size:30px;"><b> ONLINE VOTING SYSTEM</b> || இணையதள வாக்களிப்பு</marquee>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
        <li class="nav-item">
          <a class="nav-link"  href="index.html"><i class="fas fa-home"></i>Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Our services
            
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="os1.php">To know your voter id NO</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Political Parties
        
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="admk.html">ADMK</a></li>
            <li><a class="dropdown-item" href="dmk.html">DMK</a></li>
            <li><a class="dropdown-item" href="ntk.html">NTK</a></li>
            <li><a class="dropdown-item" href="mnm.html">MNM</a></li>
            <li><a class="dropdown-item" href="bjp.html">BJP</a></li>
          </ul>
        </li>
       
      </ul>
      
        <ul class="mr-auto">
          <li class="nav-item">
             <a class="nav-link" href="about.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a>
            </li>
          </ul>
      
    </div>
  </div>
</nav>
 
  <section>
    <div class="container-lg" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12 shadow-lg p-3 mb-5 bg-body rounded" style="border:2px solid gray;">
      <br>
          
          <center><h1 style="color: blue; text-shadow: 2px 2px 4px #000000; font-size:50px;" class="specialHead">RESULTS</h1></center>
         
          <hr class="hr mx-5 mt-5" id="hr" style="box-shadow:5px 4px 8px rgb(24, 23, 23);">
          <div class="col-sm-12">

    <?php

    $hostname="localhost";
    $username= "root";
    $password= "";
    $database="tnelection";

    // UserInput Test
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
      }


    if(isset($_POST["selectedCandidate"]))
    {

      $voted_for= test_input($_POST["selectedCandidate"]);

    }

    $DB_HOST= "localhost";
    $DB_USER="root";
    $DB_PASSWORD="";
    $DB_NAME="tnelection";


    $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
    or die("Couldn't Connect to Database :");


    $sql= "INSERT INTO tnelection.vote VALUES(null,'".$voted_for."');";


    if(mysqli_query($conn, $sql)){

    echo "<center><h3 class='text-info specialHead text-center'><strong>*YOU HAVE VOTED SUCCESSFULLY AND RESULTS ARE*</strong></h3></center><br>";
    }
    else
    {
    echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
    echo "<a href='vote.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> BACK</strong> </a><br>";
    }


                $ADMK=0;
                $DMK=0;
                $NTK=0;
                $MNM=0;
                $NOTA=0;
              $BJP=0;

                $conn = mysqli_connect($hostname, $username, $password, $database);
                if(!$conn)
                {
                  echo "Error While Connecting.";
                }
                else
                {

                  //ADMK
                  $sql ="SELECT * FROM vote WHERE voted_for='ADMK'";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $ADMK++;
                    }

                    $ADMK_value= $ADMK*10;

                    echo "<strong>ADMK</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-striped' role='progressbar' aria-valuenow=\"$ADMK_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ADMK_value."%'>
                        <span class='sr-only'>ADMK</span>
                      </div>
                    </div>
                    <br>
                    ";
                  }

           
                  // DMK
                  $sql="SELECT * FROM vote WHERE voted_for='DMK'";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $DMK++;
                    }


                    $DMK_value= $DMK*10;

                    echo "<strong>DMK</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-striped bg-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$DMK_value."%'>
                        <span class='sr-only'>DMK</span>
                      </div>
                    </div>
                    <br>
                    ";
                  }

                  // NTK
                  $sql ="SELECT * FROM vote WHERE voted_for='NTK'";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $NTK++;
                    }


                    $NTK_value= $NTK*10;

                    echo "<strong>NTK</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-striped bg-danger' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$NTK_value."%'>
                        <span class='sr-only'>NTK</span>
                      </div>
                    </div>
                    <br>
                    ";
                  }

            //MNM
                  $sql ="SELECT * FROM vote WHERE voted_for='MNM'";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $MNM++;
                    }


                    $MNM_value= $MNM*10;

                    echo "<strong>MNM</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-striped bg-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$MNM_value."%'>
                        <span class='sr-only'>MNM</span>
                      </div>
                    </div>
                    <br>
                    ";
                  }

                          //BJP
                                $sql ="SELECT * FROM vote WHERE voted_for='BJP'";
                                $result= mysqli_query($conn, $sql);

                                if(mysqli_num_rows($result)>0)
                                {
                                  while($row= mysqli_fetch_assoc($result))
                                  {
                                    if($row['voted_for'])
                                      $BJP++;
                                  }


                                  $BJP_value= $BJP*10;

                                  echo "<strong>BJP</strong><br>";
                                  echo "
                                  <div class='progress'>
                                    <div class='progress-bar progress-bar-striped bg-success' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$BJP_value."%'>
                                      <span class='sr-only'>BJP</span>
                                    </div>
                                  </div>
                                  <br>
                                  ";
                                }

                                //NOTA
                                      $sql ="SELECT * FROM vote WHERE voted_for='NOTA'";
                                      $result= mysqli_query($conn, $sql);

                                      if(mysqli_num_rows($result)>0)
                                      {
                                        while($row= mysqli_fetch_assoc($result))
                                        {
                                          if($row['voted_for'])
                                            $NOTA++;
                                        }


                                        $NOTA_value= $NOTA*10;

                                        echo "<strong>NOTA</strong><br>";
                                        echo "
                                        <div class='progress'>
                                          <div class='progress-bar progress-bar-striped  bg-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$NOTA_value."%'>
                                            <span class='sr-only'>NOTA</span>
                                          </div>
                                        </div>
                                        <br>
                                        ";
                                      }

                 echo "<hr>";

                  $total=0;

                  // Total
                  $sql ="SELECT * FROM vote";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $total++;
                    }


                    $total= $total*1;

                    echo "<strong>Total Number of Votes</strong><br>";
                    echo "
                    <div class='text-primary'>
                      <h3 class='normalFont'>VOTES : $total </h3>
                    </div>
                    ";
                  }

                }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>


  </section>
 
 <!--Section: contact-->
<section id="contact" class="py-5" style="background-color: #eee;">

<div class="container">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center mb-5">Contact us</h2>
 
   
    <!-- Grid row -->
    <div class="row">

        

        <!-- Grid column -->
        <div class="col-md text-center">
        <ul class="list-unstyled mb-0">
            <li>
              <br>
            <i class="fas fa-map-marker-alt fa-2x purple-text"></i>
            <p> IT-VCET,Viraganoor,Madurai west</p>
            </li>
            </ul>
            </div>
            <div class="col-md text-center">
              <ul class="list-unstyled mb-0">
                  <li>
                    <br>
                  <i class="fas fa fa-fax fa-2x purple-text"></i>
                  <p>045-12345678</p>
                  </li>
                  </ul>
                  </div>
            <div class="col-md text-center">
              <ul class="list-unstyled mb-0">
            <li>
            <i class="fas fa-phone fa-2x mt-4 purple-text"></i>
            <p>01020304</p>
            </li>
            </ul>
            </div>
            <div class="col-md text-center">
              <ul class="list-unstyled mb-0">
            <li>
            <i class="fas fa-envelope fa-2x mt-4 purple-text"></i>
            <p class="mb-0">Tne@Gov.In</p>
            </li>
        </ul>
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
   
</div>

</section>
<!--Section: contact-->
  <script src="https://kit.fontawesome.com/59a88b1a53.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
  </html>
