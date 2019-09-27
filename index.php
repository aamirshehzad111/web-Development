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
        <td><input type="text" name="sname" id="name" ></td>
        </tr>
        <tr>
        <td>Father name:</td>
        <td><input type="text" name="fname" id="fname"></td>
        </tr>

        <tr>
        <td>Univeristy:</td>
        <td><input type="text" name="uni" id="uni"></td>
        </tr>


        <tr>
        <td>Dept:</td>
        <td><input type="text" name="dept" id="dept"></td>
        </tr>

        <tr>
        <td>Degrree:</td>
        <td><select name="deg" id="deg" value='Select'>
        <option value="None" selected disabled>Select</option>
        <option value="Master">Master</option>
        <option value="Bachalor">Bachalor</option>
        </select></td>
        </tr>

        <tr>
        <td>CGPA:</td>
        <td><input type="text" name="cgpa" id="cgpa"></td>
        </tr>

        <tr>
        
        <td colspan=5><input type="submit" value="submit" name='submit'></td>
        </tr>
        <tr>
        
        <td colspan=5><input type="submit" value="Show All Records" name='submitd'></td>
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

$sql="insert into StudentDataApp (name,fname,uni,dept,degree,cgpa) values('$name','$fname','$uni','$dept','$degree','$cgpa')";
if(mysqli_query($conn, $sql)){
    echo 'New Recored has been inserted';
}else{

    echo 'Error!!!';
}


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

}


if(isset($_POST['submitd'])){


    header("Location: record_show.php");
}

?>