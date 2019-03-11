<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<a href="admin.php"><font color=yellow>back</font></a>
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

<h1><font color=white>APPLIED RECRUITERS ARE</h1>
<font color=black>
<?php
$con=mysql_connect("localhost","root","");
	mysql_select_db("prjt",$con);
	$sq="select * from  company where tcomp_status='0' order by tcom_id desc";
	$res=mysql_query($sq,$con);
	while($row=mysql_fetch_array($res))
	{
	
?>
<div class="container">
<form action="approval1.php" method="POST">
<input type=hidden name = id value=<?php echo "$row[tcom_id]"?> >
  <p><center><span><?php echo strtoupper("$row[tcom_name]")?></span><p>contact : <?php echo "$row[tcom_cont]"?> , email :<?php echo "$row[tcom_email]"?> </p>
	<p>details : <?php echo "  $row[tcom_details]  "?> </p></b>
	<p><input type="submit" value="APPROVE" name="register" class="btn" ></p>
</div>
	

</form>
<?php }?>
</body>
</html>
