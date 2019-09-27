<?php

$conn=mysqli_connect('localhost','root','','StudentData');
$id = $_GET['id']; 
$sql="select * from StudentDataApp where id='".$id."'";
$r=mysqli_query($conn, $sql);
$result=mysqli_fetch_array($r);
$name=@$result['name'];
$fname=@$result['fname'];
$uni=@$result['uni'];
$dept=@$result['dept'];
$degree=@$result['degree'];
$cgpa=@$result['cgpa'];

echo $name;

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
<div>
     <form action="" method='post'>
        <table border='2px' width='500px' height='200px'>
        <thead style='background-color:yellow'>
        <th colspan=5 >Data Gathering App</th>
        </thead>
        <tbody align='center'>
        <tr>
        <td>Name:</td>
        <td><input type="text" name="sname" id="name" value='<?php echo $name; ?>' ></td>
        </tr>
        <tr>
        <td>Father name:</td>
        <td><input type="text" name="fname" id="fname" value='<?php echo $fname; ?>'></td>
        </tr>

        <tr>
        <td>Univeristy:</td>
        <td><input type="text" name="uni" id="uni" value='<?php echo $uni; ?>'></td>
        </tr>


        <tr>
        <td>Dept:</td>
        <td><input type="text" name="dept" id="dept" value='<?php echo $dept; ?>'></td>
        </tr>

        <tr>
        <td>Degrree:</td>
        <td><select name="deg" id="deg" value=''>
        <option value="None" selected disabled><?php echo $degree; ?></option>
        <option value="Master">Master</option>
        <option value="Bachalor">Bachalor</option>
        </select></td>
        </tr>

        <tr>
        <td>CGPA:</td>
        <td><input type="text" name="cgpa" id="cgpa" value='<?php echo $cgpa; ?>'></td>
        </tr>

        <tr>
        
        <td colspan=5><input type="submit" value="submit" name='submit'></td>
        </tr>

        </tbody>
        </table>

     </form>
     </div>
     

</body>
</html>


<?php

$name=@$_POST['sname'];
$fname=@$_POST['fname'];
$uni=@$_POST['uni'];
$dept=@$_POST['dept'];
$degree=@$_POST['deg'];
$cgpa=@$_POST['cgpa'];



if(isset($_POST['submit'])){

$conn=mysqli_connect('localhost','root','','StudentData');

$sql="update StudentDataApp set name='$name',fname='$fname',uni='$uni',dept='$dept',degree='$degree',cgpa='$cgpa' where id='".$id."'";
if(mysqli_query($conn,$sql)){
	echo "Updated!";	
}else{
		
		echo "not Updated";
}

}
?>