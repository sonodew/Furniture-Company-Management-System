
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
input[type=number], select {
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
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	
	<h1 style="font-size:50px">Stock sale Update</h1>
	
</header>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql1="SELECT * FROM stock";
			$records=mysql_query($sql1);
			error_reporting(0);
			include("design.css");
			$Furniture_ID = $_POST ["stk_fu_id"] ;
			$NwQuantity = $_POST ["nwquantity"] ;
			if (!$_POST["Submit"]){
				echo "<center>All fields are required<br></center><br>";
			}
			else{
				if ($_POST["Submit"]){
				$prestock="SELECT quantity FROM stock WHERE stk_fu_id='$Furniture_ID'";
				$getData = mysql_query($prestock);
				while($assData=mysql_fetch_assoc($getData)) {
					$rem= $assData['quantity']- $_POST["nwquantity"];
				}}
				
				$stockupdate = "UPDATE stock
				SET quantity =$rem
				WHERE stk_fu_id='$Furniture_ID'";
				
				
				if (mysql_query($stockupdate)){
						echo "Stock successfully updated.";
				}
				else{
					echo "Sorry. Something went wrong, try later.";
				}
			}
			
		?>
		
	<head>
		<title> MKM Stock </title>
                <style type="text/css">
                    table, td, tr {
                       /* border: solid 1px #D5D5FF;*/
                        border-collapse: collapse;
                        
                    }
                    td {
                        background-color: #F4F4FF;
                    }
                    td ,tr {
                        padding: 5px;
                    }
                    tr:nth-child(even) td {
                        background-color: #fff;
                    }
                    
                </style>
	</head>
	<a href="managerhome.php"><button class="button">Home</button></a>
		<a href="manager_stock_check.php"><button class="button">Stock</button></a>
	<body>
            
		<form action="stock_sale_update.php" method="POST">
			<center>
			Furniture ID <br><input type = "text" placeholder="Furniture ID" name="stk_fu_id"><br>
			Updating Quantity <br> <input type = "number" name="nwquantity"><br>
			
			<input type="submit" name="Submit" value="update">
			</center>
			
		</form>
                
			
		
		<center>
		<h1>Stock Table</h1>
		
		<table width=75% border=1 cellpadding=1 cellspacing=1>
		
			<tr>
				<th>Furniture ID</th>
				<th>Quantity</th> 
				</center>
			</tr>
  
		<?php
			while($stock=mysql_fetch_assoc($records)){
				echo "<tr>";
					echo "<td >".$stock["stk_fu_id"]."</td>";
					echo "<td>".$stock["quantity"]."</td>";
				echo "</tr>";
			}
		echo "<table>";
		mysql_close();
		?>
		
		<footer>..Group 33..</footer>
	</body>
</html>