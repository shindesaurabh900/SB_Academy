<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            background: url('library.jpg')no-repeat center center/cover;
        }

        .container {
            justify-content: center;
            margin: 117px 323px;
            text-align: center;
            background-color: black;
            color: white;
            font-size: 20px;
            border-radius: 40px;
            height: 441px;

        }

        h1 {
            font-size: 32px;
        }

        input {
            width: 254px;
            margin: 14px 0px;
            padding: 5px 25px;
            border-radius: 9px;
            text-align: center;
        }


        .btn {
            border-radius: 27px;
    /* size: 49px; */
    width: 168px;
    height: 28px;
    margin: 9px;
    font-size: 15px;
        }


        .btn:hover {
            color: crimson;
            cursor: pointer;
            background-color: black;

        }
        a{
            color: #00f3fffa;
            margin-right: -79px;
        }
    </style>
</head>

<body>
    <div class="container">
    <h1>SB Academy</h1>
        <h1>Registration Here!</h1>
        <form action="" method="post">
            <label for="text">Full Name  </label>
            <input type="text" placeholder="Enter your Full Name" name="reg_name" required><br>
            <label for="text">Mobile No </label>
            <input type="text" placeholder="Enter your Mobile  Number" name="reg_con" required><br>
            <label for="text">Location</label>
            <input type="text" placeholder="Enter your Location " name="reg_loc" required><br>
            <label for="text">Email ID   </label>
            <input type="email" placeholder="Enter your Email Id" name="reg_email" required><br>
            <label for="text">Password   </label>
            <input type="password" placeholder="Enter Your Password" name="reg_pass" required><br>
            <input type="submit" name="reg" value="Register" class="btn">
            <a href="login.php">Login Here!!</a>
        </form>
    </div>
</body>
</html>

<?php 
if(isset($_POST['reg']))
{
    $m1 = $_POST["reg_name"];
    $m2 = $_POST["reg_con"];
    $m3 = $_POST["reg_loc"];
    $m4 = $_POST["reg_email"];
    $m5 = $_POST["reg_pass"];

    $sql = "select * from register where email='$m4'";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result) > 0)
    {
        echo "<script> alert('This Email is already registered , Try to Login with Same or Use Another Email to Register.') </script>";
    }
    else
    {

    $q = "INSERT INTO register(name,mobile,location,email,password) VALUES('$m1','$m2','$m3','$m4','$m5')";
    if($con -> query($q))
    {
        echo "<script> alert('Registration Successful ! '); </script>";
    }
    else
    {
        echo "ERROR";
    }
}
}
?>