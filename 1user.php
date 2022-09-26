<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <script type="text/javascript">  
            function selects(){  
                var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  
            }             
        </script>   
</head>
<body>  
     <form class="hosp" action="2usersubmit.php" method="post">
     
     	<h2>Hello, User <?php echo $_SESSION['name']; ?></h2>
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

<center>
          <table border='0'>
               <tr height='50'></tr>
               <tr>
                    <td width='20'></td>
                    <td width='130'>User Name:
                    </td>
                    <td ><?php echo $_SESSION['user_name']; ?>
                    </td>
                    <td width='250'></td>
                    <td width='130'>Name:
                    </td>
                    <td ><?php echo $_SESSION['name']; ?>
                    </td>                             
</table></center><br>
<br>

<table border='0'>
<tr height='10'>
          </tr>
     <tr>
          <td width='200'></td>
          <td><input type="checkbox" name="chk" id="apls" value="apls" />
               <label for="abls">A Plus</label>
          </td>
          <td width='300'></td>
          <td><input type="checkbox" name="chk" id="bpls" value="bpls" />
                    <label for="bpls">Bpls</label>
          </td>
     </tr>
     <tr>
          <td width='200'></td>
          <td><input type="checkbox" name="chk" id="abpls" value="abpls" />
                    <label for="abpls">ABpls</label>
          </td>
          <td width='300'></td>
          <td><input type="checkbox" name="chk" id="opls" value="opls" />
                    <label for="opls">Oplus</label>
          </td>
     </tr>
     <tr>
          <td width='200'></td>
          <td><input type="checkbox" name="chk" id="amins" value="amins" />
                    <label for="amins">Amins</label>
          </td>
          <td width='300'></td>
          <td><input type="checkbox" name="chk" id="bmins" value="bmins" />
                    <label for="bmins">Bmins</label>
          </td>
     </tr>
     <tr>
          <td width='200'></td>
          <td><input type="checkbox" name="chk" id="abmins" value="abmins" />
                    <label for="abmins">ABmins</label>
          </td>
          <td width='300'></td>
          <td><input type="checkbox" name="chk" id="omins" value="omins" />
                    <label for="omins">Omins</label>
          </td>
     </tr>
     <tr>
          <td width='200'></td>
          <td><input type="checkbox" name="chk" id="plasma" value="plasma" />
                    <label for="plasma">Plasma</label>
          </td>
          <td width='300'></td>
          <td><input type="checkbox" name="chk" id="oxy" value="oxy" />
                    <label for="oxy">Oxygen</label>
          </td>
     </tr>
     <tr>
          <td width='200'></td>
          <td><input type="button" onclick='deSelect()' value="Deselect All"/>
          </td>
          <td width='300'></td>
          <td><input type="button" onclick='selects()' value="Select All"/>  
          </td>
     </tr> 
</table>
<table><tr><td width='200'></td>
                    <td>Latitude
                    </td>
                    <td><input class="rad" classtype="text" name="lat" id="lat">
                    </td>
                    <td width='135'></td>
                    <td>Longitude
                    </td>
                    <td><input class="rad" classtype="text" name="longt" id="longt">
                    </td>
                    </tr>
          <tr height='10'>
          </tr></table>
<br><br>














 <!--------------------------------------------------------------------------------------------------------->         
<div id = "location"></div>
<script>
let current_location = document.getElementById("location");
const success = (position) => {
  document.getElementById("longt").value =position.coords.longitude;
  document.getElementById("lat").value =position.coords.latitude;
}
const error = (error) => {
  current_location.textContent = `Couldn't access your location \n Reason: ${PositionError.message}`;
}
const getLocation = () => {
  if(navigator.geolocation)
    navigator.geolocation.getCurrentPosition(success,error);
  else 
    current_location.textContent = `Your browser does not support this feature`;
}
</script>
          <button type="button" onclick = "getLocation()">Get my current location</button>
     	<button type="submit">Submit</button>
          <button type="submit" formaction="logout.php">Log out</button>
          <button type="submit" formaction="change-password.php">change Password</button>
          </form>
   
</body>
</html>



<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>