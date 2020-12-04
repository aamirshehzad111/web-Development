<!DOCTYPE html>
<html>
<body>
    
<div>
     <form action="" method='get'>
        <table border='2px' width='500px' height='200px'>
        <thead style='background-color:yellow'>
        <th colspan=5 >Sign up Form</th>
        </thead>
        <tbody align='center'>
        <tr>
        <td>Name:</td>
        <td><input type="text" name="name" id="name" ></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><input type="email" name="email" id="email" required></td>
        </tr>

        <tr>
        <td>Password:</td>
        <td><input type="password" name="password" id="password" required></td>
        </tr>
        
        <tr>
        <td colspan=5><input type="submit" value="submit" name='submit'></td>
        </tr>

        </tbody>
        </table>

     </form>
     </div>
     

     <div>
     <form action="" method='get'>
        <table border='2px' width='500px' height='200px'>
        <thead style='background-color:yellow'>
        <th colspan=5 >Login Form</th>
        </thead>
        <tbody align='center'>
        <tr>
        <td>Email</td>
        <td><input type="email" name="email_login" id="email" required></td>
        </tr>

        <tr>
        <td>Password:</td>
        <td><input type="password" name="password_login" id="password" required></td>
        </tr>
        
        <tr>
        <td colspan=5><input type="submit" value="submit" name='submit_login'></td>
        </tr>

        </tbody>
        </table>

     </form>
     </div>

</body>
</html>

<?php

$name=@$_POST['name'];
$signup_password=@$_POST['email'];
$signup_email=@$_POST['password'];
$login_password=@$_POST['password_login'];
$login_email=@$_POST['email_login'];



$servername = "localhost";
$username = "root";
$password = "er12345678";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection requesed failed: " . mysqli_connect_error());
}

$sql_db = "CREATE DATABASE saad";
if (mysqli_query($conn, $sql_db)) {
  echo "Database has been created successfully";
} else {
  echo "Error while creating database: " . mysqli_error($conn);
}

$sql_table = "CREATE TABLE muhammad (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50) NOT NULL,
    password VARCHAR(30) NOT NULL
)";
    
if (mysqli_query($conn, $sql_table)) {
    echo "Table has been created successfully";
} else {
    echo "Error while creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

if(isset($_POST['submit'])){

$conn=mysqli_connect($servername, $username, $password, 'saad');
$sql_insert_query="insert into muhammad (name, email, password) values('$name','$signup_email','$signup_password')";

if(mysqli_query($conn, $sql_insert_query)){
    echo 'New Recored has been inserted into table muhammad';
}else{
    echo 'Error!!!';
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
}


if(isset($_POST['submit_login'])){

$conn=mysqli_connect($servername, $username, $password, 'saad');
$sql_get_user_info = "select email, password from muhammad where email=$login_email and password=$login_password";
$user_data = mysqli_query($conn, $sql_get_user_info);
if (mysqli_num_rows($user_data) > 0) {
    echo 'Successfully login';
}else{
    echo 'User doesnt exist';
}
}

?>
