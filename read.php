<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
</head>

<body>
<header align=center>
      <h1>
        <a href="index.php">KH ENTERTAINMENT</a>
      </h1>
    </header>
    <?php
    #$servername = "localhost";
    #$databasename = "root";
    #$password = "Keroro2424.";
    #$dbname = "kh_db";
        $host = getenv('DB_HOST');
        $db_name   = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');
        $charset = 'utf8mb4';
        $connect = mysqli_connect($host,$user,$pass,$db_name); 
    #$connect = mysqli_connect($servername, $databasename, $password, $dbname);
    $connect -> set_charset("utf8");
    $id = $_GET['id'];  // GET 방식 사용
    session_start();
    $query = "select *  from Board where bo_id = $id";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);

    $hit = "update Board set bo_hit = bo_hit + 1 where bo_id = $id";
    $connect->query($hit);

    

    if (isset($_SESSION['userid'])) {
        ?><b><?php echo $_SESSION['userid']; ?></b>님 반갑습니다.
            <button onclick="location.href='./logout_search.php'">로그아웃</button>
            <br />
        <?php
        } 
        ?>

    <table>
        <tr>
            <td colspan="4" class="read_title"><?php echo $rows['bo_title'] ?></td>
        </tr>
        <tr>
            <td class="read_id">작성자</td>
            <td class="read_id2"><?php echo $rows['bo_name'] ?></td>
            <td class="read_hit">조회수</td>
            <td class="read_hit2"><?php echo $rows['bo_hit'] + 1 ?></td>
        </tr>
        <tr>
            <td colspan="4" class="read_content" valign="top">
                <?php echo $rows['bo_content'] ?></td>
        </tr>
    </table>

   <div class="read_btn">
        <button class="read_btn1" onclick="location.href='./board.php'">목록</button>&nbsp;&nbsp;
        
        <?php
        if ($_SESSION['userid'] == $rows['bo_name']) { ?>
            <button class="read_btn1" onclick="location.href='./delete.php?id=<?= $id ?>'">삭제</button>
        <?php } ?>
      
    </div>
</body>

</html>
