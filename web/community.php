<?php
  include ('db_connect.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KH엔터테인먼트</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

  <body>
      <h1>NOTICE</h1>
      <table class="list-table">
      <thead>
          <tr>
              <th width="70">ID</th>
                <th width="500">TITLE</th>
                <th width="120">WRITER</th>
                <th width="100">DATE</th>
                <th width="100">HIT</th>
            </tr>
        </thead>
        <?php
        $sql = mq("select * from Board ");
            while($board = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["bo_title"];
              if(strlen($title)>30)
              {
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["bo_title"],mb_substr($board["bo_title"],0,30,"utf-8")."...",$board["bo_title"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70" align="center"><?php echo $board['bo_id']; ?></td>
          <td width="500" align="center"><?php echo $board['bo_title'];?></td>
          <td width="120" align="center"><?php echo $board['bo_name']?></td>
          <td width="100" align="center"><?php echo $board['bo_date']?></td>
          <td width="100" align="center"><?php echo $board['bo_hit']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div class=text>
        <font style="cursor: hand" onClick="location.href='./write.php'">글쓰기</font>
    </div>
  </body>
</html>






