<?php
  include ('db_connect.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KH엔터테인먼트</title>
    <style>
      body tbody {
        border-bottom: 3px solid #000;
      }
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
        border-radius: 0px;
        width: 80%;
        max-width: 800px;
        font-family: Arial, sans-serif;
        }
      header {
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
  h1 a{
    text-decoration: none;
    color: #000;
  }
  .nav2 {
    background-color: #A9C7D2;
    color: #808080;
    display: flex;
    justify-content: right;
    padding: 1rem;
    margin-bottom: 50px;
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
        margin: auto;
        width: auto;
        font-family: Arial, sans-serif;
    }
  .button {
    background-color: #A9C7D2;
    border: 1px solid #A9C7D2;
      border-radius: 5px;
      text-align:center;
      color: #fff;
      padding:10px;
      margin-top:50px;
  }
  .button a {
    text-decoration: none;
      color: #333333;
  }
  .button a:hover {
      color: #008CBA;
    }
    #board {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
      background-color: #FFFFFF00;
      border: 0px solid #DDDDDD;
      border-radius: 5px;
      align-items: center;
      text-align:center;
    }
    
    #board h1 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
    }
    
    #board-list {
      list-style: none;
      padding: 0;
      margin: 0;
      margin-bottom:60px;
    }

    #board-list li-h {
      padding: 10px;
      background-color:  #A9C7D260;
      border-top: 3px solid #A9C7D2;
      border-bottom: 3px solid #A9C7D2;
      border-radius: 0px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #000;
      text-align: center;
      padding-left: 5%;
      padding-right: 5%;
    }
    
    #board-list li {
      padding: 10px;
      background-color: #FFFFFF80;
      border-bottom: 1px solid #A9C7D2;
      border-radius: 0px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-align: center;
      padding-left: 5%;
      padding-right: 5%;
    }
    #board-list li span {
      text-decoration: none;
      color: #333333;
    }
    #board-list li a {
      text-decoration: none;
      color: #333333;
    }
    
    #board-list li a:hover {
      color: #008CBA;
    }
</style>
</head>
  <body>

    <header>
        <meta charset="utf-8">
        <h1><a href="index.php">KH Entertainment</a></h1>
    </header>
    <?php
    session_start();
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
        <div id="board">
    <h1>게시판 목록</h1>
    <ul id="board-list">
        <li-h>
            <span class="number" style="width: 5%;">index</span>
            <span class="title" style="width: 30%;">두 번째 게시글 제목</span>
            <span class="author" style="width: 10%;">작성자</span>
            <span class="special" style="width: 20%;">date</span>
            <span class="special" style="width: 5%;">view</span>
        </li-h>
        <!--
      <li><a href="#">게시글 1</a></li>
      <li><a href="#">게시글 2</a></li>
      <li><a href="#">게시글 3</a></li>
      <li><a href="#">게시글 4</a></li>
      <li><a href="#">게시글 5</a></li>
      -->
      <?php
        $sql = mq("select * from Board ");
            while($board = $sql->fetch_array()) {  
        ?>
          <li>
            <span style="width: 5%;"><?php echo $board['bo_id']; ?></span>
            <a style="width: 30%;" href="read.php?id=<?php echo $board['bo_id'] ?>">
                <?php echo $board['bo_title']; ?>
            </a>
            <span style="width: 10%;"><?php echo $board['bo_name']?></span>
            <span style="width: 20%;"><?php echo $board['bo_date']?></span>
            <span style="width: 5%;"><?php echo $board['bo_hit']; ?></span>
            </li>
        <?php } ?>
    </ul>
        <a2 class="button"><a href="write.php">글쓰기</a></a2>
      </div>

  </body>
</html>


