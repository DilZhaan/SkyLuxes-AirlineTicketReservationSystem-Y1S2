
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" type = "text/css" href = "../styles/signOperations.css">
    <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
    <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
    <title>Sky Luxe | Sign In</title>
    
</head>
<body> 
    <?php include "../config/header.php" ?>
    <div class="body-content">
        <div class="image">
            <img src="../images/others/signIn.png" alt="signUp image">
        </div>
        <div class="form">
            <h2>Sign In</h2>
            <form method="post" action="">
                <label>Username : </label>
                    <input type="text" id="username" name="username" placeholder="Username" pattern="[A-Z a-z 0-9]{4,8}" required>
                <label>Password :</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" pattern="[a-z A-Z 0-9 \. @ % #]{8,}{8,}" required>
                <div class="submitButton">
                    <a href="signup.php">Do you want to create an Account ? </a>
                    <input type="submit" value="Sign In" name="SignIn">
                </div>
            </form>
        </div>
    </div>
   
    <?php include "../config/footer.php" ?>
</body>
</html>
