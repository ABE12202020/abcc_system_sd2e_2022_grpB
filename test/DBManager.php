<?php
class DBManager {
	//接続のメソッド
	private function dbConnect(){
		$pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
							'LAA1418543', 'Baiueo1234');
		return $pdo;
	}
	
	public function getUserTblByIdAndPass($user_id,$user_passward){
		$pdo=$this->dbConnect();
		$sql="SELECT * FROM users WHERE user_id=? AND user_passward=?";
		$ps=$pdo->prepare($sql);
		$ps->bindValue(1,$user_id,PDO::PARAM_STR);
		$ps->bindValue(2,$user_passward,PDO::PARAM_STR);
		$ps->execute();
		$searchArray=$ps->fetchAll();
		return $searchArray;
	}
}
?>
	<!-- // function userList(){
	// 	$ps2 = $pdo->prepare($sql2);
    //     $ps2->bindValue(1,'%'. $_POST['id'] .'%',
    //     PDO::PARAM_STR);
	// 	$ps2->execute();
	
		
	// 	if($ps2==$_POST['ipass']){
	// 		$ps2="SELECT username FROM uer_tbl WHERE $_POST['ipass']=$selectdata";
	// 	}
	// 	echo $ps2;
	// } -->