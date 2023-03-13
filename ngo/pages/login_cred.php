<?php
	ini_set("display_errors", "1");
    error_reporting(E_ALL);
require_once '../database/connection.php';
$errors = [ 'email' => '', 'password1' => ''];

$email = $password1 = '';
if (isset($_POST['login'])) {

   
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email should not be empty';
    } else {
        $email = htmlspecialchars($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please provide a valid email';
        }
    }


    if (empty($_POST['password1'])) {
        $errors['password1'] = 'Password should not be empty';
    } else {
        $password1 = htmlspecialchars($_POST['password1']);
    }


    if (!array_filter($errors)) {
       
        $password = md5($password1);
      
       $sql = "SELECT * FROM users WHERE email=:email AND password=:password LIMIT 1";
       $stmt = $conn->prepare($sql);
       $stmt->execute([
           'email' => $email,
           'password' => $password
       ]);

       $user = $stmt->fetch();

       if($stmt->rowCount()){
        $_SESSION['user'] = $user;
        header('location:../parts/dashboard.php');
       }

    }


}

if(isset($_SESSION['user'])){
    header('location:../parts/dashboard.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>Login</h2>
            <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                <div class="input_box">
                    <input type="text" class="email" name="email" value="<?php echo $email ?>"required>
                    <label>Email</label>
                    <img src="images/mail.png" class="mail_image">
                 
                </div>
                <div class="text-danger">
                        <?php echo $errors['email']; ?>
                    </div>

                <div class="input_box">
                    <input type="password" class="password1" name="password1" values="<?php echo $password1 ?>"required>
                    <label>Password</label>
                    <img src="images/visible.png" class="password_image">
                </div>
                <div class="text-danger">
                        <?php echo $errors['password1']; ?>
                    </div>
                <div class="forgot_password"><a href="#">Forgot Password ?</a></div>
                <button class="login_button" type="submit" name="login">Login</button>
                <div class="signup_link"><a href="signup.php">Don't have an Account ?</a></div>
                <div class="signup_link"><a href="../index.php">Back To Login</a></div>
            </form>
        </div>
    </div>
</body>
</html>