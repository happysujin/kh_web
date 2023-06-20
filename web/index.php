<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            
        }
        form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px auto;
        padding: 20px;
        /*
        border: 1px solid #ffffff00;
        background-color: #ffffff00;*/
        border-radius: 0px;
        width: 80%;
        max-width: 800px;
        font-family: Arial, sans-serif;
                
                
                
        }
      header {
        /*color: rgb(186, 244, 39);
        background-color: rgb(219, 245, 51);*/
        background-color: #ffffff00;
        color: rgb(0, 0, 0);
        padding: 1rem;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        text-align: center;
      }

      h1 {
        font-size: 2.5rem;
        margin: 0;
      }
      .nav2 {
        background-color: #A9C7D2;
        color: #808080;
        display: flex;
        justify-content: right;
        padding: 1rem;
      }
      .nav2 a {
        color: #ffffff;
        text-decoration: none;
        margin-right: 1rem;
        font-weight: bold;
      }
      ul {
			list-style: none;
			padding: 0;
			margin: 50px auto;
			width: 500px;
			font-family: Arial, sans-serif;
		}
		form li {
			border: 0px solid #ccc;
            /*#eb5656*/
            border-top: 2px solid #648AA1;
            border-bottom: 2px solid #648AA1;
			background-color: #ffffff46;
			border-radius: 0px;
			padding: 20px;
			margin-bottom: 10px;
			font-size: 16px;
            text-align: center;
		}
        form li a {
            text-decoration: none;
            color: #333333;
        }
    
        form li a:hover {
          color: #008CBA;
        }
    </style>
  </head>
  <body>
    <header>
        <meta charset="utf-8">
        <h1>KH Entertainment</h1>
    </header>
    <?php
    if($_SESSION['userid']){
    ?>
    <div class="nav2">
      <?php echo "안녕하세요 ".$_SESSION['userid']."님" ?>
      <a href='logout_search.php' style="margin-left:10px">LOGOUT</a> </div>
    <?php
    }
    else{
    ?>
    <div class="nav2">
      <a href="login.php">LOGIN</a>
      <a href="sign_up.php">SIGNUP</a>
    </div>
    <?php
    }
    ?>
    <form>
    <h3>CATEGORY</h3>
      <ul>
        <li><a href="notice.php">NOTICE</a></li>
        <li><a href="board.php">BOARD</a></li>
        <li><a href="company.php">COMPANY</a></li>
        <li><a href="artists.php">ARTISTS</a></li>
      </ul>
    </form>
  </body>
</html>
