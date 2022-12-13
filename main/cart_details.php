<?php
$pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
                            'LAA1418543', 'Baiueo1234');


        // $sql = "INSERT INTO `cart_details`(`cart_id`,`shohin_id`,`shohin_quanity`) VALUES (?,?,?)";
        // $ps=$pdo->prepare($sql);
        // $ps->bindValue(1,$_SESSION['cart_id'],PDO::PARAM_INT);
        // $ps->bindValue(2,$buy_id,PDO::PARAM_STR);
        // $ps->bindValue(3,$_POST['num'],PDO::PARAM_INT);
        // $ps->execute();
                    
        $sql = "INSERT INTO `cart_details`(`cart_id`,`shohin_id`,`shohin_quanity`) VALUES (2,?,3)";
        $ps=$pdo->prepare($sql);
        // $ps->bindValue(1,$_SESSION['cart_id'],PDO::PARAM_INT);
        $ps->bindValue(2,$buy_id,PDO::PARAM_STR);
        // $ps->bindValue(3,$num,PDO::PARAM_INT);
        $ps->execute();
?>