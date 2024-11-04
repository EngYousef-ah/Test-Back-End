

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            <form action="insert.php" id="form" method="post">
                <h1>Sign up</h1>
                <p class="check">please check your data</p>
                <div class="input-box">
                    <input type="text" placeholder="Username" id="username" name="username">
                    <p class="username-er"></p>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="E-mail" id="email" name="email">
                    <p class="email-er"></p>

                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" id="password" name="password">
                    <p class="password-er"></p>

                </div>

                <div class="input-box">
                    <input type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword">
                    <p class="confirmpassword-er"></p>

                </div>
                <button type="submit">Sign up</button>
                <p class="link">Already have an account? <a href="signin.html">sign in</a></p>
            </form>
        </div>
    </div>

    <script src="js/signup.js"></script>

</body>

</html>