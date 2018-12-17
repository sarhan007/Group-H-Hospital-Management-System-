<?php include('part/db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pescription</title>

<style>
  
 
input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px ;
    box-sizing: border-box;
}
table {
    
     border: 1px solid black;
    width: 100%;
}

td{
    border: 3px solid #dddddd;
    text-align: left;
    padding: 8px;
     border-bottom: 1px solid #ddd;
    
}

th{
    height: 50px;
    border: 10px solid #dddddd;
    text-align: left;
    padding: 5px;
     border-bottom: 1px solid #ddd;
    }


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border:0;
    border-radius: 4px;
    cursor: pointer;
}



input[type=submit]:hover {
    background-color: #45a049;
}

.name {
  display: inline-block;
}


div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 5px;
}

</style>
</head>
	

<body>

	<div class="wrap container">
		
		<div class="navbar">
			<div class="row">
				<ul>
					<li><a href="home.php">HOME</a></li>
					<li><a href="pa.php">PATIENTS</a></li>
					<li><a href="ward.php">WARDS</a></li>
					<li><a href="bed.php">BED</a></li>
					<li><a href="nurse.php">NURSE</a></li>
					<li><a href="medcine.php">MEDICINE</a></li>
					<li><a href="pescription.php">PESCRIPTION</a></li>
					<li><a href="doctor.php">DOCTORS</a></li>
					<li><a href="information.php">INFORMATION</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</div>
		</div>
		
<h1 style="color:green;" align="center">Pescription</h1>

		
<br>Date of advice<br><input type="text" name="Advice_date" value="">
   <br>Time:<br><input type="text" name="Advice_time:" value="">


   <h3 align="center">Medicine Advice</h3>

<table>
	
  <tr>
    <th>Serial Number</th>
    <th>Name of Medicine</th>
    <th>Quantity</th>
    <th>Times in a day</th>
    
    <th colspan="2">Morning</th>
    <th colspan="2">Noon</th>
    <th colspan="2">Evening</th>
       
  </tr>
	
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td></td>
     <td>Before meal</td>
    <td>After meal</td>
    <td>Before meal</td>
    <td>After meal</td>
    <td>Before meal</td>
    <td>After meal</td>
 
  </tr>
	
	
  <tr>
    <td><input type="text" class = "form-control" placeholder = "Serial_no1" name="Serial_no1"> </td>

    <td><input type="text" class = "form-control" placeholder = "Medicine_name1" name="Medicine_name1">  </td>

    <td><input type="text" class = "form-control" placeholder = "Quantity1" name="Quantity1">  </td> 

    <td> <input type="text" class = "form-control" placeholder = "Times_a_day1" name="Times_a_day1">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Morning_b4_meal1" name="Morning_b4_meal1">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Morning_after_meal1" name="Morning_after_meal1">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Noon_b4_meal1" name="Noon_b4_meal1">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Noon_after_meal1" name="Noon_after_meal1">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Evening_b4_meal1" name="Evening_b4_meal1">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Evening_after_meal1" name="Evening_after_meal1">  </td>
  </tr>
	
	
  <tr>
     <td><input type="text" class = "form-control" placeholder = "Serial_no2" name="Serial_no2"> </td>

    <td><input type="text" class = "form-control" placeholder = "Medicine_name2" name="Medicine_name2">  </td>

    <td><input type="text" class = "form-control" placeholder = "Quantity2" name="Quantity2">  </td> 

    <td> <input type="text" class = "form-control" placeholder = "Times_a_day2" name="Times_a_day2">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Morning_b4_meal2" name="Morning_b4_meal2">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Morning_after_meal2" name="Morning_after_meal2">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Noon_b4_meal2" name="Noon_b4_meal2">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Noon_after_meal2" name="Noon_after_meal2">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Evening_b4_meal2" name="Evening_b4_meal2">  </td>

    <td> <input type="text" class = "form-control" placeholder = "Evening_after_meal2" name="Evening_after_meal2">  </td>
    
  </tr>
  
</table>


<h3 align="center">Test Advice</h3>

<table>
	
<tr>
 <th>Serial Number</th>
  <th>Name of test</th>
</tr>

<tr>
<td> <input type="text" class = "form-control" placeholder = "Serial_1" name="Serial_1">  </td>
<td><input type="text" class = "form-control" placeholder = "Test_1" name="Test_1">  </td>
</tr>
	
	
<tr>
<td> <input type="text" class = "form-control" placeholder = "Serial_2" name="Serial_2">  </td>
<td><input type="text" class = "form-control" placeholder = "Test_2" name="Test_2">  </td>
</tr>
	
	
<tr>
<td> <input type="text" class = "form-control" placeholder = "Serial_3" name="Serial_3">  </td>
<td><input type="text" class = "form-control" placeholder = "Test_3" name="Test_3">  </td>
</tr>
	
</table>


   <br><br>
  Signature with date
  <br><br>
    
  Name of Doctor:<input type="text" name="Name of Doctor:" value=""><br><br>
  Id of Doctor:<input type="text" name="Doctor_id" value=""><br><br>

  
  Designation:<input type="text" name="Designation:"value=""><br>
  
    <br>
  
  <br>
  <input type="submit" value="Submit">
</form> 

		
		
</body>
</html>
<?php include('part/db_close.php'); ?>
