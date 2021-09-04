<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="vote.jpg">
    <title>know ur vid no</title>
    <link href="os1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="footer.css">
  <!-- bootstrap for navbar -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link"  href="index.html"><i class="fas fa-home"></i>Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" aria-current="page"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <li><a class="dropdown-item" href="dmk.html"> DMK</a></li>
              <li><a class="dropdown-item" href="ntk.html"> NTK</a></li>
              <li><a class="dropdown-item" href="mnm.html">MNM</a></li>
              <li><a class="dropdown-item" href="bjp.html">BJP</a></li>
            </ul>
          </li>
         
        </ul>
        
          <ul class="mr-auto">
            <li class="nav-item">
              
              <a class="nav-link" href="about.html">About</a>
              </li>
            </ul>
        
      </div>
    </div>
  </nav>
 
    <section>
    <div class="warpper fl">
        <div class="main">
            <div class="head">
<p>
To know your VOTER ID NO</p>
</div>
<div class="form fl shadow-lg p-3 mb-5 bg-body rounded">
                <form method="POST">
  <br>
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
<p class="name text-primary">NAME* :</p>
<p>
<input type="text" name="name" placeholder="Name" class="name-inp"></p>

<p class="name text-primary">FATHER NAME* :</p>
<p>
<input type="text" name="fname" placeholder="fathername" class="name-inp"></p>

<p class="name text-primary">D.O.B* :</P>
<p>
<input type="date" name="dob" placeholder="dob" class="name-inp"></p>

<p class="gender">
<span class="gen text-primary">Gender</span>
                 <input type="checkbox" name="ge" class="genm">
                        <label style="color:blue;">Male</label>
                        <input type="checkbox" name="ge" class="genm">
                        <label style="color:blue;">Female</label>
                    </p>
<p>
<input type="submit"  name="find" value="FIND" class="sub" onClick="no()"/></p>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'tnelection');
if(isset($_POST['find']))
{
  $name=$_POST['name'];
  $query="SELECT * FROM checkdetails where name='$name' ";
  $query_run= mysqli_query($connection,$query);
  while($row = mysqli_fetch_array($query_run))
  {
    
  //   <!-- <form  method="POST">
  //     <br></br>
  //     <center>
  //   <input type="text" name="id"  value="/>
  // </center>
  // </form>
  //    -->
     echo '<script>alert("Your voter id :'.$row['id'].'")</script>';

  }
}
 ?>
</form>

</div>
</div>
</div>
</section>
<br><br>
<br><br>
<br><br>


 <script src="https://kit.fontawesome.com/59a88b1a53.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" ></script> -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


 </body>
 </html>
