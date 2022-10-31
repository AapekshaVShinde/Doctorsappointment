<?php 	
include('include/config.php');


$Id = $_POST['Id'];

$sql = "SELECT a.doctorSpecialization,b.doctorName,b.contactno,a.consultancyfees,a.appointmentDate,a.appointmentTime FROM appointment as a inner join doctors as b WHERE a.id = $Id";

$orderResult = $con->query($sql);
$row = $orderResult->fetch_array();

$myDate = date('d-m-Y');

 $table = '	
 <table border="1" cellspacing="0" cellpadding="20" width="90%">
	<thead>
		<tr >
			<th colspan="5">
			<center>
			<h2>HMS</h2>
				<b>Appointment Doctor<b>
			</center>		
			</th>			
		</tr>	
		<tr>
			<td><center>	Date : '.$myDate.'</center></td>
		</tr>	
	</thead>
</table>
<table border="0" width="90%" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>
		<tr>
			<th>Specialization</th>
			<th>'.$row[0].'</th>
		</tr>	
		<tr>
			<th>Doctor</th>
			<th>'.$row[1].'</th>
		</tr>
		<tr>
			<th>Contact</th>
			<th>'.$row[2].'</th>
		</tr>
		<tr>
			<th>Consultancy Fees</th>
			<th>'.$row[3].'</th>
		</tr>
		<tr>
			<th>Appointment Date</th>
			<th>'.$row[4].'</th>
		</tr>
		<tr>	
			<th>Appointment Time</th>	
			<th>'.$row[5].'</th>
		</tr>

		</tbody>
</table>';

$con->close();

echo $table;