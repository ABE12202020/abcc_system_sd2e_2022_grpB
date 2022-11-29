<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>演習3</title>
</head>
<body>
    <h1>
        <?php
        //データベース接続
        $pdo2 = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');
        $sql2 = "SELECT * FROM search_tbl WHERE name LIKE ?";
        $ps2 = $pdo2->prepare($sql2);
        $ps2->bindValue(1,'%'. $_POST['search'] .'%',
        PDO::PARAM_STR);

        $ps2->execute();
        foreach($ps2->fetchAll() as $row2){
            header(Location: $row2['pass']);
            // echo "投稿日時：".$row2['tweet_date']."<br>".$row2['tweet']. "<br>";
            }
        ?>
    </h1>
    
</body>
</html>
