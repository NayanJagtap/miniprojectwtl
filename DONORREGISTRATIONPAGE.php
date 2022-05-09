<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>
<link rel="stylesheet"  href="donoregistrations.css">


</head>
<body>




 <h1 class="bloodrequestform"> BLOOD DONOR REGISTRATION FORM</h1>
 <div class="bloodrequestforms">  
 <h3>Please fill the following information to register as voluntary blood donor </h3>
<form class="myForm" method="post"  action="donoregistration.php" >

<p>
<label>  FULL NAME
<input type="text" name="customer_name" id="caps1" onblur="mycapitalized()" required>
</label> 
</p>

<p>
<label>PHONE NUMBER
<input type="tel" name="phone_number" id="phone" required>
</label>
</p>

<p>
<label>EMAIL
<input type="email" name="email_address" id="email" required onclick="validatephone()">
</label>
</p>

<p>
<label>PATIENT BLOOD GROUP
<select id="bloodgroup" name="bloodgroup" onclick="validatemail()" required> 
<option value="" selected="selected"><h2>Select One</h2></option>
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
 <label> DONOR AGE
       <input type ="text" name="Age" id="age" required>
</P>

<p> 
        <label> ENTER COUNTRY NAME:</label>
        <input type="text" name="country" value="" id="caps4" onblur="mycapitalized()" onclick="validateage()" required>
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
                    
<p>
    <label>UserID
    <input type ="text" name="UserID" value="" id="userid" required></input>
    </label>
</p>


<p>
    <label>Password<br>
    <input type="password" name="password" value="" onclick="validatenum()">
    </label>
</p>


       


<input type="submit" value="submit" class="button">

</form>
<script>
    function mycapitalized(){
        var x=document.getElementById("caps1");
        x.value=x.value.toUpperCase();

        var c=document.getElementById("caps4");
        c.value=c.value.toUpperCase();

        var d=document.getElementById("caps5");
        d.value=d.value.toUpperCase();

        var e=document.getElementById("caps6");
        e.value=e.value.toUpperCase();

        var f=document.getElementById("caps7");
        f.value=f.value.toUpperCase();
    }

    function validatephone(){
        var mobtext=document.getElementById("phone").value;
        var mobexp= /^\d{10}$/;
        if(mobtext.match(mobexp)){
            return true;
        }
        else{
            alert("invalid phone number");
        }
    }
    function validatemail(){
        var emailtext=document.getElementById("email").value;
        var emailexp=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(emailtext.match(emailexp)){
            return true;
        }
        else{
            alert("invalid emailaddress");
        }
    }

    function validateage(){
        var number;
        number=Number(document.getElementById("age").value)
        if(number>=18||number<=40)
        {
            return true;
        }
        else{
            alert('age entered is invalid it must be from 18-40')
        }
    }

    function validatenum(){
        var number;
        number=Number(document.getElementById("userid").value)
        if(number>=0||number<=10000)
        {
            return true;
        }
        else{
            alert('userid entered is invalid it must be number only from 0-10000')
        }
    }
    
</script>

</body>
</html>