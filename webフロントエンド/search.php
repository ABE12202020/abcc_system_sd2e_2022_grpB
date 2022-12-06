<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>
        <?php
        $pdo2 = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
        'LAA1418543', 'Baiueo1234');
        $sql2 = "SELECT * FROM search WHERE name LIKE ?";
        $ps2 = $pdo2->prepare($sql2);
        $ps2->bindValue(1,'%'. $_POST['search'] .'%',
        PDO::PARAM_STR);


        $ps2->execute();
        foreach($ps2->fetchAll() as $row2){
            header('Location:https://cookpad.com/recipe/7378340');
            }
        ?>
    </h1>
    
</body>
</html>
