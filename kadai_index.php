<?php 
//DB定義
const DB = "";
const DB_ID = "";
const DB_PW = "";
const DB_NAME = "";

//PDOでデータベース接続
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gsblog_db;charset=utf8','root','');//root = databaseに接続する際のid pass	
}catch (PDOException $e) {
    exit( 'DbConnectError:' . $e->getMessage());
}

// 実行したいSQL文（最新順番3つ取得）
$sql = 'SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 4';

//MySQLで実行したいSQLセット。プリペアーステートメントで後から値は入れる
$stmt = $pdo->prepare($sql);
$flag = $stmt->execute();

if($flag==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{//以下sqlの実行が成功した場合。


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/sanitize.css">
	<link rel="stylesheet" href="css/style3.css">
</head>
<body>


<h1>最近気になった書籍について</h1>
<p>最近私が気になっている書籍をリストアップするサイトです。随時更新していきますので、掲載した書籍にご興味のある方はご連絡頂ければ嬉しいです。</p>

<div>
	
	<ul class="booklist">


			<?php
				while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
			
			?>


			<li>
				<h3 class="work-title"><?php echo $result['booktitle'];?></h3>
				<p><?php echo $result['bookurl'];?></p>
				<p><?php echo $result['comment'];?></p>
			 </li> 
			<?php } ?>



	</ul>
		

</div>

<div class="footer">
	<p class="copyrights">copyrights 2018 kadai07 All Rights Reserved.</p>
</div>

</body>
</html>

<?php 
}
?>