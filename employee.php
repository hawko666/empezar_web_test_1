<?php
session_start();
include "conn.php";
    if(strlen($_SESSION['username'])==0){
        header("Location: login.php");
    }

    
    if(isset($_POST['logout_button']))
	{
        $_SESSION = array();
		session_destroy();
		header("Location: login.php");
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
            <form>
            <flex class="d-flex align-content-center"><img src="image/logo.png" alt="..."></flex>
            <br>

        <?php
        $employee_details=mysqli_query($conn,"SELECT id, e_name, e_contact, e_email FROM add_employee");
            echo"<table class=table>
                <thread>
                <tr>
                <th>Employee Name</th>
                <th>Contact</th>
                <th>Email Department</th>
                </tr>
                </thread>
                <tbody>
                    <tr></tr>
                </tbody>";
    while($prow=mysqli_fetch_array($employee_details)) 
    {
      echo"<tr>
        <td>".$prow[1]."</td>
        <td>".$prow[2]."</td>
        <td>".$prow[3]."</td>
      </tr>";
    } 

    echo "</table>";
        ?>

    <flex class="d-flex align-content-center"> <input class="btn btn-danger" type="button" value="Add Employee" onclick="location.href='add_emp.php';"> </flex>
    <br>
  
    <flex class="d-flex align-content-center"> <input class="btn btn-primary" type="submit" onclick="UnsetSession()" name="logout_button" value="Logout"> </flex>




        </form>
        </div>

        
</div>
</body>
</html>