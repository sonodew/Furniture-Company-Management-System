
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:#D7D6C9 ;
}

input[type=submit] {
    width: 30%;
    background-color:#272723;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	;
.fm{
	background-color:#F8C471  ;
	color: #1B2631;
	font-size:20px;
	
}	
}

input[type=submit]:hover {
    background-color:#D3CEA3  ;
	
	
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	
}
header, footer {
    padding: 1em;
    color: #A95308;
    background-color: #F1C40F;
    clear: left;
    text-align: center;
font-family: family=Mogra;}

headern{
    padding: 1em;
    color: #171502 ;
    background-color:#F1C40F;
    clear: left;
    text-align: center;
font-family: family=Mogra;}

</style>
<header>
	
	<h1 style="font-size:50px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:30px">Showroom Delete</h1>
</header>
<a href="adminhome.php"><button class="button">Home</button></a>
<a href="admin_showroom.php"><button class="button">Showroom</button></a>

		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			$Showroom_ID = $_POST ["sh_id"] ;
			include("design.css");
			
			if ($_POST["Delete"] ){
				$sql="DELETE FROM showroom WHERE sh_id ='$Showroom_ID'";
				if(mysql_query($sql)) {
				echo "Deleted successfully! ";}
				
				}
			
			?>
		
	<head>
		<title> MKM Showroom DELETE </title>
                
	</head>
	
	<body>
         <div class="fm">   
		<form action="showroom_delete.php" method="POST">
		<center>
			Showroom ID <br> <input type = "text" name="sh_id"><br>
			<input type="submit" name="Delete" value="DELETE"><br>
		</form>
                    
		</center>
		</div>
<footer>..Group 33..</footer>
	</body>
</html>