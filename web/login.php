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
        border-radius: 10px;
        width: 80%;
        max-width: 800px;
        font-family: Arial, sans-serif;
        background-color: #ffffffdd;        
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
        height:21px;
      }
  input[type="text"], input[type="password"] {
  border: none;
  border-radius: 10px;
  padding: 10px;
  font-size: 16px;
  margin: 10px;
  background-color: #f2f2f2;
  }
.submit {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  margin: 10px;
  font-size: 16px;
}
.submit:hover {
  background-color: #3e8e41;
}
    </style>
  </head>
  <body>
    <header>
        <meta charset="utf-8">
        <h1><a href="index.php">KH Entertainment</a></h1>
    </header>
    <div class=nav2>
    </div>  
    <div id="login_box">
      <form name="loginForm" action="login_search.php" method="post">
        <table width="300" height="100" border="0">
          <tr>
            <th align="right">ID </th>
            <td><input type="text" name="userid"></td>
          </tr>
          <tr>
            <th align="right">PASSWORD </th>
            <td><input type="password" name="userpw"></td>
          </tr>
        </table>
        <input type="submit" class="submit" value="LOGIN">
        <p align=center>
        <a href="sign_up.php">회원가입</a> |
        <a href="#">비밀번호 찾기</a>
        </p>
      </form>
    </div>
  </body>
</html>
