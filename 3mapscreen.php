<?php
include("4hospfetch.php");
?>
<html>
  <head>
</head><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="fab.css"><style>
#col-1 {
  position: relative;
  width: 50%;
  float: left;
  height: 100%;
  background-color: #282828;
  z-index: 1010101010
}

#col-2 {
  position: relative;
  text-align: center;
  width: 50%;
  float: left;
  height: 100%;
  background-color: #4285F4;
  z-index: 1010101010
}

table {
	width: 95%;
	padding: 5px;
	background: #faf3ee;
	border-radius: 15px;
  border-collapse:collapse;

}
th{
  padding: 2.5px;
  height:45;
  font-size: 15;
  border-bottom: 2px solid #000;
}
.lef{
  border-left: 1px solid #000;
}
td{
  text-align: center;
  border-bottom: 1px solid #000;
}
td{
  height:35;
}
html{
  border: 5px solid red;
}
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}
</style>
<body width="50%">
  <section class="container">
  <div id="col-1">
<!----------------------------------------------------------------------------------------------------------> 
<iframe  src="5mapframe.php" 
  width="100%" height="100%" frameborder="1" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

  <!------------------------------------------------------------------------------------------------------------> 
</div>
<div id="col-2">
<!-------------------------------------------------------------------------------------------------------------> 
<br><br>
<table border='0' bgcolor='white' align='center'>
       <thead><tr>
        <th width='30'>S.No</th>
        <th class="lef">Hospital</th>
         <th class="lef">A +</th>
         <th class="lef">B +</th>
         <th class="lef">O +</th>
         <th class="lef">AB +</th>
         <th class="lef">A -</th>
         <th class="lef">B -</th>
         <th class="lef">O -</th>
         <th class="lef">AB -</th>
         <th class="lef">Oxygen</th>
         <th class="lef">Plasma</th>
         <th class="lef">Location</th>
         
	
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sno=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td ><?php echo $sno; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['apls']??''; ?></td>
      <td><?php echo $data['bpls']??''; ?></td>
      <td><?php echo $data['opls']??''; ?></td>
      <td><?php echo $data['abpls']??''; ?></td>
      <td><?php echo $data['amins']??''; ?></td>
      <td><?php echo $data['bmins']??''; ?></td>
      <td><?php echo $data['omins']??''; ?></td>  
      <td><?php echo $data['abmins']??''; ?></td>
      <td><?php echo $data['oxy']??''; ?></td>
      <td><?php echo $data['plasma']??''; ?></td>

      <td><a a href="http://www.google.com/maps/place/" onclick="location.href=this.href+<?php echo $data['lat']??''; ?>+','+<?php echo $data['longt']??''; ?>;return false;"> Go now!</a></td>
   
     <?php
      $sno++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
    
<!----------------------fab fab fab---------------------------------------------fab fab fab----------->
<div class="fab-container">
		<div class="fab fab-icon-holder">
			<i class="fas fa-question"></i>
		</div>

		<ul class="fab-options">
			<li>
      <a href="1user.php"><span class="fab-label">Go back to submit form</span></a>
				<div class="fab-icon-holder">
        <a href="1user.php"><i class="fas fa-file-alt"></i></a>
				</div>
			</li>
			<li>
      <span class="fab-label">Submit Feedback</span></a>
				<div class="fab-icon-holder">
        <i class="fas fa-clipboard"></i>
				</div>
			</li>
			<li>
      <a href="logout.php"><span class="fab-label">Log Out</span></a>
				<div class="fab-icon-holder">
					<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
				</div>
			</li>
		</ul>
	</div>     
<!-------------------------------------------------------------------------------------------------------------> 
</div>
</section>

</body>
</html>