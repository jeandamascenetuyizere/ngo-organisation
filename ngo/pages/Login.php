<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
html, body{
  display: grid;
  height: 100vh;
  width: 100%;
  place-items: center;
}
::selection{
  background: #ff80bf;

}
.container{
  background: black;
  max-width: 350px;
  width: 100%;
  padding: 25px 30px;
  border-radius: 5px;
  color:white;
}
.container form .title{
  font-size: 30px;
  font-weight: 600;
  position: relative;

}
.container form .input-box{
  width: 100%;
  height: 45px;
  margin-top: 25px;
  position: relative;
}
.container form .input-box input{
  width: 100%;
  height: 100%;
  font-size: 16px;}
</style>
  </head>
  <body>
  <?php 
include_once('parts/header.php')
    ?>
    <div class="container">
      <form action="../parts/dashboard.php" method="post">
        <div class="title">Fill here to log in</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your username" name ="username"required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" name ="password"required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
        <input type="submit" name="" value="LOGIN HERE" name="submit"></a>
        </div>
      </form>
    </div>
  </body>
</html>
