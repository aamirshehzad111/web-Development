<?php

$conn=mysqli_connect('localhost','root','','StudentData');

$sql='select * from StudentDataApp';
$result=mysqli_query($conn, $sql);

echo <<<EOD
<table border='2px' width='400px' height='150px' style='padding: 10px'>
<thead style='background-color:yellow'>

<th>id</th><th>Name</th>
<th>Father Name</th><th>Univeristy</th>
<th>Dept</th>
<th>Degree</th>
<th>CGPA</th>
<th>Delete</th>
<th>Update</th>
</thead>
EOD;


while($row=mysqli_fetch_array($result)){


echo "<tr style='padding:5px' align='center'>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['uni']."</td>";
echo "<td>".$row['dept']."</td>";
echo "<td>".$row['degree']."</td>";
echo "<td>".$row['cgpa']."</td>";
echo "<td><a href=\"delete.php?id=".$row['id']."\">Delete</a></td>";
echo "<td><a href=\"update.php?id=".$row['id']."\">Update</a></td>";
echo "</tr>";


}

echo "</table>";






?>