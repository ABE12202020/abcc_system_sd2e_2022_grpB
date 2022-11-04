<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>ログイン</title>
<style>
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    
    
        <div class="container-fluid">
          <button class="navbar-toggler" type="button  " data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="ナビゲーションを切り替える">
            <span class="navbar-toggler-icon"></span>        
        </button
    
          
            <form role="search">
                
            </form>
          </div>
        </div>
      </nav>
      <form action="logcheck.php" method="post" name="form" >
      <div id="maindiv" class="container">
            <div class="row mt-5">
                <div class="offset-md-3 col-md-6">
                    <h1 class="text-warning mb-5 text-center">ログイン</h1>
                    <div class="row">
                        <div class="col-md-12 mt-1 mb-1 alert-danger text-center" id="errorMsg">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="userid" placeholder="abc@abc.com">
                                <label for="lastname">メールアドレス</label>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="userpass" placeholder="abc@abc.com">
                                <label for="lastname">パスワード</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="d-grid gap-2">
                                
                                
                                <button class="btn btn-warning btn-lg text-white"  onclick="registClick()">ログイン</button>
                            
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
      </form>
      <!-- 試し
      <script language="javascript" type="text/javascript">
    const myname = document.getElementById('myname');
    const button1 = document.getElementById('button1');

    button1.addEventListener('click', (e) => {
      // デフォルトのイベントをキャンセル
      e.preventDefault();

      function registClick(){
        const mailPattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
        const passPattern = /^(?=.*[A-Z])(?=.*[.?/-])[a-zA-Z0-9.?/-]{8,24}$/;

        let mail = document.getElementById("usermail").value;
        let pass = document.getElementById("pass").value;
        let isSuccess = true;

        document.getElementById("errorMsg").innerHTML = "";

        if(mailPattern.test(mail) == false){
            let errorMsgTag1 = document.createElement("p");
            errorMsgTag1.textContent = "メールアドレスの形式が不正です。";

            document.getElementById("errorMsg").appendChild(errorMsgTag1);

            isSuccess = false;
        }

        if(passPattern.test(pass) == false){
            let errorMsgTag2 = document.createElement("p");
            errorMsgTag2.textContent = "パスワードは8文字以上で英字（大文字/小文字）、数字、記号が1つ以上含まれる必要があります。";

            document.getElementById("errorMsg").appendChild(errorMsgTag2);

            isSuccess = false;
        }

        if(isSuccess == true){
            window.location.href = 'success.html';
        }
  
    }
  </script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./check.js"></script>
</body>

</html>