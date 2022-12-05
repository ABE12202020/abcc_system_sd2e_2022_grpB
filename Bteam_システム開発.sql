1 顧客情報
CREATE TABLE users
(user_id   	VARCHAR(50) NOT NULL,
 user_name 	VARCHAR(50) NOT NULL,
 user_passward  VARCHAR(50) NOT NULL,
 user_pc        VARCHAR(50) NOT NULL,
 user_address   VARCHAR(50) NOT NULL,
 PRIMARY KEY(user_id)
);
 
2 商品情報
CREATE TABLE shohins
(shohin_id 	VARCHAR(50) NOT NULL,
 shohin_name 	VARCHAR(50) NOT NULL,
 shohin_price   INTEGER(50) NOT NULL,
 picture_pass   VARCHAR(50) NOT NULL,
 PRIMARY KEY(shohin_id)
);

3 カート
CREATE TABLE carts
(cart_id VARCHAR(50)  	    NOT NULL,
 user_id VARCHAR(50) 	    NOT NULL,
 PRIMARY KEY(cart_id),
 FOREIGN KEY(user_id)REFERENCES users(user_id)
);

4 カート詳細
CREATE TABLE cart
(cart_id        VARCHAR(50) NOT NULL,
 shohin_id 	    VARCHAR(50) NOT NULL,
 shohin_quanity integer(10) NOT NULL,
 PRIMARY KEY(cart_id,shohin_id),
 FOREIGN KEY(cart_id) REFERENCES carts (cart_id),
 FOREIGN KEY(shohin_id) REFERENCES shohins (shohin_id)
);

5 注文
CREATE TABLE  orders
(order_id  VARCHAR(50) NOT NULL,
 cart_id   VARCHAR(50) NOT NULL,
 date      DATE NOT NULL,
 		PRIMARY KEY (order_id),
		FOREIGN KEY(cart_id) REFERENCES cart(cart_id)
);

データ追加
１顧客情報
INSERT INTO users(user_id,user_name,user_pass,user_pc,user_address)VALUES("2101156@asjuku.ac.jp","桑野","2101156","812-0016","福岡県博多区");
INSERT INTO users(user_id,user_name,user_pass,user_pc,user_address)VALUES("2101216@asjuku.ac.jp","渡邊","2101216","812-0016","福岡県博多区");
INSERT INTO users(user_id,user_name,user_pass,user_pc,user_address)VALUES("2101149@asjuku.ac.jp","梶原","2101149","812-0016","福岡県博多区");
INSERT INTO users(user_id,user_name,user_pass,user_pc,user_address)VALUES("2101131@asjuku.ac.jp","阿部","2101131","812-0016","福岡県博多区");
INSERT INTO users(user_id,user_name,user_pass,user_pc,user_address)VALUES("2101462@asjuku.ac.jp","牛島","2101462","812-0016","福岡県博多区");
INSERT INTO users(user_id,user_name,user_pass,user_pc,user_address)VALUES("2101132@asjuku.ac.jp","井浦","2101132","812-0016","福岡県博多区");

２商品情報
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("01","麻婆豆腐",1000,"../img/ahi-jo.jpg");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("02","春巻き",800,"harumaki.jpg");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("03","小籠包",800,"syouronpo.jpg");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("04","トッポギ",800,"toppogi.png");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("05","ビビンバ",900,"bibinba.png");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("06","サムギョプサル",1500,"samugyo.png");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("07","ピデ",550,"pide.png");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("08","トルコアイス",350,"torukoice.png");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("09","ケバブ",800,"kebabu.png");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("10","パエリア",1500,"paeria.png");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("11","トルティージャ",1000,"toruty.png");
INSERT INTO shohins(shohin_id,shohin_name,shohin_price,picture_pass)VALUES("12","アヒージョ",1000,"ahi-jo.png");

アップデート文
UPDATE users
SET user_id = '2101132@s.asojuku.ac.jp'
WHERE user_name = '井浦';

-- 2101131@s.asojuku.ac.jp阿部
-- 2101132@s.asojuku.ac.jp井浦
-- 2101462@s.asojuku.ac.jp牛島
-- 2101149@s.asojuku.ac.jp梶原
-- 2101156@s.asojuku.ac.jp桑野
-- 2101216@s.asojuku.ac.jp渡邊
