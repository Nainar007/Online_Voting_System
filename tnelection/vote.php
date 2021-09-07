
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="footer.css">

  <link rel="stylesheet" type="text/css" href="radio.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="vote.jpg">
  <title>vote the candidate</title>
<style>
.button {
  
  border: none;
  color: rgb(24, 20, 20);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
table {
  width:100%;
}
table, th, td {

  border: 3px solid black;
  border-spacing: 10px;


}
th{
  padding: 20px;
  text-align: justify;
}

</style>
<script type="text/javascript">
  function validate()
  {
    if((ins.admk.checked=="") && (ins.dmk.checked=="") && (ins.ntk.checked=="") && (ins.mnm.checked=="") && (ins.bjp.checked=="") && (ins.nota.checked==""))
    {
      alert("Vote the Candidate!!");
  return false;
  }
  alert("YOU VOTED!! click OK to continue");
  }
  </script>
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
  <marquee bgcolor="#92a8d1"  style="color: white; text-shadow: 4px 4px 6px #000000; font-size:30px;"><b> ONLINE VOTING SYSTEM</b> || இணையதள வாக்களிப்பு</marquee>
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
              <li><a class="dropdown-item" href="admk.html"> ADMK</a></li>
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
    <br></br>
    <section >
      <form name="ins" onsubmit="return validate()" action="result.php" method="post">
      <input type="hidden" value="<?php echo $_POST['voter_id']?>" name="voter_id">
        <center><caption><h1 style="color: blue; text-shadow: 2px 2px 4px #000000; font-size:50px;">vote the candidates</h1></caption></center>
        <hr class="hr mx-5 mt-5" style="box-shadow:5px 4px 8px rgb(24, 23, 23);">
        <br>
<table style="box-shadow:5px 4px 8px rgb(24, 23, 23);">
  
  <tr>
    
   <th style="box-shadow:5px 4px 8px rgb(24, 23, 23);">
     <label for="admk">
  <img src="admklogo.jpg" style="width:200px;height:170px;"/>
<input type="radio" class="radio" name="selectedCandidate" id="admk" value="admk" ><strong>ADMK</strong>
 </label>
 <hr class="hr mx-5 mt-5">

 </th>
    <th>
      <label for="dmk">
         <img src="dmklogo.jpg"  style="width:200px;height:170px;"/>
         <input type="radio" class="radio" name="selectedCandidate" id="dmk" value="dmk" ><strong>DMK</strong>
</label>
<hr class="hr mx-5 mt-5">

      </th>
    <th  style="box-shadow:5px 4px 8px rgb(24, 23, 23);">
      <label for="ntk">
        <img src="ntklogo.jpg" style="width:200px;height:170px;"/>
        <input type="radio" class="radio" name="selectedCandidate" id="ntk" value="NTK" ><strong>NTK</strong>
</label>
<hr class="hr mx-5 mt-5">

      </th>

  </tr>
  <center>
  <tr>
    <th>
      <label for="mnm">
        <img src="mnmlogo.jpg" style="width:200px;height:170px;"/>
    <input type="radio" class="radio" name="selectedCandidate" id="mnm" value="MNM" ><strong>MNM</strong>
</label>
<hr class="hr mx-5 mt-5">

     </th>
    <th style="box-shadow:5px 4px 8px rgb(24, 23, 23);">
      <label for="bjp">
        <img src="bjplogo.jpg" style="width:200px;height:170px;"/>
        <input type="radio" class="radio" name="selectedCandidate" id="bjp" value="BJP" ><strong>BJP</strong>
        </label>
    <hr class="hr mx-5 mt-5">

      </th>
      <th>
        <label for="nota">
          <img src="notalogo.jpg" style="width:200px;height:170px;"/>
          <input type="radio" class="radio" name="selectedCandidate" id="nota" value="NOTA" ><strong>NOTA</strong>
          </label>
    <hr class="hr mx-5 mt-5">

        </th>
  </tr>
</center>
</table>
<br>
<center>
<button type="submit" name="vote" id="btn" class="button"><strong>VOTE</strong></button>
</center>
</form>
</section>
<br></br>
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
