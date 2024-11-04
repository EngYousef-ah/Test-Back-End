<?php 

    include('config.php');
    $stmt2=$con->prepare('SELECT id FROM users WHERE username= ?');
    $stmt2->execute([$_COOKIE['user']]);
    $userid= $stmt2->fetch();

    $stmt=$con->prepare('SELECT * FROM cart WHERE userid=?');
    $stmt->execute([$userid['id']]);
    $carts=$stmt->fetchAll();

?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
<div class="header">
        <div class="container">
            <a href="" class="logo"><span>Apple Store</span></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#Categories">Categories</a></li>
                <li><a href="index.php#footer">Contact</a></li>
            </ul>
        </div>
</div>
<div class="table">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Control</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($carts as $cart){ ?>
                <tr>
                    <td><img src="<?php echo $cart['image'] ?>" alt=""></td>
                    <td><?php echo $cart['name'] ?></td>
                    <td><?php echo $cart['price'] ?></td>
                    <td><a href="delete.php?id=<?php echo $cart['id'] ?>">Delete</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>