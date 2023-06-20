<?php

session_start();
	$host = getenv('DB_HOST');
        $db_name   = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');
        $charset = 'utf8mb4';
        
#$servername = "localhost";
#$databasename = "root";
#$password1 = "Keroro2424.";
#$dbname = "kh_db";

#$connect = mysqli_connect($servername, $databasename, $password1, $dbname);

$connect = mysqli_connect($host, $user, $pass, $db_name);
$connect -> set_charset("utf8");


$bo_name = $_SESSION['userid'];         //Writer
$bo_title = $_POST['title'];                           //Title
$bo_content = $_POST['content'];           //Content
$bo_date = date('Y-m-d H:i:s');            //Date

$URL = './board.php';                   //return URL

$query = "INSERT INTO Board (bo_title, bo_content, bo_name, bo_date) 
        values('$bo_title', '$bo_content', '$bo_name', '$bo_date')";

$result = $connect->query($query);
if ($result) {
?> <script>
        alert("<?php echo "게시글이 등록되었습니다." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "게시글 등록에 실패하였습니다.";
}

mysqli_close($connect);
?>
