<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="vote.jpg">
    <title>check details</title>
    <link href="cd.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="footer.css"> -->
 <!--Css Stylesheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script>
function populate(s1,s2){
      var s1 = document.getElementById(s1);
 	var s2 = document.getElementById(s2);
 	s2.innerHTML = "";
   if(s1.value == "Sivagangai")

        {
          var optionArray = ["|","Thirumaya|Thirumaya","Alangudi|Alangudi","Karaikudi|Karaikudi","Tiruppattur|Tiruppattur","Sivaganga|Sivaganga","Manamadurai|Manamadurai"];
	}
   else if(s1.value == "Madurai")

    {
       var optionArray = ["|","Melur|Melur","Madurai East|Madurai East","Madurai North|Madurai North","Madurai South|Madurai South","Madurai Central|Madurai Central", "Madurai West|Madurai West"];
    }
    else if(s1.value == "Chennai")

    {
       var optionArray = ["|","Thiruvallur|Thiruvallur","Chennai North|Chennai North","Chennai South|Chennai South","Chennai Central|Chennai Central","Sriperumbudur|Sriperumbudur"];
    }
    
    else if(s1.value == "Coimbatore")
    {
   var optionArray = ["|","Singanallur|Singanallur","Coimbatore West|Coimbatore West","Coimbatore East|Coimbatore East","Palladam|Palladam","Tiruppur|Tiruppur"];
   }
   else if(s1.value == "Tiruchirappalli")
   {
    var optionArray = ["|","Manapparai|Manapparai","Srirangam	Thiru|Srirangam	Thiru","Tiruchirappalli (West)|Tiruchirappalli (West)","Tiruchirappalli (East)|Tiruchirappalli (East)","Thiruverumbur|Thiruverumbur"];
   }
	for(var option in optionArray)

    {
       var pair = optionArray[option].split("|");
	var newOption = document.createElement("option");
	newOption.value = pair[0];
	newOption.innerHTML = pair[1];
	s2.options.add(newOption);
     }
}

  </script>
</head>
<body style=" background-color: #f4f5f7;">
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 h-80" src="tnelelogo.jpg" alt="home">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100  h-80" src="tnelelogo.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-80" src="tnelelogo.jpg" alt="Third slide">
      </div>
    </div>
   </div>
  <marquee bgcolor="#92a8d1"  style="color: white; text-shadow: 4px 4px 6px #000000; font-size:30px;"><b> ONLINE VOTING SYSTEM</b> || இணையதள வாக்களிப்பு</marquee>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="fas fa-home"></i>Home</a>
      
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Our services
              
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="os1.php">To know your voter id NO</a></li>
              
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Political Parties
          
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="admk.html">ADMK </a></li>
              <li><a class="dropdown-item" href="dmk.html"> DMK </a></li>
              <li><a class="dropdown-item" href="ntk.html">NTK </a></li>
              <li><a class="dropdown-item" href="mnm.html">MNM</a></li>
              <li><a class="dropdown-item" href="bjp.html">BJP</a></li>
            </ul>
          </li>
         
        </ul>
        
          <ul class="ml-auto">
            <li class="nav-item">
                 <a class="nav-link" href="about.html">About</a>
              </li>
            </ul>
    </div>
  </nav>
    <section>
    <div class="warpper fl">
        <div class="main">
            <div class="head">
<p>CHECK YOUR DETAILS</p>
</div>
<div  class="form fl shadow-lg p-3 mb-5 bg-white rounded">
  <form  method="POST" action="">
  <br><br>
  <p class="name text-primary">District* :</p>
  <P><select id="slct1" name="slct1" onchange="populate(this.id,'slct2')" class="name-inp">
 <option value=""></option>
<option value="Chennai">Chennai</option>
<option value="Coimbatore">Coimbatore</option>
<option value="Madurai">Madurai</option>
<option value="Sivagangai">Sivagangai</option>
<option value="Tiruchirappalli">Tiruchirappalli</option>
</select>
<p class="name text-primary">Constituency* :</p>
<P>
<select id="slct2" name="slct2" class="name-inp"></select>
</P>
<p class="name text-primary">Enter VOTER ID no* :</p>
<p>
<input type="text" name="vid" class="name-inp"></p>
</br>
<center><button id="btn" type="submit" name="view" value="view">view</button></center>
</br>
</form>
<?php
if(isset($_POST['view']))
{
$hostname="localhost";
$username= "root";
$password= "";
$database="tnelection";
$connection=mysqli_connect($hostname,$username,$password,$database);

  $userid= $_POST['vid'];
  $query="SELECT * FROM testvote where Voter_id_no='$userid' ";
  $result=mysqli_query($connection,$query);
  $count=mysqli_num_rows($result);
 

  if($count>0)
  {
    echo '<script>alert("'.$userid.'Your already voted")</script>';

  }
  else {      
    $id=$_POST['vid'];
    $query = mysqli_query($connection, "SELECT * FROM checkdetails where id='$id' ");
    $row = mysqli_fetch_assoc($query);
    echo '
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script>
                $(document).ready(function(){
                    $("#viewdetails").modal(); 
                });
            </script>
        ';
    echo '
<!-- Edit modal -->
<div class="modal fade" id="viewdetails" tabindex="-1" role="dialog" aria-labelledby="EditdepartmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Voter Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="vote.php" enctype="multipart/form-data">
                <div class="modal-body">
                <div class="form-group">
                <label for="message-text" class="col-form-label">Voter id:</label>
                <input type="text" class="form-control"  name="voter_id" id="edit_departname" value="'.$row['id'].'">
            </div>
              
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Voter Name :</label>
                        <input type="text" class="form-control"  id="edit_departname" value="'.$row['Name'].'">
                    </div>
                    <div class="form-group">
                    <label for="message-text" class="col-form-label">Voter father Name :</label>
                    <input type="text" class="form-control"  id="edit_departname" value="'.$row['Father_name'].'">
                </div>
               
                <div class="form-group">
                <label for="message-text" class="col-form-label">Voter D.O.B:</label>
                <input type="text" class="form-control"  id="edit_departname" value="'.$row['D_O_B'].'">
            </div>
            <div class="form-group">
            <label for="message-text" class="col-form-label">Gender :</label>
            <input type="text" class="form-control"  id="edit_departname" value="'.$row['Gender'].'">
        </div>
                    <div class="form-group">
                         <label for="message-text" class="col-form-label">Voter Address :</label>
                        <input type="text" class="form-control" id="edit_depart_amt" value="'.$row['Address'].'">
                   </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-success">Continue</button>
                </div>
            </form>
            </div>
        </div>
        </div>';


      
  }
}

 ?>


</div>
</div>
</div>
</section>
<br></br>
<br></br>
<br></br>

 <script src="https://kit.fontawesome.com/59a88b1a53.js" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
 
 </body>
 </html>
