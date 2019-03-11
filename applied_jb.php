<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<a href="seekhm.php"><font color=yellow>back</font></a>
<style>
.container {
  border: 2px solid #ccc;
  background-color: #A9A9A9 ;
  border-radius: 150px;
  padding: 16px;
  margin: 30px 0
}
body  {
    
    background-color: black;
	height: 800px;
	background-repeat: no-repeat; 
    background-position: center;
    background-size: cover;
}
.container::after {
  content: "";
  clear: both;
  display: table;
}


.container span {
  font-size: 30px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
 
}
</style>
</head>
<body>

<h1><font color=white>POSTED JOBS ARE</h1>
<font color=black>
<?php
session_start();
$con=mysql_connect("localhost","root","");
	mysql_select_db("prjt",$con);
	if($_SESSION["name"] && $_SESSION["id"]) {
	$id=$_SESSION["id"];
	}
	
	$sq="select * from job_applied j,post_job p where p.tjobpost_id=j.tjobpost_id and j.tcand_id='$id'";
	$res=mysql_query($sq,$con);
	while($row=mysql_fetch_array($res))
	{
?>
<div class="container">
<form action="" method="POST">

  <p><center><span><?php echo strtoupper("$row[tcom_name]")?></span><p>vaccancy : <?php echo "$row[tvacancy]"?> , email :<?php echo "$row[temail]"?> </p>
	<p> Job Description:: <?php echo "  $row[tjob_descr]  "?> </p>
	<p>applied date : <?php echo "  $row[tapp_date]  "?> </p></b>
	
</div>
	

</form>
<?php }?>
</body>
</html>
