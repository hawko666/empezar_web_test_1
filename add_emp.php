<?php
session_start();
include("conn.php");
if(strlen($_SESSION['username'])==0){
    header("Location: login.php");
}

if(isset($_POST['submit']))
{
    
    $ename = $_REQUEST['empname'];
    $contact = $_REQUEST['cname'];
    $email = $_REQUEST['email'];

  $result = "INSERT INTO add_employee (e_name, e_contact, e_email) VALUES ('$ename',$contact,'$email')";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
        mysqli_query($conn, $result);
        echo "New record created Successfully";    
  } else {
    echo "Error:" . $result . "<br>" . mysqli_error($conn);
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #c00000;">
    
<div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <div class="card mb-5 p-5 bg-White bg-gradient text-dark col-md-4">
    <div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table class="table">
        <tr><flex class="d-flex align-content-center"><img src="image/logo.png" alt="..."></flex></tr>
        <tr></tr>
                <thread>
                <tr>
                <th scope="col" class="text-center">Fields</th>
                <th scope="col" class="text-center">Input Type</th>
                <th scope="col" class="text-center">validations</th>
                </tr>
                </thread>
                <tbody>
                    <tr>
                        <th scope="col">Name</th>
                        <td scope="col"><input type="text" placeholder="Name Here..." name="empname" required></td>
                        <td scope="col"></td>
                    </tr>
                    <tr>
                        <th scope="col">Contact</th>
                        <td scope="col"><input type="text" placeholder="Contact Number Here..." maxlength="10" name="cname" required></td>
                        <td scope="col">10 digit number only</td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th>
                        <td scope="col"><input type="email" placeholder="Email Here" name="email" required></td>
                        <td scope="col">Email validation with regex</td>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <td scope="col"><input class="btn btn-primary" type="submit" value="Submit" name="submit"></td>
                        <td scope="col"><input class="btn btn-danger" type="button" value="Privious" onclick="location.href='employee.php';"></td>
                    </tr>
                </tbody>
</form>
    </div>

        
</div>
</body>
</html>