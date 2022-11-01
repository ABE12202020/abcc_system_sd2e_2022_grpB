function registClick(){
    const mailPattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
    const passPattern = /^(?=.*[A-Z])(?=.*[.?/-])[a-zA-Z0-9.?/-]{8,24}$/;

    let mail = document.getElementById("user_id").value;
    let pass = document.getElementById("pass").value;
    let isSuccess = true;
    var aa='おーい';
    document.getElementById("errorMsg").innerHTML = "";

    if(mailPattern.test(mail) == false){
        let errorMsgTag1 = document.createElement("p");
        errorMsgTag1.textContent = "メールアドレスの形式が不正です。";

        document.getElementById("errorMsg").appendChild(errorMsgTag1);

        isSuccess = false;
    }

    // if(passPattern.test(pass) == false){
    //     let errorMsgTag2 = document.createElement("p");
    //     errorMsgTag2.textContent = "パスワードは8文字以上で英字（大文字/小文字）、数字、記号が1つ以上含まれる必要があります。";

    //     document.getElementById("errorMsg").appendChild(errorMsgTag2);

    //     isSuccess = false;

    // }

    if(isSuccess == true){
        document.form.submit();
        
    }

}

