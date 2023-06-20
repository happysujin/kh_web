<?php
#$servername = "localhost";
#$databasename = "root";
#$password1 = "Keroro2424.";
#$dbname = "kh_db";
        $host = getenv('DB_HOST');
        $db_name   = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');
        $charset = 'utf8mb4';
        $connect = mysqli_connect($host,$user,$pass,$db_name);
#$connect = mysqli_connect($servername, $databasename, $password1, $dbname);
$connect -> set_charset("utf8");
$id = $_GET['id'];

$query = "select bo_name from Board where bo_id = $id";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

$bo_name = $rows['bo_name'];

session_start();

$URL = "./board.php";
?>

<?php
if (!isset($_SESSION['userid'])) {
?> <script>
        alert("권한이 없습니다.");
        location.replace("<?php echo $URL ?>");
    </script>

<?php } else if ($_SESSION['userid'] == $bo_name) {
    $query1 = "delete from Board where bo_id = $id";
    $result1 = $connect->query($query1); ?>
    <script>
        alert("게시글이 삭제되었습니다.");
        location.replace("<?php echo $URL ?>");
    </script>

<?php } else { ?>
    <script>
        alert("권한이 없습니다.");
        location.replace("<?php echo $URL ?>");
    </script>
<?php }
?>
