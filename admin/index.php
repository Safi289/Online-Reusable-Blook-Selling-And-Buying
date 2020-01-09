<?php
//Create Connection with MySQL Database
            $con = mysqli_connect("localhost","root","");

            //Select Database
            if(!mysqli_select_db($con,'book_store'))
            {
                echo "Database Not Selected";
            }
            //Select Query
            $sql = "SELECT * FROM user";

            //Execute the SQL query
            $records = mysqli_query($con,$sql);
    

            while($row3 = mysqli_fetch_array($records))
            { 
                //$id=$row3['u_id'];
                //$first=$row3['u_fnm'];
                $user=$row3['u_unm'];
                //$mobile=$row3['mobile'];
                //$email=$row3['email'];
                //$pic=$row3['pic'];

            }
            //echo $user;

?>


<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']== "admin"))
	{
		header("location:../index.php");
        
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<!--
 <div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
-->
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Hello
                <?php 
//								if(isset($_SESSION['status']))
//								{
//									echo $_SESSION['unm']; 
//								}
//								else
//								{	
//									echo 'Book Store';
//								}
				?></h1>
			<div class="entry">
				Orders:
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
