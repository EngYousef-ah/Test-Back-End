<?php 
    

    include("config.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username=$_POST['username'];
        $password=$_POST['password'];

    $stmt= $con->prepare('SELECT username , password From users WHERE username=? AND password=?');
    $stmt->execute([$username,$password]);
    $count=$stmt->rowCount();
    if($count >0){
        setcookie("user",$username,strtotime("+1 year"));
        header("location:index.php");
        exit();
    }else {
        $error='<p style="margin-bottom:10px; color:red; font-size:17px; font-weight:bold;">username or password incorrect</p>';
    }
    }
   
    
    
   
    
    
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="signin.css ">
</head>

<body>
    <div class="header">
        <div class="container">
            <a href="" class="logo"><span>Apple Store</span></a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html#Categories">Categories</a></li>
                <li><a href="index.html#footer">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="center">
        <div class="form">
            <form action="<?php $_SERVER["PHP_SELF"];?>" id="form" method="POST">
                <h1>Sign in</h1>
                <?php if(isset($error)) {
                    echo $error;
                } ?>
                <p class="check">please check your data</p>
                <div class="input-box">
                    <input type="text" placeholder="Username" id="username" name="username" value="<?php if(isset($username)){echo $username;}?>">
                    <p class="username-er"></p>

                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" id="password" name="password">
                    <p class="password-er"></p>

                </div>

                <button type="submit">Sign in</button>
                <p class="link">Don't have account? <a href="signup.html">create account</a></p>
            </form>
        </div>
    </div>

    <script src="js/signin.js"></script>

</body>

</html>