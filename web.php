<?php
echo '<h1 class="text-success"> all the data ...</h1>';
$conn=new mysqli('localhost',"root",'','data_maining');


    $sql = "Select * From alldata";
    //$stmt = $DB->prepare($sql);
	$sql = $conn->query($sql);
	//$stmt->execute();
    if($sql)
	{ echo "
<table dir='trl' align='center' width='100%' border='1'  >
<tr>
                          	
							<td><h4>Country</h4></td>
							<td><h4>Time</h4></td>
							<td><h4>Values </h4></td>
							
							
						</tr>

";

//$result = $stmt->fetchAll();
while($row=mysqli_fetch_assoc($sql))
{
echo "
<tr>


<td>".$row['Country']."</td>
<td>".$row['Time']."</td>
<td>".$row['values']."</td>


</tr>



	";}echo "</table>";}				
				
					
			?>

