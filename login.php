<?php
include "conn.php";
session_start();

if(isset($_POST['submit'])){
    
    $uname=$_POST['uname'];
    $pass=$_POST['password'];


$sql = "SELECT * FROM login where username='$uname'";
$result = mysqli_query($conn, $sql);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $row = mysqli_fetch_array($result);
    if($row[1] == $uname && $row[2] == $pass) {
        echo '<script>alert("Logged in welcome Admin")</script>';

        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];

        header("Location: employee.php");

        exit();
    }
    else {
        
        header("Location: login.php");

        exit();
    }
}
else{
    echo '<script>alert("Error")</script>';
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


      <div
    class="d-flex flex-column min-vh-100 justify-content-center align-items-center"
    id="template-bg-3">
    <div class="card mb-5 p-5  bg-White bg-gradient text-dark col-md-4">
        <div class="card-header text-center">
            <h3>Login</h3>
        </div>

        <div class="card-body mt-3">
            <form name="login" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="input-group form-group mt-3">
                    <input type="text"
                        class="form-control text-center p-3"
                        placeholder="Username" name="uname" required>
                </div>
                <div class="input-group form-group mt-3">
                    <input type="password"
                        class="form-control text-center p-3" name="password"
                        placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain 1 upper case letter & 1 special character, Min 6 & max 15 characters." required>
                </div>
                <div class="text-center">
                    <input type="submit" value="Login"
                        class="btn btn-primary mt-3 w-100 p-2"
                        name="submit">
                </div>
            </form>
            </div>
        <div class="card-footer p-3">
            <div class="d-flex justify-content-center">
                <div class="text-primary">If you are a registered user,
                    login here.</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>