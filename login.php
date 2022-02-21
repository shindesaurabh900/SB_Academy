<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            height: 280px;

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
            border-radius: 40px;
    /* size: 49px; */
    width: 152px;
    height: 28px;
    margin: 9px;
    font-size: 15px;
}
        }


        .btn:hover {
            color: crimson;
            cursor: pointer;
            background-color: black;

        }
        a{
            color:#0089ff;
            margin-right: -75px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="name">SB Academy</h1>
        <h1>Login Here!</h1>
        <form action="" method="post">
            <label for="text">Email Id </label>
            <input type="email" placeholder="Enter your Email Id" name="email" required><br>
            <label for="text">Password </label>
            <input type="password" placeholder="Enter your Password" name="password" required><br>
            <input class="btn" type="submit" name="login" value="Log In">
            <a href="registration.php">Register Here !!</a>
        </form>
    </div>
</body>

</html>

<?php 
if(isset($_POST['login']))
{
	$u=$_POST["email"];
	$p=$_POST["password"];

    $sql="select email AND password from register where email='$u' AND password='$p' ";
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1)
    {
        echo "<script>alert('Welcome !!') </script>";
        echo "<script> window.location='sbacademy.php'</script>  ";
    }                                    //Applicant/applicant-check
    else
    {
    echo "<script> alert('Incorrect Email or Password. !!') </script> ";
    exit();
    }
}
?>