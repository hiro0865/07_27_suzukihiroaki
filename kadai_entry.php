<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>書籍登録フォーム</title>
    <link rel="stylesheet" href="css/sanitize.css"> 
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

<div class="container">
    <h1>書籍登録フォーム</h1>
    <form action="kadai_insert.php" method="post">
        <ul>
            <li class="title-item">
                <label for="title">書籍のタイトル</label>
                <input type="text" name="title" class ="title-parts">
            </li>
            <li class="url-item">
                <label for="bookurl">書籍のURL </label>
                <input type="text" name="bookurl" class = "url-parts";>
            </li>
            <li class="comment-item">
                <label for="comment" class="comment">コメント</label>
                <textarea name="comment" cols="30" rows="10" class ="comment-parts"></textarea>
            </li>
        </ul>
        <input type="submit" value="送信" class="sendbutton">
    </form> 
    <p>⇨Webサイトの内容は<a href="./kadai_index.php" target="_blank">こちらから</a>！</p>   
</div>
</body>
</html>