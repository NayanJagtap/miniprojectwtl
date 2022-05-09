<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landingpages.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="navbar-nav">
          <a class="nav-item nav-link" href="homepage.php"><h1 id="navbarid">HOME</h1></a></h1>
            <a class="nav-item nav-link" href="DONORREGISTRATIONPAGE.php"><h1 id="navbarid">Blood Donor Registration</h1></a></h1>
           <a class="nav-item nav-link" href="landingpage.php"> <h1 id="navbarid">Find a Blood Donor </h1></a></h1>
            <a class="nav-item nav-link" href="firstpage.php"><h1 id="navbarid">About Us<h1></a></h1>
          </div>
      </nav>
</head>
<body>

      


      <!------------------------------- Find a donor ------------------------------------------>
      <h1 class="formforfetching">SEARCH FOR BLOOD DONORS</h1>
      <form class="formforfetching" method="post"  action="landingpage.php">
      <p>
<label>PATIENT BLOOD GROUP
<select id="bloodgroup" name="bloodgroup"> 
<option value="" selected="selected">Select One</option>
<option value="A+" >A+</option>
<option value="A-" >A-</option>
<option value="B+" >B+</option>
<option value="AB+" >AB+</option>
<option value="AB-" >AB-</option>
<option value="O+">O+</option>
<option value="O-" >O-</option>
<option value="A1+" >A1+</option>
<option value="A1-" >A1-</option>
<option value="A2+" >A2+</option>
<option value="A2-" >A2-</option>
<option value="A1B+" >A1B+</option>
<option value="A1B-" >A1B-</option>
<option value="A2B+" >A2B+</option>
<option value="A2B-" >A2B-</option>
</select>
</label> 
</p>

<p> 
        <label> ENTER COUNTRY NAME:
        <input type="text" name="country" value="" id="caps4" onblur="mycapitalized()" required>
        </label>
</p>


<p>
    <label>ENTER STATE  NAME:
    <input type="text" name="state" value="" id="caps5" onblur="mycapitalized()" required>
    </label> 
</p>

<p>
    <label>ENTER DISTRICT NAME
    <input type="text" name="District" value="" id="caps6" onblur="mycapitalized()" required>
    </label> 
</p>

<p>
    <label>ENTER CITY NAME
    <input type="text" name="City" value="" id="caps7" onblur="mycapitalized()" required>
    </label> 
</p>

<input type="submit" value="submit" class="buttons">
<script>
    function mycapitalized(){

        var c=document.getElementById("caps4");
        c.value=c.value.toUpperCase();

        var d=document.getElementById("caps5");
        d.value=d.value.toUpperCase();

        var e=document.getElementById("caps6");
        e.value=e.value.toUpperCase();

        var f=document.getElementById("caps7");
        f.value=f.value.toUpperCase();
    }
</script>

</form>

      
    
        <table class="content-tables">
          <thead>
          <tr>
          <th>NAME</th>
          <th>PHONE NO</th>
          <th>EMAIL ADDRESS</th>
          </tr>
          </thead>
          <tbody>
            
          </tbody>
          <style>
            
          </style>

          <?php
          error_reporting(E_ERROR|E_PARSE);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "wtlminiproject");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $bloodgroup=$_POST['bloodgroup'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $District=$_POST['District'];
    $City=$_POST['City'];
 
// Attempt select query execution
$sql="SELECT customer_name,phone_number,email_address FROM donor_registrations WHERE bloodgroup='$bloodgroup' AND country='$country' AND state='$state' AND District='$District' AND City='$City'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td><h6><b>" . $row['customer_name'] . "</td></h6></b>";
                echo "<td><h6><b>" . $row['phone_number'] . "</td></h6></b>";
                echo "<td><h6><b>" . $row['email_address'] . "</td></h6></b>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
        </table>
            

      
        
</body>
</html>