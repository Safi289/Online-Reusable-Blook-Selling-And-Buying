<?php session_start();?>

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
							<h1 class="title">Select Modules
<!--
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'There';
								}
							?>
-->
							</h1>
							<div class="entry">
								<br>
								
								<br>		
								
								<object width="550" height="400">
								<!--<param name="movie" value="somefilename.swf">-->
<!--								<img src="images/books.jpg" width="550" height="400">-->
                                    <!DOCTYPE html>

<html>

    <body>
        <select id="drp1">
            <option value="none" selected>Modules</option>
            <option value="a">Sell</option>
            <option value="b">Buy</option>
        </select>
        

        <div id="drp2">
            <ul value="none" selected>None</ul>
        </div>

        
        <script>
            var drp1=document.getElementById('drp1');
            drp1.addEventListener('change',ajaxfn);
            
            function ajaxfn(){
                if(drp1.value=="none"){
                    
                }else{
                    var ajaxreq=new XMLHttpRequest();
                    ajaxreq.open("GET",'ajaxserve.php?value='+drp1.value);
                    
                    ajaxreq.onreadystatechange=function (){
if(this.readyState===XMLHttpRequest.DONE && this.status==200){
    var drp2=document.getElementById('drp2');
    drp2.innerHTML=ajaxreq.responseText;
}
                    };
                    
                    ajaxreq.send();
                }
            }
        </script>
    </body>
    
</html>
								</embed>
								</object>
								<br><br>
								
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
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
