

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
        <div class="content">
            <h3>hi,<span>user</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
            <p>This is an User page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout_form.php" class="btn">logout</a>


        </div>
    </div>
    
</body>
</html> 