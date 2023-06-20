<?php
session_start();
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
    height:21px;
  }  /* 전체 폼 스타일 */
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    width: 80%;
    max-width: 800px;
    font-family: Arial, sans-serif;
    background-color: #fff;
    box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
  }

  /* 폼 타이틀 스타일 */
  form h2 {
    font-size: 2rem;
    margin: 0;
    text-align: center;
    margin-bottom: 20px;
  }

  /* 폼 입력 필드 스타일 */
  form label {
    font-size: 1.2rem;
    margin-bottom: 10px;
  }
  form input[type="text"], form textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: #f7f7f7;
    margin-bottom: 20px;
  }
  form textarea {
    resize: vertical;
    height: 200px;
  }

  /* 전송 버튼 스타일 */
  form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1.2rem;
    transition: all 0.3s ease;
  }
  form input[type="submit"]:hover {
    background-color: #0062cc;
  }

</style>
</head>
  <body>

    <header>
        <meta charset="utf-8">
        <h1><a href="index.php">KH Entertainment</a></h1>
    </header>
    <div class=nav2> </div>
    
    <form method="post" action="write_action.php">
    <?php
    $URL = "./login.php";
    if (!isset($_SESSION['userid'])) {
    ?>

        <script>
            alert("로그인이 필요합니다.");
            location.replace("<?php echo $URL ?>");
        </script>
    <?php
    }
    ?> <table>
            <tr>
                <td>
                    <p><b>게시글 작성하기</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <table>

                        <tr>
                            <td>제목</td>
                            <td><input type="text" name="title" size=70></td>
                        </tr>

                        <tr>
                            <td>내용</td>
                            <td><textarea name="content" cols=75 rows=15></textarea></td>
                        </tr>

                    </table>

                    <center>
                        <input type="submit" value="작성">
                    </center>
                </td>
            </tr>
        </table>
    </form>


</body>
</html>


